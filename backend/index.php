<?php
require_once 'application/libs/Config.php';
require_once 'application/libs/Autoload.php';
new application\libs\Application();

// ini_set("session.cookie_httponly", "1");
// // 세션을 브라우저에서 console.log(document.cookie) 로 찍어도 세션ID값이 안나오게 하는 방법
// ini_set("session.cookie_secure", "1");
// // 네트워크에서 세션 아이디를 암호화하는 방법
