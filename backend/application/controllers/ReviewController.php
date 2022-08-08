<?php

namespace application\controllers;

use Exception;

use function PHPSTORM_META\type;

class ReviewController extends Controller
{
    public function getPurchase()
    {        
        $urlPaths = getUrlPaths();
        if(!isset($urlPaths)){ exit(); }
        $param = [ "m_num" => intval($urlPaths[2]) ];
        return $this->model->getPurchase($param);
    }

    public function getUserProductList()
    {        
        $urlPaths = getUrlPaths();
        if(!isset($urlPaths)){ exit(); }
        $param = [ "m_num" => intval($urlPaths[2]) ];
        return $this->model->getUserProductList($param);
    }

    public function insertReview()
    {        
    $json = getJson();
    $param = [
        "m_email" => $json['m_email'],
        "m_pw" => $json['m_pw']
      ];
        if(!isset($urlPaths)){ exit(); }
        $param = [ "m_num" => intval($urlPaths[2]) ];
        return $this->model->getUserProductList($param);
    }
}
