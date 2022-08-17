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
    // $param["m_pw"] = password_hash($param["m_pw"], PASSWORD_BCRYPT);
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

  public function signIn()
  {
    $json = getJson();
    $param = [
      "m_email" => $json['m_email'],
      "m_pw" => $json['m_pw']
    ];
    $result = $this->model->signIn($param);
    if ($result) {
      $this->flash(_LOGINUSER, $result);
      $sess_id = session_id();
      return [_RESULT => $result, 'session_id' => $sess_id];
    }

    return [_RESULT => 0];
  }
}
