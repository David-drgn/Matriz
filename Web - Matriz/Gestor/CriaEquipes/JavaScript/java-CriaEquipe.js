function Funcionario() {
    document.getElementById("btnSalvarCompetencias").checked = false;
    document.getElementById("AdicionarFuncionario").style.display = "inline-flex";
    document.getElementById("adicionarCompetencias").style.display = "none";
    document.getElementById("dadosCompetencia").style.display = "none";
}

function Competencias() {
    document.getElementById("btnSalvaFuncionario").checked = false;
    document.getElementById("AdicionarFuncionario").style.display = "none";
    document.getElementById("adicionarCompetencias").style.display = "flex";
    document.getElementById("dadosCompetencia").style.display = "none";
}

function SalvaFuncionario() {
    document.getElementById("btnSalvaFuncionario").checked = false;
    document.getElementById("btnSalvaFuncionario").checked = false;
    document.getElementById("AdicionarFuncionario").style.display = "none";
    document.getElementById("adicionarCompetencias").style.display = "none";
    document.getElementById("dadosCompetencia").style.display = "none";
}

function SalvarCompetencias(){
    document.getElementById("btnSalvarCompetencias").checked = false;
    document.getElementById("btnSalvaFuncionario").checked = false;
    document.getElementById("AdicionarFuncionario").style.display = "none";
    document.getElementById("adicionarCompetencias").style.display = "none";
    document.getElementById("dadosCompetencia").style.display = "none";
}

function CriaCompetencia() {    
    document.getElementById("popUp").style.display = "block";
    document.getElementById("dadosCompetenciaNova").style.display = "flex";
}

function DadosCompetencia() {
    document.getElementById("popUp").style.display = "block";
    document.getElementById("dadosCompetencia").style.display = "flex";
}