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
}
