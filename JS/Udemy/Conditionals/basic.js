/**Estruturas de Controle de Fluxo (Condicionais)
 * As estruturas de controle definem caminhos diferentes para o código seguir, dependendo de uma condição.
 * 
 * O if avalia uma expressão booleana e executa um bloco de código se for verdadeira.
 * O else fornece um caminho alternativo se a condição for falsa.
 * O else if permite testar múltiplas condições.
 * 
 * O switch melhor que vários if/else quando se tem múltiplas opções de comparação.
 */

let age = 17;

if(age < 18){
    "Menor";
} else if(age === 18){
    "Permitido";
} else {
    "Permitido";
}

if (0); //0 é falsy
if (""); //String vazia é falsy
if (null); //null é falsy
if (undefined); //undefined é falsy
if (NaN); //NaN é falsy

let msg = (age >= 18)? "Permitido": "Negativo";
msg; //Out: "Negativo"

let color = "Pretin";

switch (color) {
    case "Pretin":
        console.log("Nigga");
        break;
    case "Azulzin":
        console.log("Gay");
        break;
    case "Verdin":
        console.log("Maconha");
        break;
    case "Branquin":
        console.log("Palmito");
        break;
    default:
        console.log("Transparente");
        break;
}