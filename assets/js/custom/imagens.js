document.getElementById("imagens").addEventListener("submit", function (event){

    event.preventDefault();

    let contador = 0;
    let carta = document.querySelectorAll("input[type='radio']:checked");
    // console.log(carta[0]);
    
    carta.forEach(unidade=>{

        if(unidade.value === "Sim"){

            if (unidade.name === "op1"){
                contador = contador + 1
            }
            else if(unidade.name === "op2"){
                contador = contador + 2
            }
            else if (unidade.name === "op3"){
                contador = contador + 4
            }else{
                contador = contador + 8
            }
        }

    });

    if (contador > 0){
        console.log(contador);
        document.getElementById("resul_hidden").value = contador;
        this.submit();
    }else{
        document.getElementById("alert").innerText = "Você não escolheu nenhuma imagem!";
        document.getElementById("alert").style.display = "block";
    }
    
    // console.log(contador);
});