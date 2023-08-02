var valorID = '';

$(document).ready(function () {
    CarregarFuncao();
});

function CarregarFuncao() {
    ObterValor(valorID)
}

function ObterValor(valorID) {
    if(valorID.length > 0){
        console.log(valorID);
    }else{
        console.log('Não tem valor');
    }
}