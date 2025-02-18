/**O que é uma função?
 * Uma função é um bloco de código reutilizável que executa uma tarefa específica. 
 * Você pode chamá-la quantas vezes quiser, evitando a repetição de código.
 */

function nomeFuncao(params){
    //código
    return //valor de retorno (opcional)!
}

//Função Declarativa A forma mais tradicional de criar funções. 
// Elas são "hoisted", ou seja, podem ser chamadas antes de serem declaradas.
function greet(name){
    return `Hello, ${name}`;
}
greet("Pedrin"); //Out: Hello, Pedrin

//Função Anônima (Expression) São armazenadas dentro de variáveis e não são elevadas pelo hoisting.
const sum = function(a, b) {
    return a + b;
}; //Lembrar de fechar!!
sum(2, 5); //Out: 7

//Arrow Function (ES6) Uma forma mais curta de escrever funções. 
// Não possui seu próprio this, o que muda como lidamos com escopo.
const mult = (a, b) => a * b;
mult(3, 2); //Out: 6