document.addEventListener("DOMContentLoaded", function(){
    let menu = document.getElementById("abrir-menu");
    let sidebar = document.getElementById("sidebar");
    let overlay = document.getElementById("overlay");
    let img = document.getElementById("img-menu");
    let fechar = document.getElementById("cancelar");
    let jogos = document.getElementById('dropdown');
    let dropdown = document.querySelector('.menu-dropdown');
    let arrow = document.querySelector('.arrow');

    // dropdown
    jogos.addEventListener('click', function (event){
        dropdown.classList.toggle('ativo');
        arrow.classList.toggle('open');
    });

    // fecha dropdown
    document.addEventListener('click', function(event){
        if(!dropdown.contains(event.target) && !jogos.contains(event.target)){
            dropdown.classList.remove('ativo');
            arrow.classList.remove('open');
        }
    });

    // menu mobile
    menu.addEventListener("click", function(event){
        sidebar.style.left = "0";
        overlay.style.display = "block";
        img.style.display = "none";
    });
    overlay.addEventListener("click", function(event){
        sidebar.style.left = "-300px";
        overlay.style.display = "none";
        img.style.display = "inline-block"
    });
    fechar.addEventListener("click", function(event){
        sidebar.style.left = "-300px";
        overlay.style.display = "none";
        img.style.display = "inline-block";
    });
    //executar sempre que a janela do navegador for redmensionada 
    window.addEventListener("resize", function(){
        const largura = window.innerWidth;

        if(largura >= 769){
            img.style.display = "inline-block";
        }
    });
});