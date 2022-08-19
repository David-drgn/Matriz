var width = screen.width;

var ValueBranco = document.getElementById("email-usuario");

if (width < 905) {
    document.getElementById("email-usuario").placeholder = "    Email";
    document.getElementById("senha-usuario").placeholder = "    Senha";
}
if (Width > 800) {
    document.getElementById("email").placeholder = ValueBranco;
    document.getElementById("senha").placeholder = ValueBranco;
}