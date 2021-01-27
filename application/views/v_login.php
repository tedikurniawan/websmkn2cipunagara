<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMKN 2 Cipunagara | Halaman <?=$title?></title>
    <link rel="icon" href="<?=base_url()?>template/back-end/images/logo-smkn2cipunagara.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="<?=base_url()?>template/back-end/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>template/back-end/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-7 text-center pt-5 mt-5">
                                <img src="<?=base_url()?>template/back-end/images/logo-smkn2cipunagara.png" height="360px" width="360px">
                            </div>
                            <div class="col-lg-5">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h3 class="text-gray-900 mb-4">LOGIN ADMIN</h3>
                                        <h4 class="text-center text-black font-bold mb-5 pb-2">SMKN 2 CIPUNAGARA </h4>
                                    </div>
                                    <?php
                                    echo form_open('login');
                                    if ($this->session->flashdata('pesan')){
                                        echo '<div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                        echo $this->session->flashdata('pesan');
                                        echo'</div>';    
                                    }
                                    ?>
                                    <form class="user">
                                        <hr>
                                        <div class="form-group mt-5">
                                            <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                                        </div>
                                        <div class="form-group mb-5">
                                            <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" type="submit">LOGIN</button>
                                        <a class="btn btn-success btn-block mb-5" href="<?=base_url()?>">WEB SEKOLAH</a>   
                                        <hr>
                                    </form>
                                    <?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- Jquery Core Js -->
    <script src="<?=base_url()?>template/back-end/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>template/back-end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>template/back-end/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>template/back-end/js/sb-admin-2.min.js"></script>
</body>

</html>