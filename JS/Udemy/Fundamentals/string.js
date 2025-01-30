/**
 * Strings são sequências de caracteres usadas para representar texto. 
 * Em JS, elas podem ser declaradas com aspas simples ('), aspas duplas (") ou templates literals (crases `).
 * 
 */


let firstName = 'Xaulin';
let lastName = "Matador_de_Porco";
let userEmail = `${firstName}${lastName}@gmail.com`;

/**
 * Indexação:
 * Strings são indexadas, ou seja, cada caractere tem uma posição (índice) que começa em 0.
 * Você pode acessar caracteres individuais usando colchetes [].
 */

let indexacao = "Indexação";
indexacao[4]; //Out: 'x'
// String.charAt(index) Retona o char presente no index
indexacao.charAt(4); //Out: x

/**
 * Imutabilidade:
 * Strings são imutáveis em JavaScript. Isso significa que, uma vez criada, uma string não pode ser alterada. 
 * Qualquer operação que "modifica" uma string na verdade cria uma nova string.
 */

indexacao[3] = "G";
indexacao; //Out: 'Indexação'

let newIndexacao = indexacao.replace('e', 'G');
// String.replace(String, String) Substitui o primeiro valo encontrado pelo valor passado
// String.replaceAll(String, String) Substitui o todos os valores encontrados pelo valor passado
newIndexacao; //Out: IndGxação

let StrLength = "StrLength";
// String.length Retona a qtd de chars na string
StrLength.length; //Out: 9

firstName = "David";
lastName = "Martinez";
// + || String.concat(separator, string) Concatena 2 ou mais strings
firstName+" "+lastName; //Out: David Martinez
firstName.concat("@", lastName); //Out: David@Martinez

let convercoes = "Converção";
// String.toLowerCase() || String.toUpperCase() Converte a string para minúscula ou para maiúsculas
convercoes.toLowerCase(); //Out: converção
convercoes.toUpperCase(); //Out: CONVERÇÃO

let sliceSubstring = "sliceSubstring";
// String.slice(start, end(optional)) || String.substring(start, end(optional)) Retona uma parte da string
sliceSubstring.slice(1); //Out: liceS
sliceSubstring.substring(0, 7); //Out: sliceSu

let include = "Uma frase grande só para comparação...";
// String.includes(String) Retorna se o valor passado for encontrado na string original
include.includes('frase'); //Out: true

// String.startsWith(String) && String.endsWith(String) Retorna true caso a String original começe/termine com a string passada
include.startsWith("U"); //Out: true
include.endsWith("."); //Out: true

let removeSpace = "      Space       ";
removeSpace.length; //Out: 18
// String.trim() || String.trimStart() || String.trimEnd() Removem os espaços e rotorna a string 

let beforeTrim = removeSpace.trim(); //Out: "Space"
beforeTrim.length; //Out: 5

removeSpace.trimStart(); //Out: "Space       "
removeSpace.trimEnd(); //Out: "      Space"

let fullName = "Luizin Robertin Favarin";
// String.split(separator) && Array.join(separator) Tranforma uma string em um array separando pelo separador passado e junta um array em uma string
let stringToArr = fullName.split(" ");
let arrToString = stringToArr.join(" ");
stringToArr; //Out: [ 'Luizin', 'Robertin', 'Favarin' ]
arrToString; //Out: Luizin Robertin Favarin
