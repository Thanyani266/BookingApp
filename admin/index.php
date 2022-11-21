<?php 
    require('inc/essentials.php');
    require('inc/db_config.php'); 

    session_start();
    if(isset($_SESSION['uname'])){
        header("location:dashboard.php");
    }
  //  if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true){
  //      redirect('dashboard.php');
   // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require("inc/links.php");?>
    <style>
        .login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin-name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input name="admin-pass" required type="password" class="form-control shadow-none text-center" placeholder="password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div> 
        </form>
    </div>
   

    <?php
      
    if(isset($_POST['logi'])){
        $uname = $_POST['admin-name'];
        $pass = $_POST['login'];
        $query = "SELECT * FROM admin_cred WHERE admin_name=$uname AND admin_pass=$pass";

      $select = mysqli_query($con, $query);
      $row = mysqli_fetch_array($select);

      if(is_array($row)){
        $_SESSION['uname'] = $row['uname'];
        $_SESSION['pass'] = $row['pass'];
      }else
      {
        echo '<script type="text/javascript">';
        echo 'alert("invalid udername or password)';
        echo 'window.location.href="index.php" ';
        echo '</script>';
      }
    }

    
     # if(isset($_POST['login'])){
      #  $frm_data = filteration($_POST);

       # $query = "SELECT * FROM admin_cred WHERE admin_name=? AND admin_pass=?";
        #$values = [$frm_data['admin_name'], $frm_data['admin_pass']];

        #$res = select($query, $values, "ss");
        #if(num_rows($res) == 1){
         #   $row = $res->fetch_assoc();
          #  $_SESSION['adminLogin'] == true;
           # $_SESSION['adminId'] == $row['sr_no'];
            #redirect('dashboard.php');
        #}
        #else{
         #   alert("error", "Login failed - Invalid Credentials!!!");
        #}
      #}

    ?>



    <?php require("inc/scripts.php");?>
</body>
</html>