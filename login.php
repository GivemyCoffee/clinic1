<?php
require_once('auth.php');
require_once('MainClass.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = json_decode($class->login());
    if($login->status == 'success'){
        echo "<script>location.replace('./login_verification.php');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Log In</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e7f1fc;
        } .error {
        background-color: #F2DEDE;
        color: #A94442;
        padding: 5px;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 15px;
    }
    </style>

</head>
<style>

</style>

<body>
    
<form action="./login.php" method="POST">
                        <?php 
                            if(isset($_SESSION['flashdata'])):
                        ?>
                        <div class="dynamic_alert alert alert-<?php echo $_SESSION['flashdata']['type'] ?> my-2 rounded-0">
                            <div class="d-flex align-items-center">
                                <div class="col-11"><?php echo $_SESSION['flashdata']['msg'] ?></div>
                                <div class="col-1 text-end">
                                    <div class="float-end"><a href="javascript:void(0)" class="text-dark text-decoration-none" onclick="$(this).closest('.dynamic_alert').hide('slow').remove()">x</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php unset($_SESSION['flashdata']) ?>
                        <?php endif; ?>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="logo1.png" alt="Logo" height="100">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                   <form class="user">
                                   <div class="form-group">
                               <label for="email" class="label-control">Email</label>
                               <input type="email" name="email" id="email" class="form-control rounded-0" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" autofocus required>
                            </div>
                           <div class="form-group">
                               <label for="password" class="label-control">Password</label>
                               <input type="password" name="password" id="password" class="form-control rounded-0" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" required>
                            </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div> 
                                        </div>
                                        <div class="clear-fix mb-4"></div>
                            <div class="form-group text-end">
                                <button class="btn btn-primary bg-gradient rounded-50">LOGIN</button>
                            </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                    <div class="small">
                                <a href="register.php">Create a New Account</a>
                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</form>
</body>

</html>
