/**Queues(Filas)
 * Uma Queue (Fila) é uma estrutura de dados FIFO (First In, First Out), ou seja, o primeiro elemento adicionado é o primeiro a ser removido.
 * Pense em uma fila de supermercado
 * 
 */

class Queue {
    constructor()
    {
        this.queue = [];
    }

    //Adiciona um elmnt ao final da fila
    enQueue(elmnts)
    {
        for (const elmnt of elmnts) {
            this.queue.push(elmnt);
        }
    }

    //Remove o primeiro elmnt e o retorna
    deQueue()
    {
        if(this.isEmpty()) {
            return "Empty Queue!";
        }
        return this.queue.shift();
    }

    //Retorna o primeiro elmnt sem o remover da queue
    front()
    {
        if(this.isEmpty()) {
            return "Empty Queue!";
        }
        return this.queue[0];
    }

    //Simples verificação se a queue está vazia
    isEmpty()
    {
        return this.queue.length === 0;
    }  

    //Retorna o tamanho da queue
    size()
    {
        return this.queue.length;
    }

    //Exibe a queue
    print()
    {
        for (const elmnt of this.queue) {
            console.log(elmnt);
        }
    }

}

const queue = new Queue();

queue.enQueue(["Elmnt 1", "Elmnt 2",  "Elmnt 3", "Elmnt 4"]);
queue.print(); //Out: Elmnt 1 Elmnt 2 Elmnt 3 Elmnt 4

queue.enQueue(["Elmnt 5"]);
queue.print(); //Out: Elmnt 1 Elmnt 2 Elmnt 3 Elmnt 4 Elmnt 5

console.log(queue.deQueue()); //Out: Elmnt 1
console.log(queue.front()); //Out: Elmnt 2
