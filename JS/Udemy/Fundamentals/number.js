/** Numbers
 * Todos os números são representados como valores de ponto flutuante de 64 bits (formato 
 * IEEE 754), independentemente de serem inteiros ou decimais.
 * 
 * Não há distinção entre inteiros (int) e números decimais (float).
 * 
 * Valores especiais: Infinity, -Infinity, NaN ("Not a Number").
 */

/** Propriedades Estáticas:
 * Number.MAX_VALUE: Maior valor representável (~1.79e+308).
 * 
 * Number.MIN_VALUE: Menor valor positivo (~5e-324).
 * 
 * Number.MAX_SAFE_INTEGER: Maior inteiro seguro (2^53 - 1).
 * 
 * Number.MIN_SAFE_INTEGER: Menor inteiro seguro (-(2^53 - 1)).
 * 
 * Number.EPSILON: Menor diferença entre dois números representáveis (útil para comparações).
 */

// isNaN(value) (Global) Retorna true para valores não numericos, e false para valores integer, float, etc...
isNaN('22'); //Out: true
isNaN(22); //Out: false

// Number.isNaN(value) (Number) Retorna true para NaN e false para (string, integerm float, etc...)
Number.isNaN(22); //Out: false
Number.isNaN(NaN); //Out: true

// Number.isFinite(value) (Global/Number) Retona se um valor é finito
isFinite(200) //Out: true
Number.isFinite(2); //Out: true
Number.isFinite(NaN); //Out: false

// Number.isInteger(value) Retorna se um valor é inteiro
Number.isInteger(4); //Out: true
Number.isInteger(4.2); //Out: false
Number.isInteger(4.0); //Out: true

// Number.isSafeInteger(value) Retorna se o valor esta dentro do intervalo seguro para inteiros(±(2^53 - 1)) ou 16 numeros
Number.isSafeInteger(9007199254740991); //Out: true
Number.isSafeInteger(9999999999999999); //Out: false

// Number.parseFloat(string) Converte para um numero decimal
Number.parseFloat("5.4"); //Out: 5.4

//Number.parseInt(string, base(10, 2, 16)) Converete string para integer
Number.parseInt("109abc"); //Out: 109

//().toFixed(digito) Formata o numero com uma qtd fixa de casas decimais(valor passado no digito) Retorna STRING!
(3.1493).toFixed(2) //Out: 3.14

// Use +"123456789..." para converções explícitas
Number("123"); //Out: 123(number)
typeof(+"123") //Out: 123(number)