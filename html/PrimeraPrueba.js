//let se puede modificar, const no.
let a = 10;
let b = 20;

console.log(a);

//FORMAS DE ESCRIBIR FUNCIONES:
//Forma 1
function suma(a, b){
    return a + b;
}
//Forma 2
const suma2 = (a, b) => {
    return a + b; //esta sirve para pasarle un parámetro a otra función
}                   // las funciones se guardan en const pq no las queres modificar
//Forma 3
const suma3 = (a, b) => a + b;

//ARRAYS
let array = [1, 2, 3, 4, 5];

//FOR
for(let i = 0; i < array.length; i++) {
        console.log(array[i]);
}

//WHILE
let a = 10
while(a<20) {
    console.log(a);
    a++
}

//STRINGS
let string = "hola mundo";

console.log("first char!" + string[0]);

document.addEventListener("DOMContentLoaded", () =>{
    const mydiv = document.getElementById("mydiv");
    console.log("mydiv");
    mydiv.addEventListener("click", () => {
        alert("me cliqueaste");
    })
});
/*recibe el evento que tiene que escuchar que tiene 
un nombre en particular, en estre caso es "load", pero 
también puede ser "click", "mouseover", etc.*/
