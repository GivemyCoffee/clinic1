<?php
require_once('auth.php');
require_once('MainClass.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $register = json_decode($class->register());
    if($register->status == 'success'){
        $_SESSION['flashdata']['type']='success';
        $_SESSION['flashdata']['msg'] = ' Account has been registered successfully.';
        echo "<script>location.href = './login_verification.php';</script>";
        exit;
    }else{
        echo "<script>console.error(".json_encode($register).");</script>";
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

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="form-container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form action="./register.php" method="POST">
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
                            <div class="form-group">
                               <label for="firstname" class="label-control">First Name</label>
                               <input type="text" name="firstname" id="firstname" class="form-control rounded-0" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" autofocus required>
                            </div>
                            <div class="form-group">
                               <label for="lastname" class="label-control">Last Name</label>
                               <input type="text" name="lastname" id="lastname" class="form-control rounded-0" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" required>
                            </div>
                            <div class="form-group">
                               <label for="phone" class="label-control">Phone</label>
                               <input type="text" name="phone" id="phone" class="form-control rounded-0" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" required>
                            </div>
                           <div class="form-group">
                               <label for="email" class="label-control">Email</label>
                               <input type="email" name="email" id="email" class="form-control rounded-0" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
                            </div>
                           <div class="form-group">
                               <label for="password" class="label-control">Password</label>
                               <input type="password" name="password" id="password" class="form-control rounded-0" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" required>
                            </div>
                            <div class="clear-fix mb-4"></div>
                            <div class="form-group text-end">
                                <button class="btn btn-primary bg-gradient rounded-50 btn-block">Create Account</button>
                            </div>

<div class="text-center">
    <a class="small" href="login.php">Already have an account? Login!</a>

    <hr>
    <a href="index.php" class="btn btn-google btn-user btn-block">
        <i class="fab fa-google fa-fw"></i> Register with Google
    </a>
    <a href="index.php" class="btn btn-facebook btn-user btn-block">
        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
    </a>
</div>
</form>
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

</body>
</html>