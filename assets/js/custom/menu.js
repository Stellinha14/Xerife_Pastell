document.addEventListener("DOMContentLoaded", function(){
    teste();
    // Elementos Gerais
    let menu = document.getElementById("abrir-menu");
    let sidebar = document.getElementById("sidebar");
    let overlay = document.getElementById("overlay");
    let img = document.getElementById("img-menu");
    let fechar = document.getElementById("cancelar");

     // Elementos Dropdown Desktop
    let jogos = document.getElementById('dropdown');
    let dropdown = document.querySelector('.menu-dropdown');
    let arrow = document.querySelector('.arrow');

    // Elementos Dropdown Mobile
    let jogoMob = document.getElementById('jogos-mobile');
    let dropdownMob = document.querySelector('.menu-dropdown-mobile');
    let arrowMob = document.querySelector('.sidebar-arrow');


     // ===== Dropdown Desktop =====
    jogos.addEventListener('click', function (event){
        dropdown.classList.toggle('ativo');
        arrow.classList.toggle('open');
    });

    // Fecha Dropdown Desktop
    document.addEventListener('click', function(event){
        if(!dropdown.contains(event.target) && !jogos.contains(event.target)){
            dropdown.classList.remove('ativo');
            arrow.classList.remove('open');
        }
    });

    // ======= Dropdown Mobile =======
    jogoMob.addEventListener('click', function(event){
        dropdownMob.classList.toggle('ativo');
        arrowMob.classList.toggle('open');
    });


     // ===== Menu lateral (mobile) =====
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

    //Executar sempre que a janela do navegador for redmensionada 
    window.addEventListener("resize", function(){
        const largura = window.innerWidth;

        if(largura >= 769){
            img.style.display = "inline-block";
        }
    });
    function teste(){
        const largura = window.innerWidth;
    if(largura <= 769){
        console.log('celular');
    }
    }
    
    
    // Final do Código
});