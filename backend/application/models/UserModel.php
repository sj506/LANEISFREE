<?php

namespace application\models;

use PDO;

class UserModel extends Model
{
  public function signUp(&$param)
  {
    $sql = "INSERT INTO t_member
            (m_email, m_pw, m_nm, m_gender, m_tel, m_postcode, m_addr)
            VALUES
            (:m_email, :m_pw, :m_nm, :m_gender, :m_tel, :m_postcode, :m_addr)
            ON duplicate key update
            m_date = now()";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(":m_email", $param["m_email"]);
    $stmt->bindValue(":m_pw", $param["m_pw"]);
    $stmt->bindValue(":m_nm", $param["m_nm"]);
    $stmt->bindValue(":m_gender", $param["m_gender"]);
    $stmt->bindValue(":m_tel", $param["m_tel"]);
    $stmt->bindValue(":m_postcode", $param["m_postcode"]);
    $stmt->bindValue(":m_addr", $param["m_addr"]);
    $stmt->execute();
    return intval($this->pdo->lastInsertId());
  }
  public function signIn(&$param)
  {
    $sql = "SELECT m_email, m_pw
            FROM t_member
            WHERE m_num = :m_num";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(":m_num", $param["m_num"]);
    $stmt->execute();
    return intval($this->pdo->lastInsertId());
  }
}
