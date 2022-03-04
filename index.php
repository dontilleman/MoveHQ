<?php
    require_once('.scripts/users.inc.php');
    session_start();
    $_SESSION['loggedIn'] = false;
    $_SESSION['error'] = '';
    if(!empty($_POST)) {
      if($_POST['userName'] && $_POST['password']){
        $_SESSION['loggedIn'] = true;
        header('Location: task-list.php');
      } else {
        $_SESSION['loggedIn'] = false;
        $_SESSION['error'] = 'Please enter your User Name and Password';
      }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href= "style/reset.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href= "style/MoveHQ.css" rel="stylesheet">
    <title>MoveHQ: Task List App</title>
  </head>
  <body>
    <div id ='wrap'>
      <h1>Login and Manage your task list</h1>
      <?php 
      if(strlen($_SESSION['error']) > 0) {
        echo "<div id='error'>".$_SESSION['error']."</div>\n";
      }
      ?>
      <form action='' id='login' method='post'>
        <label for='userName'>User Name:<input type='text' id='userName' name='userName' /> <br />
        <label for='password'>Password:<input type='password' id='password' name='password' />
        <input type="submit" value="Login">
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
