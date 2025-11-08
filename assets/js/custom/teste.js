document.addEventListener("DOMContentLoaded", function () {

    // ==========================
    // QUESTÃO 1 - CLASSIFICAÇÃO DOS PASTEIS
    // ===========================

    function questao_1() {
        const box = document.querySelectorAll(".box");
        // console.log(box);
        let drop = document.querySelectorAll(".drop");
        const slots = document.querySelectorAll(".slot");
        let btn = document.getElementById("btnSig");
        let pai;
        let cont = 0;
        let guardados = [];
        let apareceu = false
        let significado = document.querySelector(".significado");

        //para aparecer o botão significado 
        btn.addEventListener("click", function () {
            //event.preventDefault();
            //console.log("Entrei")
            significado.classList.toggle("show");

            if (significado.classList.contains('show')) {
                btn.innerHTML = "Esconder Significado";
            } else {
                btn.innerHTML = "Ver Significado";
            }
        });

        //para aparecer o botão significado !quando todos os slots estiverem no drop! 
        function atualizarCont() {
            drop.forEach(d => {
                const filhoDrop = d.querySelectorAll(".box")
                filhoDrop.forEach(filho => {
                    if (!guardados.includes(filho)) {
                        guardados.push(filho);
                    }
                });
                if (guardados.length >= 5) {
                    btn.style.display = "block";
                    apareceu = true;
                    guardados = [];
                }
            });
        }


        box.forEach(box_unic => {
            const slotPai = box_unic.parentElement;

            if (slotPai) {
                box_unic.setAttribute("data-origem", slotPai.dataset.slot);
            }
            box_unic.addEventListener('dragstart', e => {
                e.dataTransfer.setData('text/plain', e.currentTarget.id);
                let pai_element = document.getElementById(e.currentTarget.id).parentElement;
                if (pai_element.classList.contains('drop')) {
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
                if (drop_unic.querySelector('.box')) {
                    const opc_antiga = drop_unic.querySelector('.box');
                    let origem = element.parentElement;
                    origem.appendChild(opc_antiga);

                    drop_unic.appendChild(element);
                    drop_unic.classList.remove('over');
                    element.classList.add('placed');
                    return;
                }
                //mostrar nr
                if (pai) {
                    const span_sumido = pai.querySelector('span')
                    span_sumido.style.display = 'block';
                }

                //mostra drop_sab
                const slot = element.parentElement;
                const drop_sab = slot.querySelector('.drop-sab');
                if (drop_sab) {
                    drop_sab.style.display = 'flex';
                }

                //move a box para dentro do drop
                drop_unic.appendChild(element);
                drop_unic.classList.remove('over');
                element.classList.add('placed');

                // esconde o span dentro do drop
                const span = drop_unic.querySelector('span')
                if (span) {
                    span.style.display = "none";
                }
                atualizarCont();
            });
        });

        const btnLimpa = document.getElementById('btnLimpa');

        if (btnLimpa) {
            btnLimpa.addEventListener('click', () => {


                box.forEach(b => {

                    const pai_box = b.parentElement;

                    if (pai_box.closest('.cont_drop')) {
                        cont + 1;
                        if (cont === 0 && apareceu) {
                            btn.style.display = "none";
                            significado.classList.remove("show");
                            btn.innerHTML = "Ver Significado"
                        }
                    }

                    //colocando o span do drop novamente
                    const span = pai_box.querySelector('span');
                    if (span) {
                        span.style.display = "block";
                    }

                    //colocando a box no slot correspondente
                    const origemId = b.getAttribute("data-origem");
                    const origem = document.querySelector(`.slot[data-slot="${origemId}"]`);
                    const drop_sab = origem.querySelector('.drop-sab');

                    if (origem) {
                        drop_sab.style.display = "none";
                        origem.appendChild(b);
                        b.classList.remove('placed');
                    }
                });
            });
        }
    }

    // ==========================
    // QUESTÃO 2 - ADJETIVOS NOS PASTEIS
    // ===========================
    function questao_2() {
        const reset = document.getElementById("btnLimpa2");
        const campos = document.querySelectorAll(".inputAdj");
        const btnSig = document.getElementById("btnSig2")
        const sign = document.querySelector('.sign2');
        const inserir = document.querySelectorAll('.camporesp');

        //limpar 
        if(reset){
            reset.addEventListener('click', () => {
                campos.forEach(c =>{
                    c.value = '';
                })
                btnSig.style.display = "none";

                if(sign.classList.contains('show')){
                    sign.classList.remove('show');
                    btnSig.innerHTML = "Ver significado";
                }
            });
        }

        //mostra o significado
        if (btnSig){
            btnSig.addEventListener('click', () => {
                const respostas = Array.from(campos);
                const inser = Array.from(inserir);
                const registro = respostas.map(c => c.value.trim());

                registro.forEach((resp, i) => {

                    if(i == 4 && resp.endsWith("o")){
                        resp = resp.slice(0, -1) + "a";
                    }
                    if(i == 2 && resp.endsWith("o")){
                        resp = resp.slice(0, -1) + "a";
                    }
                    inser[i].innerHTML = resp.toLowerCase() + '.';
                });

                sign.classList.toggle('show');

                if(sign.classList.contains('show')){
                    btnSig.innerHTML = "Esconder Significado"
                }else{
                    btnSig.innerHTML = "Ver Significado"
                }
            });
        }

        // verifica se todos os cmapos estão preenchidos para mostra o btn
        function verificarCampo(){
            
            const verifica = Array.from(campos) // transforma nodelist em array
            const todosPreenchidos = verifica.every(c => c.value.trim() !== "") 
            // every = percorre o array e retorna 'true' se a condição '()' for validada

            btnSig.style.display = todosPreenchidos ? "block" : "none";
        }
    
        campos.forEach(c =>{
            c.addEventListener("input", verificarCampo);
        });
        
    }

    // ==========================
    // QUESTÃO 3 - RELACIONAR PASTEIS
    // ===========================
    function questao_3() {
        
    }

    // ==========================
    // CHAMADA DAS FUNÇÕES
    // ===========================

    questao_1();
    questao_2();
    questao_3();

});