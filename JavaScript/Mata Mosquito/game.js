var altura = 0
var largura = 0

//definindo o tamanho do palco do jogo
function tamanhoPalco(){
    altura = window.innerHeight
    largura = window.innerWidth

    console.log(altura, largura)
}

tamanhoPalco()


function posicaoRandomica(){

    //remover o mosquito anterior (caso ele exista)
    if(document.getElementById('mosquito')){
        document.getElementById('mosquito').remove()
    }

    var posicaoX = Math.floor(Math.random() * largura) - 90
    var posicaoY = Math.floor(Math.random() * altura) - 90

    posicaoX = posicaoX < 0 ? 0 : posicaoX
    posicaoY = posicaoY < 0 ? 0 : posicaoY

    console.log(posicaoX, posicaoY)

    //criando o elemento html
    var mosquito = document.createElement('img')
    mosquito.src = 'imagens/mosquito.png'
    mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio()
    mosquito.style.left = posicaoX + 'px'
    mosquito.style.top = posicaoY + 'px'
    mosquito.style.position = 'absolute' 
    mosquito.id = 'mosquito'

    document.body.appendChild(mosquito)

    
}

// Função para criação do tamanho aleatorio do mosquito
function tamanhoAleatorio(){
    var tamanhoMosquito = Math.floor(Math.random()*3)

    switch(tamanhoMosquito){
        case 0:
            return 'mosquito1'

        case 1:
            return 'mosquito2'

        case 2:
           return 'mosquito3'
    }
}

//Mudando o lado que o mosquito olha de forma randomica
function ladoAleatorio(){
    var lado = Math.floor(Math.random()*2)

    switch(lado){
        case 0:
            return 'ladoA'

        case 1:
            return 'ladoB'
    }
}

