<?php

namespace application\controllers;

use Exception;

use function PHPSTORM_META\type;

class ProductController extends Controller
{
    public function getProductList()
    {
        $urlPaths = getUrlPaths();
        $param = [
            "startIdx" => intval($urlPaths[2]),
            "rowCount" => intval($urlPaths[3])
        ];

        return $this->model->getProductList($param);
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
    public function insProduct()
    {
        // product 테이블 insert 하기
        $json = getJson();
        $param = [
            'pro_name' => $json['pro_name'],
            'pro_ename' => $json['pro_ename'],
            'pro_stock' => $json['pro_stock'],
            'pro_explain' => $json['pro_explain'],
            'pro_tag1' => $json['pro_tag1'],
            'pro_tag2' => $json['pro_tag2'],
            'pro_price' => $json['pro_price'],
            'pro_volume' => $json['pro_volume'],
        ];
        $dirPath = _FRONTEND_IMG_PATH . "/hommeProduct";

        $image = $json['pro_mainimg'];
        $image_parts = explode(";base64,", $image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];

        // 문자열을 디코딩
        $image_base64 = base64_decode($image_parts[1]);
        $randomNm = uniqid();
        $filePath = $dirPath . "/" . $randomNm . "." . $image_type;
        $param['pro_mainimg'] = "/hommeProduct" . "/" . $randomNm . '.' . $image_type;

        // 해당경로에 이미지를 생성
        $result = file_put_contents($filePath, $image_base64);
        // insert 한 후 결과 값으로 pk 값 리턴
        $pro_num =  $this->model->insProduct($param);


        // category 테이블 insert 하기
        $param2 = [
            'pro_num' => $pro_num,
            'cate_type' => $json['cate_type'],
            'cate_class' => $json['cate_class'],
        ];
        $result_cate = $this->model->insCategory($param2);

        //sub img insert 하기 여러개

        $sub_images = $json['pro_subimgs'];
        $dirPath = $dirPath . "/" . "details/" . $pro_num;

        foreach ($sub_images as $sub_image) {
            $param3 = [
                'pro_num' => $pro_num,
                'op_detailimg' => '',
            ];
            $image_parts = explode(";base64,", $sub_image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            // 문자열을 디코딩
            $image_base64 = base64_decode($image_parts[1]);
            $randomNm = uniqid();
            $filePath = $dirPath . "/" . $randomNm . "." . $image_type;

            // 파일있으면 폴더 삭제하기
            $param3['op_detailimg'] = $randomNm . '.' . $image_type;

            $result_productimg = $this->model->insProductImg($param3);
            if (!is_dir($dirPath)) {
                mkdir($dirPath, 0777, true);
            }
            // 해당경로에 이미지를 생성
            $result = file_put_contents($filePath, $image_base64);
        };

        return $this->model->insProduct($param);
    }
    public function productBuy()
    {
        $json = getJson();
        if (isset($_SESSION[_LOGINUSER])) {
            return 0;
        }

        foreach ($json as $item) {
            $param = [
                'm_num' => $_SESSION[_LOGINUSER]->m_num,
                'pro_num' => $item['pro_num'],
                'pur_nm' => $item['m_nm'],
                'pur_addr' => $item['m_addr'] . ' ' . $item['detailAddr'] . ' ' . $item['extraAddr'],
                'pur_tel' => $item['m_tel1'] . '-' . $item['m_tel2'] . '-' . $item['m_tel3'],
                'pur_count' => intval($item['ba_stock']),
            ];
            // $param["m_pw"] = password_hash($param["m_pw"], PASSWORD_BCRYPT);
            $result = $this->model->productBuy($param);

            if ($result) {
                // 구매 성공하면
                $param += ['pro_check' => 1,];
                $this->model->updbasket($param);
                $this->model->updProStock($param);
            }
        }
        return [_RESULT => $result];
    }
    public function insHeart()
    {
        $json = getJson();
        $param = [
            'm_num' => $_SESSION[_LOGINUSER]->m_num,
            'pro_num' => $json['pro_num'],
        ];
        $result = $this->model->insHeart($param);

        return [_RESULT => $result];
    }

    public function delHeart()
    {
        $json = getJson();
        $param = [
            'm_num' => $_SESSION[_LOGINUSER]->m_num,
            'pro_num' => $json['pro_num'],
        ];
        $result = $this->model->delHeart($param);

        return [_RESULT => $result];
    }
    public function getHeart()
    {
        $json = getJson();
        $param = [
            'm_num' => $_SESSION[_LOGINUSER]->m_num,
        ];
        $result = $this->model->getHeart($param);

        return [_RESULT => $result];
    }

    public function insbasket()
    {
        $json = getJson();
        foreach ($json as $item) {
            $param = [
                'm_num' => $_SESSION[_LOGINUSER]->m_num,
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
            'm_num' => $_SESSION[_LOGINUSER]->m_num,

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
            'm_num' => $_SESSION[_LOGINUSER]->m_num,
            'pro_num' => $json['pro_num'],
            'pro_check' => 2,
        ];
        $result = $this->model->updbasket($param);
        return [_RESULT => $result];
    }

    public function getPagingCount()
    {
        $urlPaths = getUrlPaths();
        if (!isset($urlPaths)) {
            exit();
        }
        $param = [
            "rowCount" => intval($urlPaths[2]),
        ];
        return $this->model->getPagingCount($param);
    }
}
