document.getElementById("adivinha").addEventListener("submit", function(event){
    
    event.preventDefault(); // impede envio automático
    
    let check = document.querySelectorAll("#cartas:checked");
    console.log(check)
    let resultado = 0;
    let num = 0;

    check.forEach(cd =>{
        if (cd.name === "op1" && cd.value==="Sim"){
            num = 1
            resultado += num 
        }
        else if(cd.name === "op2" && cd.value==="Sim"){
            num = 2
            resultado += num 
        }
        else if(cd.name === "op3" && cd.value==="Sim"){
            num = 4
            resultado += num 
        }
        else if(cd.name === "op4" && cd.value==="Sim"){
            num = 8
            resultado += num 
        }
        else if(cd.name === "op5" && cd.value==="Sim"){
            num = 16
            resultado += num 
        }
    });
    // console.log(resultado)
    if (resultado>0){
        document.getElementById("resultado-hidden").value = resultado; // pegando o valor da variável resultado calculada pelo JS e colocando dentro do input hidden.
        this.submit();
    }
    else{
        document.getElementById("alert").innerText = "Você não escolheu nenhum número!";
        document.getElementById("alert").style.display = "block";
    }
    

});