<?php

// setcookie('mycookie','cookie value', time() + 86400, '/');
// ? delete cookie
setcookie('mycookie', '', time()- 86400, '/');

echo $_COOKIE['mycookie'];
?>