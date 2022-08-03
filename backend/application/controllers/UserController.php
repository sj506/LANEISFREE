<?php

namespace application\controllers;

use Exception;

use function PHPSTORM_META\type;


class UserController extends Controller
{
  public function signUp()
  {
    $json = getJson();
    $param = [
      'm_email' => $json['m_email'] . '@' . $json['m_email2'],
      'm_pw' => $json['m_pw1'],
      'm_nm' => $json['m_nm'],
      'm_gender' => $json['m_gender'],
      'm_tel' => $json['m_tel1'] . '-' . $json['m_tel2'] . '-' . $json['m_tel3'],
      'm_postcode' => $json['postcode'],
      'm_addr' => $json['addr'] . ' ' . $json['detailAddr'] . ' ' . $json['extraAddr'],
    ];
    $result = $this->model->signUp($param);
    if ($result) {
      $this->flash(_LOGINUSER, $result);
      return [_RESULT => $result];
    }
    return [_RESULT => 0];
  }

  public function logout()
  {
    $this->flash(_LOGINUSER);
    return [_RESULT => 1];
  }

  // public function signIn()
  // {
  // }
}
