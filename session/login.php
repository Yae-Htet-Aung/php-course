<?php
session_start();


if(isset($_POST['loginBtn'])){
  $psswd = $_POST['password'];
  echo $psswd.'<br>';
  if($psswd === 'yae'){
    $_SESSION['login'] = $psswd;
    header('location:about.php');
  }else {
  echo 'wrong passowrd!';
}
} 
?>

<form action="" method="post">
  <input name="password" type="text" placeholder="password">
  <button name="loginBtn" type="submit">Login</button>
</form>