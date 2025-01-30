/**
 * O Boolean é um tipo de dado primitivo que só pode ter dois valores possíveis:
 * true (verdadeiro)
 * false (falso)
 * Ele é essencial para controle de fluxo, condicionais, operações lógicas e muito mais.
 */

let on = true;
let off = false;
typeof(on); //Out: boolean

/**
 * JavaScript permite converter qualquer valor para true ou false. 
 * Essa conversão ocorre automaticamente em contextos booleanos (ex: if, while, &&, ||).
 */

//Falsy values

Boolean(0); // falsy
Boolean(""); // falsy (string vazia)
Boolean(null); // falsy
Boolean(undefined); // falsy
Boolean(NaN); // falsy
Boolean(false); // false

// false não é o mesmo que falsy

//Truthy values

Boolean(1); // truthy Negativos também são convertidos para true
Boolean("Hello"); // truthy (string não vazia)
Boolean([]); // truthy (array vazio)
Boolean({}); // truthy (objeto vazio)
Boolean(function(){}); // truthy (função)
Boolean(true); // true

// true não é o mesmo que thuthy
 
// "!" denota a negação do valor
// "!!" denota a negação duas vezes do valor, ou seja, assume o valor original
!true; //Out: false
!false; //Out: true