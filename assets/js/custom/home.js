document.addEventListener("DOMContentLoaded", function(){

    let btn = document.getElementById("btn");
    let span = document.getElementById("span")
    let pontos = document.getElementById("pontos")

    btn.addEventListener("click", function(event){
        event.preventDefault();
        
        if (span.classList.contains("ler-mais")){
            span.classList.remove("ler-mais");
            pontos.classList.add("menos")
            btn.innerHTML = "Ler menos"

        }else{
            span.classList.add("ler-mais");
            btn.innerHTML= "Ler mais"
            pontos.classList.remove("menos")
        }
        
    });
    
    
});