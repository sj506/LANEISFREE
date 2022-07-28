<?php

namespace application\controllers;

use Exception;

use function PHPSTORM_META\type;

class ProductController extends Controller
{
    public function getProductList()
    {
        return $this->model->getProductList();
    }
}
