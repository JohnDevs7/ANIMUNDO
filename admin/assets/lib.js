class Animation{
    Sessao(primeraSessao, valorTroca){
        let result;
        result=primeraSessao.style.marginLeft=`${valorTroca}%`;
        return result;
    }
    
}
Animato = new Animation;
function manter(){
    if(location.search=='?home'){
        Animato.Sessao(sessao[0],(valor*0)*-1);
    }else if(location.search=='?ficheiro'){
        Animato.Sessao(sessao[0],(valor*1)*-1);
    }else if(location.search=='?comentario'){
        Animato.Sessao(sessao[0],(valor*2)*-1);
    }else if(location.search=='?notificacao'){
        Animato.Sessao(sessao[0],(valor*3)*-1);
    }else if(location.search=='?grafico'){
        Animato.Sessao(sessao[0],(valor*4)*-1);
    }else{}
}