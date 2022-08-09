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

    public function getUserReview($param) {
        $sql = 'SELECT pro_num
                FROM t_review
                WHERE m_num = :m_num';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getWritenReview($param) {
        $sql = 'SELECT A.pro_num, A.pro_name, A.pro_mainimg, A.pro_price,
                       B.re_star, DATE_FORMAT(B.re_time, "%Y-%m-%d") as re_time, B.re_ctnt, C.m_email, C.m_gender
                FROM t_product A
                INNER JOIN t_review B
                ON A.pro_num = B.pro_num
                LEFT JOIN t_member C
                ON B.m_num = C.m_num
                WHERE A.pro_num in (SELECT pro_num FROM t_review WHERE m_num = :m_num)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}
