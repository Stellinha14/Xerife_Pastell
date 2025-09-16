document.getElementById("famoso").addEventListener("submit", function (event){

    event.preventDefault();
    
    //gerando um numero aleatorio entre 0 e 5
    let num = Math.floor(Math.random() * 5) // math.random gera um n° decimal entre 0 e 1 e math.floor arrendoda para baixo 
    let opc = document.getElementById('num').value;
    let nome = "";
    let img = "";
    let fama = "";

    if (opc === "1"){
        nome = "Pastell Jordan";
    }
    else if(opc === "2"){
        nome = "Rock in Pastell";
    }
    else if(opc === "3"){
        nome = "Muscle Pastell";
    }
    else if(opc === "4"){
        nome = "Sra. Pastell";
    }else{
        nome = "Pastello";
    }

    if(num == 0){
        img = "bella";
        fama = "Bella Campos";
    }
    else if(num == 1){
        img = "gabriel";
        fama = "Gabriel Medina";
    }
    else if(num == 2){
        img = "virginia";
        fama = "Virgínia Fonseca";
    }    
    else if(num == 3){
        img = "caua";
        fama = "Cauã Reymond";
    }else{
        img = "hyunjin";
        fama = "Hyunjin";
    }   

    document.getElementById("img").value = img;
    document.getElementById("opc").value = nome;
    document.getElementById("fama").value = fama;

    this.submit();
//console.log("Voce escolheu o ", nome);
});