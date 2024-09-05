function itemActif(numero){
    var items = document.getElementsByClassName('nav-bar-nav');
    for (var i =0;i<items.length;i++){
        items[i].classList.remove("nav-bar-nav-actif");
    }
    items[numero].classList.add("nav-bar-nav-actif");

    var items2 = document.getElementsByClassName('carousel-item');
    for (var i = 0;i<items2.length;i++){
        items2[i].classList.remove("carousel-item-actif");
    }
    items2[numero].classList.add("carousel-item-actif");
}
function modifierButton(){
setInterval("alternerClasse('button','carousel-control-next')",1000);
setInterval("alternerClasse('button','carousel-control-prev')",1000);
setInterval("alternerClasse('button','navbar-toggler')",1000);
setInterval("alternerClasse('a','LPvisite Lvisite LSurvole')",1000);
setInterval("alternerClasse('p','parag')",1000);
setInterval("alternerClasse('a','nvisite visite survole')",1000);
setInterval("alternerClasse('a','nvisite visite survole')",1000);
}

function alternerClasse(typeDeBalise,nomClasse){
    var cetObjet=document.getElementsByTagName(typeDeBalise)[0];
    cetObjet.classList.toggle(nomClasse);
}


    
