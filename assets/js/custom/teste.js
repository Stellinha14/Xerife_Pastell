document.addEventListener("DOMContentLoaded", function(){
    const box = document.querySelectorAll(".box");
    console.log(box); 
    const drop = document.querySelectorAll(".drop");
    const slots = document.querySelectorAll(".slot");
    let pai;

    box.forEach(box_unic => {
        const slotPai = box_unic.parentElement;
        console.log(slotPai);
        if (slotPai){
            box_unic.setAttribute("data-origem", slotPai.dataset.slot);
        }
        box_unic.addEventListener('dragstart', e => {
            e.dataTransfer.setData('text/plain', e.currentTarget.id); 
            let pai_element = document.getElementById(e.currentTarget.id).parentElement;
            if(pai_element.classList.contains('drop')){
                //console.log("oi")
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

        });
    });
    //console.log('oi')
    const btnLimpa = document.getElementById('btnLimpa');

    if(btnLimpa){
        btnLimpa.addEventListener('click', () => {

            box.forEach(b => {
                //colocando o span do drop novamente
                const drop = b.parentElement;
                const span = drop.querySelector('span');
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
                    drop.forEach
                }
            });
        });
    }
    let btn = document.getElementById("btnSig");
    let cont = 0;

    drop.forEach(d => {
        const filhoDrop = d.querySelector(".box")
        if(filhoDrop){
            cont = cont+1;
            filhoDrop = null
        }
    });
    console.log(cont);
    if (cont === 5){
        btnSig.style.display = "block"
    }
    
    let significado = document.querySelector(".significado");

    btn.addEventListener("click", function(event){
        event.preventDefault();
        significado.classList.toggle("show");
        if (significado.classList.contains('show')){
            btn.innerHTML = "Esconder Significado"
        }else{
            btn.innerHTML = "Ver Significado"
        }
    });
});