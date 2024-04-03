const personagens = document.querySelectorAll('.personagem');//busca por todos os seletores que tenha classe personagens

//passo 2 - adicionar a classe selecionado no personagem que o usuário passar o cursor do mouse
personagens.forEach((personagem) => {
    personagem.addEventListener('mouseenter', () => {

        if(window.innerWidth < 450){//Para ver no celular não tendo usabilidade ruim, ao clicar na imagem
            window.scrollTo({top: 0, behavior: "smooth"});//Rolagem para, até o topo, behavior comportamento da rolagem, smooth(suave)
        }

        //passo 3 - verificar se já exista um personagem selecionado, se sim, devemos remover a seleção dele 
        removerSelecaoDoPersonagem();
        
        personagem.classList.add('selecionado');

        //OBJETIVO 2 - quando passar o mouse em cima do personagem na listagem, trocar a imagem.
        
        //passo 1 - pegar o elemento do personagem grande pra adicionar as informações nele
        alterarImagemPersonagemSelecionado(personagem);
    })
})//tal do ouvinte, vai ouvir a ação quando o usuário clicar o botão, a ação que vai ser disparada. forEach para cada item da lista, ao passar pelo laço vai armazenar o personagem atual que está dentro do laço.

function alterarImagemPersonagemSelecionado(personagem) {
    const imagemPersonagemGrande = document.querySelector('.personagem-grande');
    //passo 2 - alterar a imagem do personagem grande
    const idPersonagem = personagem.attributes.id.value; //Está pegando o atríbuto id do personagem e salvando na váriavel idPersonagem
    imagemPersonagemGrande.src = `../imagens/card-${idPersonagem}.jpg`;//templete string, interpolação de strings, usado para unir texto com outro texto
}

function removerSelecaoDoPersonagem() {
    const personagemSelecionado = document.querySelector('.selecionado');
    personagemSelecionado.classList.remove('selecionado');
}