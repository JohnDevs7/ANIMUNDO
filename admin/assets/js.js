
let menu = document.getElementsByClassName('item-list-menu-leftr'),
sessao = document.getElementsByClassName('dashboard'),
valor = 20;

for (let i = 0; i < menu.length; i++) {
    menu[i].addEventListener('click', ()=>{
        Animato.Sessao(sessao[0],(valor*i)*-1);
    });   
}
manter();


