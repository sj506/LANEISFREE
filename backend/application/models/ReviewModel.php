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
        $sql = 'SELECT B.*, date_add(DATE_FORMAT(A.pur_date, "%Y-%m-%d"),INTERVAL 7 DAY) AS pur_date
                FROM t_purchase A
                INNER JOIN t_product B
                ON A.pro_num = B.pro_num
                WHERE A.m_num = :m_num';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
