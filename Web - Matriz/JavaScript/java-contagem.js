var cont = 0;

function contagem() {
    var email = document.getElementById("email-usuario").value;
    var senha = document.getElementById("senha-usuario").value;

    if (cont == 2) {
        alert("Acesso bloqueado!!");
        window.close();
    } else {
        if (email == "99999" && senha == "12345") {
            alert("Acesso liberado");
            window.location.href = "Gestor/Gestor.html";
        }

        if (email == "12345" && senha == "12345") {
            alert("Acesso liberado");
            window.location.href = "Funcionarios/Funcionario.html";
        }

        else if (email == "" && senha == "") {
            alert("Complete todos os atributos por favor!!");
        }
        else {
            alert("Acesso negado");
            cont++;
        }
    }
};