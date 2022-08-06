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
        return $this->model->getUserProductList();
    }
}
