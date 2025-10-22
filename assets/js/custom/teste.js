document.addEventListener("DOMContentLoaded", function(){
    const box = document.querySelectorAll(".box");
    console.log(box); 
    const drop = document.querySelectorAll(".drop");

    let pai;
    box.forEach(box_unic => {
        box_unic.addEventListener('dragstart', e => {
            const origem = box_unic.setAttribute("data-origem", slot.dataset.slot);
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
            //console.log(drop_sab)
            drop_sab.remove();
            const columnInicial = document.querySelector('.column-1');
            const slot = columnInicial.querySelectorAll(".slot")

            box.forEach(b => {
                slot.appendChild(b);
                b.classList.remove('placed');
            });
        });
    }

});