function showService(e){
    var value = e.options[e.selectedIndex].value;
    
    document.getElementById("serviceIcon").src=dadosAjuda[value].icon;
    document.getElementById("serviceTitle").innerHTML = dadosAjuda[value].title;
    document.getElementById("serviceDescription").innerHTML = dadosAjuda[value].description;
}

// const filmes = JSON.parse(dataFilmes);
// // console.log(filmes);

// let cards = document.querySelectorAll('.card');
// let columnsCards = document.querySelectorAll('.col-card');

// let nomeFilme="";
// let imagemFilme="";
// let descricaoPequena="";

// for (let i = 0; i < cards.length; i++){
//     nomeFilme = filmes[i].nome;
//     imagemFilme = filmes[i].foto;
//     descricaoPequena = filmes[i].descLonga.substring(0,170)+"...";
//     cards[i].innerHTML ="<img src='./assets"+imagemFilme+"'class='card-img-top' alt=''><div class='card-body'><h1 class='card-title'>"+nomeFilme+"</h1>\n<p class='card-text'>"+descricaoPequena+"</p>\n<a href='about-item-catalog.html?filme="+i+"' class='btn btn-success'>Abrir</a>\n</div>";
// }

// function addFlex(e){
//     e.classList.add("d-flex");
// }

// function removeFlex(e){
//     setTimeout(()=>e.classList.remove("d-flex"),300);
// }