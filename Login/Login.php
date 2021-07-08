<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Login</title>

    <style>
        body {
            background: #ffe259;
            background: linear-gradient(to right, #ffa751, #ffe259);
        }
        
        .bg {
            background-image: url(img/stand.png);
            background-position: center center;
        }
    </style>
</head>

<body>
    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="img/LOGO.png" width="50" alt="">
                </div>

                <h2 class="fw-bold text-center py-5"> Bienvenido</h2>

                <form method="post" action="index.php">
                    <div class="mb-4">
                        <label for="email" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="idusuario">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="btnLogin">Iniciar Sesión</button>
                    </div>

                    <!--<div class="my-3">
                        <span>¿No tienes cuenta? <a href="ingresarusuario.php">Regístrate</a></span> <br>
                    </div>-->
                    <?php 
                        if(isset($errmensaje)){
                            echo "<div class='alert alert-danger'>
                            $errmensaje
                            </div>";
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Components 
<script src="../bootstrap/js/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>-->

</html>