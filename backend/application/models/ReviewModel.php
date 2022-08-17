<?php

namespace application\models;

use PDO;

class ReviewModel extends Model
{
    public function getPurchase($param)
    {
        $sql = "SELECT *
                FROM t_purchase 
                WHERE m_num = :m_num";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getUserProductList($param)
    {
        $sql = 'SELECT B.*, date_add(DATE_FORMAT(A.pur_date, "%Y-%m-%d"),INTERVAL 7 DAY) AS pur_deadline, DATE_FORMAT(A.pur_date, "%Y-%m-%d") as pur_date
                FROM t_purchase A
                INNER JOIN t_product B
                ON A.pro_num = B.pro_num
                WHERE A.m_num = :m_num
                AND A.pro_num not in (SELECT pro_num FROM t_review WHERE m_num = :m_num2)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->bindValue(":m_num2", $param["m_num"]);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertReview($param)
    {
        $sql = "INSERT INTO t_review
                (re_star, re_ctnt, re_img, pro_num, m_num)
                VALUES 
                (:re_star, :re_ctnt, :re_img, :pro_num, :m_num)
                ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->bindValue(":re_star", $param["re_star"]);
        $stmt->bindValue(":re_ctnt", $param["re_ctnt"]);
        $stmt->bindValue(":re_img", $param["re_img"]);
        $stmt->bindValue(":pro_num", $param["pro_num"]);
        $stmt->execute();
        return intval($this->pdo->lastInsertId());
    }

    public function updateReview($param)
    {
        $sql = "UPDATE t_review
                SET re_star = :re_star, re_ctnt = :re_ctnt, re_img = :re_img
                WHERE re_num = :re_num";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":re_star", $param["re_star"]);
        $stmt->bindValue(":re_ctnt", $param["re_ctnt"]);
        $stmt->bindValue(":re_img", $param["re_img"]);
        $stmt->bindValue(":re_num", $param["re_num"]);
        $stmt->execute();
        return intval($this->pdo->lastInsertId());
    }

    public function getUserReview($param) {
        $sql = 'SELECT pro_num
                FROM t_review
                WHERE m_num = :m_num';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function getBestReview() {
      $sql = 'SELECT a.*, c.m_nm 
              FROM t_review a
              INNER JOIN (
                  SELECT pro_num, MAX(re_star) re_star
                  FROM t_review
                  GROUP BY pro_num
              ) b ON a.pro_num = b.pro_num AND a.re_star = b.re_star
              INNER JOIN (
              SELECT m_nm, m_num FROM t_member
              ) c ON a.m_num = c.m_num
              GROUP BY pro_num';
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function getWritenReview($param) {
        $sql = 'SELECT A.pro_num, A.pro_name, A.pro_mainimg, A.pro_price, B.re_num,
                       B.re_star, DATE_FORMAT(B.re_time, "%Y-%m-%d") as re_time, B.re_ctnt, C.m_email, C.m_gender
                FROM t_product A
                INNER JOIN t_review B
                ON A.pro_num = B.pro_num
                LEFT JOIN t_member C
                ON B.m_num = C.m_num
                WHERE A.pro_num in (SELECT pro_num FROM t_review WHERE m_num = :m_num)
                AND B.m_num = :m_num1';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->bindValue(":m_num1", $param["m_num"]);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function reviewDel($param) {
        $sql = 'DELETE FROM t_review WHERE m_num = :m_num AND pro_num = :pro_num';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->bindValue(":pro_num", $param["pro_num"]);
        $stmt->execute();
        return intval($this->pdo->lastInsertId());
    }

    public function getReviewData() {
        $sql = 'SELECT A.re_star, A.re_ctnt, A.re_img, DATE_FORMAT(A.re_time, "%Y-%m-%d") as re_time, 
                insert(B.m_email, 5 , LENGTH(m_email) - 4, REPEAT("*", LENGTH(SUBSTRING(B.m_email, 1, instr(B.m_email, "@")-1)) - 4 )) AS m_email, 
                A.m_num, A.pro_num
                FROM t_review A
                INNER JOIN t_member B
                ON A.m_num = B.m_num';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getPagingCount($param) {
        $sql = 'SELECT CEIL(COUNT(*) / :rowCount) as cnt 
                FROM t_review';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":rowCount", $param["rowCount"]);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getPagingReviewData($param) {
        $sql = 'SELECT A.re_star, A.re_ctnt, A.re_img, DATE_FORMAT(A.re_time, "%Y-%m-%d") as re_time, 
                insert(B.m_email, 5 , LENGTH(m_email) - 4, REPEAT("*", LENGTH(SUBSTRING(B.m_email, 1, instr(B.m_email, "@")-1)) - 4 )) AS m_email,
                A.m_num, A.pro_num
                FROM t_review A
                INNER JOIN t_member B
                ON A.m_num = B.m_num
                ORDER BY A.re_time desc
                LIMIT :startIdx, :rowCount';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":rowCount", $param["rowCount"]);
        $stmt->bindValue(":startIdx", $param["startIdx"]);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getReviewAvg() {
        $sql = 'SELECT COUNT(re_star) AS re_count, round(AVG(re_star),1) AS re_avg
                FROM t_review';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);        
    }

    // public function getReviewImgData($param) {
    //     $sql = 'SELECT A.re_star, A.re_ctnt, A.re_img, DATE_FORMAT(A.re_time, "%Y-%m-%d") as re_time, 
    //             insert(B.m_email, 5 , LENGTH(m_email) - 4, REPEAT("*", LENGTH(SUBSTRING(B.m_email, 1, instr(B.m_email, "@")-1)) - 4 )) AS m_email,
    //             A.m_num, A.pro_num
    //             FROM t_review A
    //             INNER JOIN t_member B
    //             ON A.m_num = B.m_num
    //             WHERE A.re_img is not null
    //             LIMIT :startIdx, :rowCount';
    //     $stmt = $this->pdo->prepare($sql);
    //     $stmt->bindValue(":rowCount", $param["rowCount"]);
    //     $stmt->bindValue(":startIdx", $param["startIdx"]);
    //     $stmt->execute();
    //     return $stmt->fetchAll(PDO::FETCH_OBJ);
    // }
}
