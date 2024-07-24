/*function maFonction() {
    var plop1 = 123;
    return plop1;
}

function maFonction2() {
    plop2 = 456;
}

plop1 = maFonction();

console.log("fonction 1 / plop1 : " + plop1);

maFonction2();

console.log("mafonction2 > plop2 : " + plop2);*/

/*
function produit(x, y) {
    return x * y; // Retourne le produit de x et y
}

// Exemples d'utilisation
console.log(produit(3, 4)); // Affiche 12 (car 3 * 4 = 12)
console.log(produit(-2, 5)); // Affiche -10 (car -2 * 5 = -10)
console.log(produit(0, 10)); // Affiche 0 (car 0 * 10 = 0)*/


/*
function afficheImg(image) {
    // Créer un nouvel élément img
    let imgElement = document.createElement('img');

    // Définir l'attribut src avec le chemin de l'image
    imgElement.src = image;

    // Ajouter l'élément img au corps (ou à un autre élément existant dans le DOM)
    document.body.appendChild(imgElement); // Ajoutez à <body> ou à un autre élément parent
}
let cheminImage = "images/papillon.jpg";


afficheImg(cheminImage);*/


//une phrase avec tous les noms
let str1 = "dudu,guillaume,yulia,alex,vincenzo,carla,manu";
//le nom que je veux chercher
let str2 = "manu";
//le caractère qui sépare tous les noms (ici la virgule)
let n = ",";

//on appelle la fonction strtok
strtok(str1,str2,n);


function strtok(str1, str2, n) {
    //on construit un tableau avec la fonction split
    let words = str1.split(n);
    //on affiche le tableau
    console.log(words);

//on va regarder tous les elements du tableau
    for(i=0;i<words.length;i++){
        //j'affiche les elements du tableau un par un
        console.log(words[i]);

        //je regarde si le nomdu tableau est egal au nom que je cherche
        if(words[i]==str2){
            console.log("on a trouvé manu: il est à la position " + i)
        }
    }



}




