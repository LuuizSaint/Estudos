/** Array in JS
 * Um array é uma estrutura de dados que armazena uma coleção ordenada de valores.
 * Diferente de outras linguagens que têm arrays fixos (como em C e Java), os arrays em JavaScript são dinâmicos.
 * 
 * Indexado numericamente (começa do índice 0).
 * Pode armazenar qualquer tipo de dado (números, strings, objetos, etc.).
 * Possui métodos embutidos para manipulação.
 * Baseado em objetos (internamente, arrays são um tipo especial de objeto).
 */

//Criando um Array
let nums = [1, 2, 3, 4, 5];
let fruits = ['Perinha', 'Uvinha', 'Goiabinha'];
let mixer = ['Pedrin', true, [1, 2, 3], {'CEP': 15505167}, 69];

//Criando Array com new array() (Não Recomendado!)
let names = new Array('Junin', 'Guizin', 'Duardin'); 
names; //Out: ['Junin', 'Guizin', 'Duardin']
let arrayEmpty = new Array(4); //Cria um array vázio, pode causar comportamentos inesperados.
arrayEmpty; //Out: [ <4 empty items> ]

//Acessando elmnts
nums[2]; //Out: 3
//Acessando um indíce inexistente
nums[30]; //Out: undefined

//Manipulando Arrays
// Array.push(elmnt, elmnt...) Adiciona os elmnts ao final do array 
nums.push(22);
nums; //Out: [1, 2, 3, 4, 5, 22]

// Array.unshift(elmnt, elmnt...) Adiciona os elmnts no início do array 
nums.unshift(99);
nums; //Out: [99, 1, 2, 3, 4, 5, 22]

// Array.pop() Removo o último elmnt do Array
nums.pop();
nums; //Out: [99, 1, 2, 3, 4, 5]

// Array.shift() Removo o primeiro elmnt do Array
nums.shift();
nums; //Out: [1, 2, 3, 4, 5]

//Percorrendo um Array
// for(iterator, condition, incrementor) Um loop for classico
for(let i = 0; i < fruits.length; i++){
    fruits[i]; //Out: Perinha Uvinha Goiabinha
}

//for(let elmnt of Array) Um for mais legível e organizado
for(let fruit of fruits){
    fruit; //Out: Perinha Uvinha Goiabinha
}

//Array.forEach(elmnt => {}) Método mais moderno e mais simples
fruits.forEach( fruit => {
    fruit+'s'; //Out: Perinhas Uvinhas Goiabinhas
});

// Métodos de Transformação
// newArr = Array.map(callback) Cria um novo Array aplicando uma função em cada um dos elmnts 
const dobleNums = nums.map(num => num * 2);
dobleNums; //Out: [2, 4, 6, 8, 10]

// newArr = Array.filter(callback) Cria um novo Array somente com os elmnts que "passam" no teste
const newFruits = fruits.filter(fruit => fruit.length >= 7);
newFruits; //Out: [ 'Perinha', 'Goiabinha' ]

// newArr = Array.reduce(callback) Para operações acumulativas como soma, média, agrupamento de dados, etc.
const sumNums = nums.reduce(num => num + num);
sumNums; //Out: 16

//Métodos de Busca e Verificação
const usersData = [
    {id: 1, name: "Pedrin"},
    {id: 2, name: "Rodriguin"},
    {id: 3, name: "Fernandin"}
];

//Array.find(callback) Retorna o primeiro elemento que satisfaz uma condição
let userFind = usersData.find(user => user.id == 2);
userFind; //Out: { id: 2, name: 'Rodriguin' }

//Array.some(callback) Verifica se pelo menos um elemento passa no teste
let userId = usersData.some(user => user.id >= 5);
userId; //Out: false

//Array.every(callback) Verifica se todos os elementos passam no teste
let usersNames = usersData.every(user => user.name.length >= 6);
usersNames; //Out: true

//Métodos de Ordenação e Modificação

//Array.concat(Array) Junta dois arrays
const nums1 = [1, 2, 3];
const nums2 = [4, 5, 6];

const concatResult = nums1.concat(nums2);
concatResult; //Out: [ 1, 2, 3, 4, 5, 6 ]

//Array.slice(start, end(optional)) Retorna uma parte do array
const twoNums = nums.slice(1, 3);
twoNums; //Out: [ 2, 3 ]

//Array.splice(start, deleteCount, elmnts) Remove ou adiciona elementos no meio do array
nums.splice(1, 2, 99);
console.log(nums); //Out: [ 1, 99, 4, 5 ]