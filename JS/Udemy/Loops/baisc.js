/**Estruturas de Repetição (Loops)
 * Os loops servem para executar um bloco de código várias vezes, geralmente até que uma condição seja satisfeita.
 * 
 * for:
 * Usado quando sabemos quantas vezes o loop deve rodar.
 * 
 * while:
 * Executa enquanto a condição for verdadeira.
 * 
 * do...while:
 * Semelhante ao while, mas executa pelo menos uma vez, pois verifica a condição depois da execução.
 * 
 * for...of (para Arrays e Iteráveis):
 * Percorre valores diretamente.
 * 
 * for...in (para Objetos):
 * Percorre as chaves de um objeto.
 * 
 * break - Sai completamente do loop.
 * continue - Pula a iteração atual e vai para a próxima.
 * 
 */

//for(init; cond; iter){}
for(let i = 0; i < 5; i++){
    console.log(i); //Out: 0 1 2 3 4
}

//while(cond){}
let contador = 3;
while (contador <= 5) {
    console.log("Foda"); //Out: Foda Foda Foda
    contador++; //Sempre criar o incrementador para evitar loops infinitos!!!
}

//do{}while(cond);
do{
    console.log("Executei uma vez!"); //Out: Executei uma vez!
} while(contador === String);


for(let i = 1; i <= 100; i++){
    let out = "";

    if(i % 3 === 0) out += "Fizz"; 
    if(i % 5 === 0) out += "Buzz"; 

    console.log(out || i);

}