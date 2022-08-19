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
    
    else {location = this.value;}
}

function Equipes() {
    var visivel = document.getElementById("Equipes").style.display; 
    if (visivel == "none"){
        document.getElementById("Equipes").style.display = "grid";
        visivel = "block";
    }
    else {
        document.getElementById("Equipes").style.display = "none";
        visivel = "none";
    }
}

function Semaforo() {
    window.location.href = "gestor-tela2/semaforo.php";
}

function EditarEqp(){
    var visivel2 = document.getElementById("EquipesEditar").style.display; 
    if (visivel2 == "none"){
        document.getElementById("EquipesEditar").style.display = "grid";
        visivel2 = "block";
    }
    else {
        document.getElementById("EquipesEditar").style.display = "none";
        visivel2 = "none";
    }
}