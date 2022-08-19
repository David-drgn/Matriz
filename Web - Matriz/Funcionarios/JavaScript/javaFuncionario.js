var visibilidade = 1;
function MudaCor(){
    if (visibilidade == 1){
        document.getElementById("Menu-funcionarios-semaforo").style.display = "none";
        document.getElementById("Menu-funcionarios").style.display = "block";
        visibilidade = 0;
        alert (visibilidade);
    }
    else{
        document.getElementById("Menu-funcionarios-semaforo").style.display = "none";
        document.getElementById("Menu-funcionarios").style.display = "block";
        visibilidade = 1;
        alert (visibilidade);
    }
}   