function Back() {
    window.history.back()
}

function CriaEquipe() {
    var itemSelecionado = document.getElementById("equipe").value;

    if (itemSelecionado == "Criar equipes") {
        var confirmacao = confirm("Deseja mesmo " + itemSelecionado + "?");

        if (confirmacao == true) {
            window.location.href = "CriaEquipes/CriandoEquipeBD.php";
        }

        else {
            alert("Você selecionou Cancelar!");
        }
    }

    else if (itemSelecionado == "Todas as equipes") { }

    else { location = this.value; }
}

function Equipes() {
    if (document.getElementById("Equipes").style.display === "none") {
        document.getElementById("Equipes").style.display = "grid";
    }
    else {
        document.getElementById("Equipes").style.display = "none";
    }
}

function Semaforo() {
    window.location.href = "gestor-tela2/semaforo.php";
}

function EditarEqp() {
    if (document.getElementById("EquipesEditar").style.display === "none") {
        document.getElementById("EquipesEditar").style.display = "grid";
    }
    else {
        document.getElementById("EquipesEditar").style.display = "none";
    }
}