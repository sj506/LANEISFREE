<?php

namespace application\models;

use PDO;

class ProductModel extends Model
{
    public function getProductList()
    {
        $sql = "SELECT a.*, b.cate_type , b.cate_class 
                FROM t_product a 
                INNER JOIN t_category b 
                ON a.pro_num = b.pro_num";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function getProductImg()
    {
        $sql = "SELECT * FROM t_productimg";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function productBuy(&$param)
    {
        $sql = "INSERT INTO t_purchase
            (m_num, pro_num, pur_nm, pur_addr, pur_tel, pur_count)
            VALUES
            (:m_num, :pro_num, :pur_nm, :pur_addr, :pur_tel, :pur_count )";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->bindValue(":pro_num", $param["pro_num"]);
        $stmt->bindValue(":pur_nm", $param["pur_nm"]);
        $stmt->bindValue(":pur_addr", $param["pur_addr"]);
        $stmt->bindValue(":pur_tel", $param["pur_tel"]);
        $stmt->bindValue(":pur_count", $param["pur_count"]);
        $stmt->execute();
        return intval($this->pdo->lastInsertId());
    }

    public function insHeart(&$param)
    {
        $sql = "INSERT INTO t_like
            (m_num, pro_num)
            VALUES
            (:m_num, :pro_num)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->bindValue(":pro_num", $param["pro_num"]);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function delHeart(&$param)
    {
        $sql = "DELETE FROM t_like
        WHERE m_num = :m_num and pro_num = :pro_num";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->bindValue(":pro_num", $param["pro_num"]);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function getHeart(&$param)
    {
        $sql = "SELECT a.m_num, a.pro_num, b.* FROM t_like a
                INNER JOIN t_product b
                on a.pro_num = b.pro_num
                WHERE m_num = :m_num";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function selbasket(&$param)
    {
        $sql = "SELECT a.*, b.* FROM t_basket a
                INNER JOIN t_product b
                on a.pro_num = b.pro_num
                WHERE a.m_num = :m_num and a.pro_check = 0";
        if (isset($param["pro_num"])) {
            $sql .= " and a.pro_num = :pro_num";
        }
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        if (isset($param["pro_num"])) {
            $stmt->bindValue(":pro_num", $param["pro_num"]);
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function updbasket(&$param)
    {
        $sql = "UPDATE t_basket 
                set pro_check = :pro_check
                WHERE m_num = :m_num and pro_num = :pro_num";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->bindValue(":pro_num", $param["pro_num"]);
        $stmt->bindValue(":pro_check", $param["pro_check"]);
        $stmt->execute();
        return $stmt->rowCount();
    }
    public function insbasket(&$param)
    {
        $sql = "INSERT INTO t_basket
            (m_num, pro_num, ba_stock)
            VALUES
            (:m_num ,:pro_num, :ba_stock)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":m_num", $param["m_num"]);
        $stmt->bindValue(":pro_num", $param["pro_num"]);
        $stmt->bindValue(":ba_stock", $param["ba_stock"]);
        $stmt->execute();
        return $stmt->rowCount();
    }
}
