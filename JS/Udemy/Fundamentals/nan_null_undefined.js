/**
 * Esses três valores representam ausência ou invalidez de dados, mas cada um tem um propósito específico:
 * 
 * NaN (Not-a-Number) → Representa um valor que não é um número válido, mas ainda é do tipo number.
 * 
 * null → Representa a ausência intencional de um valor.
 * 
 * undefined → Representa uma variável que não foi definida ou inicializada.
 */


/** NaN
 * 
 * typeof(): "number"
 * Significado: Valor numérico || inválido
 * Como ocorre?: Operação matemática inválida
 * Pode ser atribuído manualmente?: Não recomendado
 */

0 / 0;  //Out: NaN
Math.sqrt(-1); //Out: NaN (raiz quadrada de número negativo)
parseInt("JavaScript"); //Out: NaN (não pode converter string em número)

let x = "hello" * 3; //Out: Não faz sentido multiplicar string por número
x; //Out: NaN

Math.log(-1); //Out: NaN
Math.pow("a", 2); //Out: NaN

//Verificação:
Number.isNaN(NaN); //Out: true (melhor abordagem)
isNaN("Hello"); //Out: true (cuidado: `isNaN` converte antes de testar)


/** null
 * 
 * typeof(): "object" (bug)
 * Significado: Ausência intencional de valor
 * Como ocorre?: Definido manualmente
 * Pode ser atribuído manualmente?: Sim
 */


let usuario = null;
usuario; //Out: null
typeof usuario; //Out: object (Por algum motivo...)

//Verificação:
(usuario === null); //Out: true


/** Undefined
 * 
 * typeof(): "undefined"
 * Significado: Ausência de valor não definida
 * Como ocorre?: Variável não inicializada || propriedade inexistente
 * Pode ser atribuído manualmente?: Não recomendado
 */


let nome;
nome; // undefined

function teste() {}
teste(); // undefined

let user = {};
user.nome; // undefined (porque `nome` não existe)

let lista = [1, , 3];
lista[1]; // undefined

//Verificação:
typeof variavel === "undefined"; // Melhor forma
variavel === undefined; // Também funciona