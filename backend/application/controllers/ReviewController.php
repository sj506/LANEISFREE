<?php

namespace application\controllers;

use Exception;

use function PHPSTORM_META\type;

class ReviewController extends Controller
{
    public function getPurchase()
    {
        
        return $this->model->getPurchase();
    }
}
