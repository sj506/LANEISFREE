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
    // 찜하기 많이 받은 상위 6개 제품 가져오기
    public function getBestSeller()
    {
        return $this->model->getBestSeller();
    }

    public function productBuy()
    {
        $json = getJson();
        foreach ($json as $item) {
            $param = [
                'm_num' => $item['m_num'],
                'pro_num' => $item['pro_num'],
                'pur_nm' => $item['m_nm'],
                'pur_addr' => $item['m_addr'] . ' ' . $item['detailAddr'] . ' ' . $item['extraAddr'],
                'pur_tel' => $item['m_tel1'] . '-' . $item['m_tel2'] . '-' . $item['m_tel3'],
                'pur_count' => $item['ba_stock'],
            ];
            // $param["m_pw"] = password_hash($param["m_pw"], PASSWORD_BCRYPT);
            $result = $this->model->productBuy($param);

            if ($result) {
                $param += ['pro_check' => 1,];
                $this->model->updbasket($param);
            }
        }
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
        foreach ($json as $item) {
            $param = [
                'm_num' => $item['m_num'],
                'pro_num' => $item['pro_num'],
                'ba_stock' => $item['ba_stock'],
            ];

            $overlapCheck = $this->model->selbasket($param);
            if ($overlapCheck) {
                $param += ['pro_check' => 2,];
                $this->model->updbasket($param);
            }
            $result = $this->model->insbasket($param);
        }


        return [_RESULT => $result];
    }

    public function selbasket()
    {
        $json = getJson();
        $param = [
            'm_num' => $json['m_num'],

        ];
        if (isset($json['pro_num'])) {
            $param += ['pro_num' => $json['pro_num'],];
        }
        $result = $this->model->selbasket($param);
        return [_RESULT => $result];
    }

    public function delLike()
    {
        $json = getJson();
        $param = [
            'm_num' => $json['m_num'],
            'pro_num' => $json['pro_num'],
            'pro_check' => 2,
        ];
        $result = $this->model->updbasket($param);
        return [_RESULT => $result];
    }
}
