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
        $urlPaths = getUrlPaths();
        if(count($urlPaths) !== 4){ exit(); }
        $m_num = intval($urlPaths[2]);
        $pro_num = intval($urlPaths[3]);
        $json = getJson();
        $image_parts = explode(";base64,", $json["pic"]); //;base64기분으로 둘로나눔
        $image_type_aux = explode("image/", $image_parts[0]);      
        $image_type = $image_type_aux[1];      //jpeg,png등 이미지타입
        $image_base64 = base64_decode($image_parts[1]); //이미지문자열을 이미지파일로디코딩
        $dirPath = _IMG_PATH . "/" . "review/" . $m_num . "/" . $pro_num; //이미지폴더경로
        $fileNm = uniqid() . "." . $image_type;
        $filePath = $dirPath . "/" . $fileNm; //이미지경로파일
        if(!is_dir($dirPath)) {
            mkdir($dirPath, 0777, true);
        }
        $result = file_put_contents($filePath, $image_base64); //파일경로이름에 파일을 넣어줌
        $param = [
            "re_star" => $json['star'],
            "re_ctnt" => $json['ctnt'],
            "re_img" => $fileNm,
            "pro_num" => $pro_num,
            "m_num" => $m_num
        ];
        $this->model->insertReview($param);

    }
}
