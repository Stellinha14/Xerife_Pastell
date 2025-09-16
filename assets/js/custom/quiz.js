// gabarito: 1 - B ; 2 - B ; 3 - A ; 4 - C ; 5 - D ; 6 - D ; 7 - B ; 8 - A ; 9 - A ; 10 - C ; 11 - A;
document.getElementById("perguntas").addEventListener("submit", function (event){

    event.preventDefault();

    let acertos = 0;

    let respostas = ["B","B","A","C","D","D","B","A","A","C","A"];

    //console.log("O Vetor é: ", respostas[2])

    let opc = document.querySelectorAll("input[type='radio']:checked");
    if(opc.length != 11){
        document.getElementById("alert").innerText = "Por favor, responda todas as perguntas!";
        document.getElementById("alert").style.display = "block";
    }else{
        //console.log(opc)
        opc.forEach(unidade=>{
            let indice = parseInt(unidade.name.replace("p",""))
            if(unidade.value === respostas[indice]){
            acertos ++;
            }
        });

        percentual = Math.round (porcentagem = (acertos/11)*100);

        document.getElementById("resul_acertos").value = acertos;
        document.getElementById("resul_percentual").value = percentual;
        this.submit();
        
        //console.log("Total de acertos: ", acertos)
        //console.log("Percentual: ", percentual)
    }
    

});        