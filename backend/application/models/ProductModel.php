<?php

namespace application\models;

use PDO;

class ProductModel extends Model
{
    public function getCategoryList()
    {
        $sql = "SELECT * from t_category";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getProductList()
    {
        $sql = "SELECT * from t_product";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
