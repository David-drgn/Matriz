function Back() {
    window.history.back()
}

function CriaEquipe() {
    var itemSelecionado = document.getElementById("equipe").value;

    if (itemSelecionado == "Criar equipes") {
        var confirmacao = confirm("Deseja mesmo " + itemSelecionado + "?");

        if (confirmacao == true) {
            window.location.href = "CriaEquipes/CriandoEquipeBD.php";
        } else {
            alert("Você selecionou Cancelar!");
        }
    } else if (itemSelecionado == "Todas as equipes") {} else { location = this.value; }
}

function Equipes() {
    if (document.getElementById("Equipes").style.display === "none") {
        document.getElementById("Equipes").style.display = "grid";
    } else {
        document.getElementById("Equipes").style.display = "none";
    }
}

function Semaforo() {
    if (document.getElementById("selecionar").style.display === "none") {
        document.getElementById("selecionar").style.display = "grid";
    } else {
        document.getElementById("selecionar").style.display = "none";
    }
}

function EditarEqp() {
    if (document.getElementById("EquipesEditar").style.display === "none") {
        document.getElementById("EquipesEditar").style.display = "grid";
    } else {
        document.getElementById("EquipesEditar").style.display = "none";
    }
}