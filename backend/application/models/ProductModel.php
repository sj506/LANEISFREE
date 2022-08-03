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
}
