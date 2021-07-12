var text = document.getElementById("password");
var pass = "contraseña";
text.addEventListener('keyup', (event) => {
    var inputText = event.path[0].value;
    if (inputText == pass) {
        window.location.href = 'Secciones/';
    }
});

text.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        if (text.value == pass) {
            window.location.href = 'Secciones/';
        } else {
            document.getElementById("alert").style.display = "block";
        }
    }
});
/*
$(".password").on('keyup', function(e) {
    if (e.key === 'Enter' || e.keyCode === 13) {
        var text1 = document.getElementById("password");
        if (text1 == pass) {
            window.location.href = 'Secciones/';
        } else {
            document.getElementById("alert").style.display = inline;
        }
    }
});*/