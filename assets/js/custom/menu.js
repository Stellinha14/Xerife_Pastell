document.addEventListener("DOMContentLoaded", function(){
    let menu = document.getElementById("abrir-menu");
    let sidebar = document.getElementById("sidebar");
    let overlay = document.getElementById("overlay");
    let img = document.getElementById("img-menu");
    let fechar = document.getElementById("cancelar");
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

    const sidebaractive = window.getComputedStyle(sidebar).left;
    const verificasidebar = sidebaractive === "0px";
    
    if(verificasidebar){
        img.style.display = "inline-block";
    }

});