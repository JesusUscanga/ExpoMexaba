<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylelogin.css">
    <title>Login</title>

</head>

<body>

    <div class="container-fluid col-8 imgandinput">
        <div class="row">
            <div class="col-lg-4 col-2"></div>
            <div class="col-lg-4 ">

                <div class="col text-center ">
                    <img src="img/LOGO.png " class="img-fluid ">
                    <br><br><br>
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title titulo">Bienvenido</h5>
                            <p class="card-text texto">Introduce el código de acceso</p>
                            <input type="password" class=" inppass" name="password" id="password">
                            <p id="alert" class="text-center hidden">Contraseña errónea</p>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="#" class="instrucciones">Instrucciones para registro</a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-4 col-2"></div>
        </div>
    </div>
    <img src="img/logorm.png" class="imgfoot2">
    <img src="img/logotezca.png" class="imgfoot">  
    <form action="index.php" method=post name="formularioLogin">
        <input type="hidden" name="passwordhidden" value="" id="passwordhidden">
</form>


</body>
<script src="bootstrap/js/popper.min.js "></script>
<script src="bootstrap/js/bootstrap.min.js "></script>
<script src="js/login.js"></script>
<script>

text.addEventListener('keyup', (event) => {
    var inputText = event.path[0].value;
    console.log(inputText);
    textHidden.value=inputText;
    if (inputText == pass) {
        document.formularioLogin.submit();
    }
    else{
    }
});

text.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        if (text.value == pass) {
            document.formularioLogin.submit();
        } else {
            document.getElementById("alert").style.display = "block";
        }
    }
});
</script>
</html>