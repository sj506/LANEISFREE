<?php

namespace application\controllers;

class Controller
{
    protected $model;
    private static $needLoginUrlArr = [
        'product/insHeart'
    ];

    public function __construct($action, $model)
    {
        if (!isset($_SESSION)) {
            ini_set("session.cookie_httponly", "1");
            // 세션을 브라우저에서 console.log(document.cookie) 로 찍어도 세션ID값이 안나오게 하는 방법
            ini_set("session.cookie_secure", "1");
            // 네트워크에서 세션 아이디를 암호화하는 방법

            session_start();
        }
        $urlPaths = getUrl();
        foreach (static::$needLoginUrlArr as $url) {
            if (strpos($urlPaths, $url) === 0 && !isset($_SESSION[_LOGINUSER])) {
                // echo "권한이 없습니다.";
                $res = ['state' => 0];
                echo json_encode($res);
                exit();
                // $this->getView(`redirect:$url`);
            }
        }

        $this->model = $model;
        $view = $this->$action();
        if (empty($view) && gettype($view) === "string") {
            echo "Controller 에러 발생";
            exit();
        }

        if (gettype($view) === "string") {
            require_once $this->getView($view);
        } else if (gettype($view) === "object" || gettype($view) === "array") {
            header("Content-Type:application/json");
            echo json_encode($view);
        }
    }


    protected function addAttribute($key, $val)
    {
        $this->$key = $val;
    }

    protected function getView($view)
    {
        if (strpos($view, "redirect:") === 0) {
            header("Location: " . substr($view, 9));
            exit();
        }
        return _VIEW . $view;
    }

    protected function flash($name = '', $val = '')
    {
        if (!empty($name)) { //공백이 아니면
            if (!empty($val)) {
                $_SESSION[$name] = $val;
            } else if (empty($val) && !empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }
        }
    }
}
