document.addEventListener("DOMContentLoaded", function(){

    let bnt = document.getElementById("btn");
    let span = document.getElementById("span")
   
    bnt.addEventListener("click", function(event){
        event.preventDefault();
        console.log(span.style.display);
        if (span.style.display === "none"){
            span.style.display === "inline"
            btn.innerHTML = "Ler menos"
        }else{
            span.style.display === "none"
            btn.innerHTML="Ler mais"
        }
    });
    
});