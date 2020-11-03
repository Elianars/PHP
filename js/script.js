function exibirCategoria(categoria){
    let elementos = document.getElementsByClassName('boxProduto');
    console.log(elementos); 
    for(let i=0; i<elementos.length; i++){
        console.log(elementos[i].id)
        if (categoria==elementos[i].id){
            elementos[i].style="";
        
        }
        else{
            elementos[i].style="display:none"
        }
    }
}

let exibirTodos= ()=>{
    let elementos= document.getElementsByClassName('boxProduto');

    for(let i=0; i<elementos.length; i++){
        elementos[i].style="";
    }
}

function destaque(imagem){
    if (imagem.height==160){
        imagem.height=120;
    }
    else{
        imagem.height=160;
    }
}

