document.addEventListener("DOMContentLoaded", function(){
    const box = document.querySelectorAll(".box");
    console.log(box); 
    let drop = document.querySelectorAll(".drop");
    const slots = document.querySelectorAll(".slot");
    let btn = document.getElementById("btnSig");
    let pai;
    let cont = 0;
    let guardados = [];
    let apareceu = false
    let significado = document.querySelector(".significado");

    //para aparecer o botão significado quando todos os slots estiverem no drop 
    function atualizarCont(){
        drop.forEach(d => {
            const filhoDrop = d.querySelectorAll(".box")
            filhoDrop.forEach(filho => {
                if(!guardados.includes(filho)){
                    guardados.push(filho);
                }
            });
            if(guardados.length >= 5){
                btnSig.style.display = "block";
                apareceu=true;
                guardados=[];
            }
        });
        
        

        btn.addEventListener("click", function(event){
            event.preventDefault();
            significado.classList.toggle("show");
            if (significado.classList.contains('show')){
                btn.innerHTML = "Esconder Significado"
            }else{
                btn.innerHTML = "Ver Significado";
            }
        });
    }

    
    box.forEach(box_unic => {
        const slotPai = box_unic.parentElement;

        if (slotPai){
            box_unic.setAttribute("data-origem", slotPai.dataset.slot);
        }
        box_unic.addEventListener('dragstart', e => {
            e.dataTransfer.setData('text/plain', e.currentTarget.id); 
            let pai_element = document.getElementById(e.currentTarget.id).parentElement;
            if(pai_element.classList.contains('drop')){
                pai = pai_element;
            }
        });
    });

    drop.forEach(drop_unic => {
        drop_unic.addEventListener('dragover', e => {
            e.preventDefault();
            drop_unic.classList.add('over')
        });

        drop_unic.addEventListener('dragleave', () => {
            drop_unic.classList.remove('over')
        });

        drop_unic.addEventListener('drop', e => {
            
            const id = e.dataTransfer.getData('text/plain');
            const element = document.getElementById(id);
            
            //verifica se já existe um box dentro da drop e faz a troca
            if(drop_unic.querySelector('.box')){
                const opc_antiga = drop_unic.querySelector('.box');
                let origem = element.parentElement;
                origem.appendChild(opc_antiga);
                
                drop_unic.appendChild(element);
                drop_unic.classList.remove('over');
                element.classList.add('placed');
                return;
            }
            //mostrar nr
            if (pai){
                const span_sumido = pai.querySelector('span')
                span_sumido.style.display = 'block';
            }
            
            //mostra drop_sab
            const slot = element.parentElement;
            const drop_sab = slot.querySelector('.drop-sab');
            if(drop_sab){
                drop_sab.style.display = 'flex';
            }

            //move a box para dentro do drop
            drop_unic.appendChild(element);
            drop_unic.classList.remove('over');
            element.classList.add('placed');

            // esconde o span dentro do drop
            const span = drop_unic.querySelector('span')
            if(span){
                span.style.display = "none";
            }
            atualizarCont();
        });
    });

    const btnLimpa = document.getElementById('btnLimpa');

    if(btnLimpa){
        btnLimpa.addEventListener('click', () => {
            

            box.forEach(b => {
                
                const pai_box = b.parentElement;

                if(pai_box.closest('.cont_drop')){
                    cont +1;
                    if(cont===0 && apareceu){
                        btnSig.style.display="none";
                    }
                }
                
                //colocando o span do drop novamente
                const span = pai_box.querySelector('span');
                if(span){
                    span.style.display = "block";
                }

                //colocando a box no slot correspondente
                const origemId = b.getAttribute("data-origem");
                const origem = document.querySelector(`.slot[data-slot="${origemId}"]`);
                const drop_sab = origem.querySelector('.drop-sab');

                if(origem){
                    drop_sab.style.display = "none";
                    origem.appendChild(b);
                    b.classList.remove('placed');
                    significado.innerHTML="";
                }
            });
        });
    }
    
});