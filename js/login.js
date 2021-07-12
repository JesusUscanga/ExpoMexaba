var text = document.getElementById("password");
var pass = "contraseña";
text.addEventListener('keyup', (event) => {
    var inputText = event.path[0].value;
    if (inputText == pass) {
        window.location.href = 'Secciones/';
    }
});