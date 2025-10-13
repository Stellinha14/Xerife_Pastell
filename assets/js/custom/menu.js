document.addEventListener("DOMContentLoaded", function(){
    let menu = document.getElementById("abrir-menu");
    let sidebar = document.getElementById("sidebar");
    let overlay = document.getElementById("overlay");
    let img = document.getElementById("img-menu")
    menu.addEventListener("click", function(event){

        const verificasidebar = window.getComputedStyle(sidebar).left;
        const open = verificasidebar === "0px";
        
        if (open){
            sidebar.style.left = "-300px";
            overlay.style.display = "none";
            img.style.display = "none"
        }
        else{
            sidebar.style.left = "0";
            overlay.style.display = "block";
            img.style.display = "none"
        }
        
    });
    overlay.addEventListener("click", function(event){
        sidebar.style.left = "-300px";
        overlay.style.display = "none";
        img.style.display = "inline-block"
    });
});