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
    public function newProductList()
    {
        return $this->model->newProductList();
    }
    public function getProductImg()
    {
        return $this->model->getProductImg();
    }
    public function productBuy()
    {
        $json = getJson();
        $param = [
            'm_num' => $json['m_num'],
            'pro_num' => $json['pro_num'],
            'pur_nm' => $json['m_nm'],
            'pur_addr' => $json['m_addr'] . ' ' . $json['detailAddr'] . ' ' . $json['extraAddr'],
            'pur_tel' => $json['m_tel1'] . '-' . $json['m_tel2'] . '-' . $json['m_tel3'],
            'pur_count' => $json['pro_count'],
        ];
        // $param["m_pw"] = password_hash($param["m_pw"], PASSWORD_BCRYPT);
        $result = $this->model->productBuy($param);

        return [_RESULT => $result];
    }
    public function insHeart()
    {
        $json = getJson();
        $param = [
            'm_num' => $json['m_num'],
            'pro_num' => $json['pro_num'],
        ];
        $result = $this->model->insHeart($param);

        return [_RESULT => $result];
    }

    public function delHeart()
    {
        $json = getJson();
        $param = [
            'm_num' => $json['m_num'],
            'pro_num' => $json['pro_num'],
        ];
        $result = $this->model->delHeart($param);

        return [_RESULT => $result];
    }
    public function getHeart()
    {
        $json = getJson();
        $param = [
            'm_num' => $json['m_num'],
        ];
        $result = $this->model->getHeart($param);

        return [_RESULT => $result];
    }

    public function insbasket()
    {
        $json = getJson();
        foreach ($json as $json) {

            $param = [
                'm_num' => $json['m_num'],
                'pro_num' => $json['pro_num'],
                'ba_stock' => $json['ba_stock'],
            ];

            $overlapCheck = $this->model->selbasket($param);
            if ($overlapCheck) {
                $this->model->updbasket($param);
            }
            $result = $this->model->insbasket($param);
        }


        return [_RESULT => $result];
    }
}
