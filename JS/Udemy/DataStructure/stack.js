/**Uma Stack(Pilha) 
 * é uma estrutura de dados LIFO (Last In, First Out), ou seja, o último elemento adicionado é o primeiro a ser removido.
 * Pense em uma pilha de pratos.
 * 
 */

class Stack {
    constructor()
    {
        this.stack = [];
    }

    //Adiciona um elmnt ao topo
    push(elmnts)
    {

        for (const elmnt of elmnts) {
            this.stack.push(elmnt);
        }
    }

    //Remove o elmnt do topo e o retorna
    pop()
    {
        if(this.isEmpty()) {
            return "Empty Stack!";
        }
        return this.stack.pop();
    }

    //Retorna o elmnt do topo sem o remover da stack
    peek()
    {
        if(this.isEmpty()) {
            return "Empty Stack!";
        }
        return this.stack[this.size() - 1];
    }

    //Simples verificação se a stack está vazia
    isEmpty()
    {
        return this.stack.length === 0;
    }  

    //Retorna o tamanho da stack
    size()
    {
        return this.stack.length;
    }

    //Exibe a stack
    print()
    {
        for (const elmnt of this.stack) {
            console.log(elmnt);
        }
    }

}

const stack = new Stack;

stack.push([10, 3, 5, 67, 0]);
stack.size(); //Out: 5
stack.pop(); //Out: 0
stack.peek(); //Out: 67
stack.size(); //Out: 4
stack.print(); //Out: 10 3 5 67


//Exemplo de um histórico com uma stack
class BrowserHistory {
    constructor() {
        this.backStack = [];  // Pilha de histórico "para trás"
        this.forwardStack = []; // Pilha de histórico "para frente"
        this.currentPage = null; // Página atual
    }

    // Acessa uma nova página
    visit(page) {
        if (this.currentPage) {
            this.backStack.push(this.currentPage); // Salva a página atual na pilha "para trás"
        }
        this.currentPage = page; // Define a nova página atual
        this.forwardStack = []; // Limpa a pilha "para frente" (não pode avançar mais)
        console.log(`🔵 Visitando: ${page}`);
    }

    // Voltar para a página anterior
    back() {
        if (this.backStack.length === 0) {
            console.log("🚫 Não há páginas para voltar.");
            return;
        }
        this.forwardStack.push(this.currentPage); // Salva a página atual na pilha "para frente"
        this.currentPage = this.backStack.pop(); // Define a nova página atual
        console.log(`⬅️ Voltando para: ${this.currentPage}`);
    }

    // Avançar para a próxima página
    forward() {
        if (this.forwardStack.length === 0) {
            console.log("🚫 Não há páginas para avançar.");
            return;
        }
        this.backStack.push(this.currentPage); // Salva a página atual na pilha "para trás"
        this.currentPage = this.forwardStack.pop(); // Define a nova página atual
        console.log(`➡️ Avançando para: ${this.currentPage}`);
    }

    // Exibe o estado atual das pilhas
    showHistory() {
        console.log(`🔙 Histórico para trás: [${this.backStack.join(" -> ")}]`);
        console.log(`📍 Página atual: ${this.currentPage}`);
        console.log(`🔜 Histórico para frente: [${this.forwardStack.join(" -> ")}]`);
    }
}

// Testando o histórico do navegador
const history = new BrowserHistory();

history.visit("google.com");
history.visit("youtube.com");
history.visit("github.com");
history.showHistory();

history.back(); // Volta para youtube.com
history.back(); // Volta para google.com
history.forward(); // Avança para youtube.com
history.visit("stackoverflow.com"); // Visita nova página, apaga o histórico "para frente"
history.showHistory();
