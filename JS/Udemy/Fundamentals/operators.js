let a = 10, b = 5;

/** Operadores Aritméticos
 * Para realizar operações matemáticas
 */

a + b; //Out: 15 (soma)
a - b; //Out: 5 (subtração)
a * b; //Out: 50 (multiplicação)
a / b; //Out: 2 (divisão)
a % b; //Out: 0 (módulo)
a ** b; //Out: 100000 (expoente)

10 / 0; //Out: Infinity
-10 / 0; //Out: -Infinity
0 / 0;  //Out: NaN


/** Operadores de Atribuição
 * Para atribuir valores a variáveis
 */

let x = 8;
x += x; //Out: 16
x -= x; //Out: 0
x /= x; //Out: 1
x *= x; //Out: 64
x %= x; //Out: 0
x **= x; //Out: 16777216


/** Operadores de Comparação
 * Para comparar dois valores 
 */

 10 == "10"; //Out: true (igual)
 10 === "10"; //Out: false (igual || compara tipo)
 true != false; //Out: false (diferente || compara tipo)
 4 !== "4"; //Out: true (diferente || compara tipo)
 4 > 5; //Out: false (maior)
 2 >= 2; //Out: true (maior ou igual)
 3 < 5; //Out: true (menor)
 5 <= 0; //Out: false (menor ou igual)

/** Operadores Lógicos
 * Para combinar expressões booleanas
 */

true && false; //Out: false (&& AND)
true || false; //Out: true (|| OR)
!true; //Out: false (! NEGAÇÃO)



/** Operadores Ternários
 * Para encurtar o if-else
 */

let age = 18;
// condição ? true : false;
( age >= 18 )? "Maior" : "Menor"; //Out: "Maior"


/** Operadores de Tipo
 * Para trabalhar com tipos de dados
 */

// typeof (Tipo de dado)
typeof('GG'); //Out: String

// instanceof (Verifica se um objeto é instância de uma classe)
let num = new Number;
num instanceof Number; //Out: true


/** Operadores Desestruturação
 * Para extrair dados de Objcts e Arrays
 */

let person = {
    firstName: "Gabrielzin",
    lastName: "Du Mau",
    age: 69,
    sex: "Todo dia"
};
// {ArrayKey: varName(Atribuir valor a vaiavel), ArrayKey(Usar key como variavel)} = Object;
let {firstName: vulgo, lastName, age: idadi, sex: scsu} = person;

vulgo; //Out: Gabrielzin
lastName; //Out: Du Mau
idadi; //Out: 69
scsu; //Out: Todo dia


let fruits = ['Melãum', 'Uvinha', 'Tomatin', 'Perinha', 'Manguinha'];
let [melaum, uvinha, tomatin, perinha, manguinha, moranguin] = fruits;
console.log(melaum); //Out: Malãum
console.log(uvinha); //Out: Uvinha
console.log(tomatin); //Out: Tomatin

console.log(moranguin); //Out: undefined

