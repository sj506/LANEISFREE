<?php

namespace application\models;

use PDO;

class ProductModel extends Model
{
    public function insProduct(&$param)
    {
        $sql = "INSERT INTO t_product
          (pro_name, pro_ename, pro_mainimg, pro_stock, pro_explain, pro_tag1, pro_tag2, pro_price, pro_volume)
          VALUES
          (:pro_name ,:pro_ename, :pro_mainimg, :pro_stock,:pro_explain,:pro_tag1, :pro_tag2, :pro_price, :pro_volume)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":pro_name", $param["pro_name"]);
        $stmt->bindValue(":pro_ename", $param["pro_ename"]);
        $stmt->bindValue(":pro_stock", $param["pro_stock"]);
        $stmt->bindValue(":pro_mainimg", $param["pro_mainimg"]);
        $stmt->bindValue(":pro_explain", $param["pro_explain"]);
        $stmt->bindValue(":pro_tag1", $param["pro_tag1"]);
        $stmt->bindValue(":pro_tag2", $param["pro_tag2"]);
        $stmt->bindValue(":pro_price", $param["pro_price"]);
        $stmt->bindValue(":pro_volume", $param["pro_volume"]);
        $stmt->execute();
        return intval($this->pdo->lastInsertId());
    }
    public function insCategory(&$param)
    {
        $sql = "INSERT INTO t_category
          (pro_num, cate_type, cate_class)
          VALUES
          (:pro_num ,:cate_type, :cate_class)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":pro_num", $param["pro_num"]);
        $stmt->bindValue(":cate_type", $param["cate_type"]);
        $stmt->bindValue(":cate_class", $param["cate_class"]);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function insProductImg(&$param)
    {
        $sql = "INSERT INTO t_productimg
    (pro_num, op_detailimg)
    VALUES
    (:pro_num ,:op_detailimg)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":pro_num", $param["pro_num"]);
        $stmt->bindValue(":op_detailimg", $param["op_detailimg"]);

        $stmt->execute();
        return $stmt->rowCount();
    }
    public function getProductList()
    {
        $sql =
            "SELECT a.*, b.cate_type , b.cate_class 
                FROM t_product a 
                INNER JOIN t_category b 
                ON a.pro_num = b.pro_num";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function newProductList()
    {
        $sql = "SELECT *
                FROM t_product
                -- INNER JOIN t_productimg b
                -- ON a.pro_num = b.pro_num
                ORDER BY created_at DESC
                LIMIT 0, 8";
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
    public function getBestSeller()
    {
        $sql = "SELECT A.*, B.count FROM t_product A
                LEFT JOIN 
                (
                  SELECT pro_num,COUNT(pro_num) count 
                  FROM t_like 
                  GROUP BY pro_num 
                ) AS B
                ON A.pro_num = B.pro_num
                ORDER BY COUNT DESC LIMIT 0, 6";
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

    public function updProStock(&$param)
    {
        $sql = "UPDATE t_product
                set pro_stock = pro_stock - :pur_count
                WHERE pro_num = :pro_num";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":pro_num", $param["pro_num"]);
        $stmt->bindValue(":pur_count", $param["pur_count"]);
        $stmt->execute();
        return $stmt->rowCount();
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
                WHERE m_num = :m_num and pro_num = :pro_num and pro_check = '0'";
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

    public function getPagingCount(&$param)
    {
        $sql = 'SELECT CEIL(COUNT(*) / :rowCount) as cnt 
                FROM t_product';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":rowCount", $param["rowCount"]);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
