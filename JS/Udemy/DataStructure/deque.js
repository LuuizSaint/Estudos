/**Deques(Double-Ended Queues)
 * Um Deque (Double-Ended Queue) é uma fila onde podemos adicionar e remover elementos tanto no início quanto no fim.
 * Ele combina características de pilhas e filas, tornando-se uma estrutura bem flexível.
 */

class Deque {
    constructor()
    {
        this.deque = [];
    }

    //Adiciona um elmnt ao início do deque
    addFront(elmnts)
    {
        for (const elmnt of elmnts) {
            this.deque.unshift(elmnt);
        }
    }

    //Adiciona um elmnt ao final do deque
    addRear(elmnts)
    {
        for (const elmnt of elmnts) {
            this.deque.push(elmnt);
        }
    }

    //Remove o primeiro elmnt e o retorna
    rmFront()
    {
        if(this.isEmpty()) {
            return "Empty Queue!";
        }
        return this.deque.shift();
    }

    //Remove o ultimo elmnt e o retorna
    rmRear()
    {
        if(this.isEmpty()) {
            return "Empty Queue!";
        }
        return this.deque.pop();
    }

    //Retorna o primeiro elmnt sem o remover do deque
    front()
    {
        if(this.isEmpty()) {
            return "Empty Queue!";
        }
        return this.deque[0];
    }

    //Retorna o ultimo elmnt sem o remover do deque
    rear()
    {
        if(this.isEmpty()) {
            return "Empty Queue!";
        }
        return this.deque[this.size() - 1];
    }

    //Simples verificação se a queue está vazia
    isEmpty()
    {
        return this.deque.length === 0;
    }  

    //Retorna o tamanho da queue
    size()
    {
        return this.deque.length;
    }

    //Exibe a queue
    print()
    {
        for (const elmnt of this.deque) {
            console.log(elmnt);
        }
    }

}

const deque = new Deque();

deque.addRear(["Dado N-1"]);
deque.addRear(["Dado N-2"]);
deque.addFront(["Dado A-1"]);

deque.print(); //Out: Dado A-1 Dado N-1 Dado N-2

deque.rmFront(); //Out: Dado A-1
deque.rmRear(); //Out: Dado N-2

deque.addRear(["Dado N-3"]);
deque.addFront(["Dado A-2"]);

deque.front(); //Out: Dado A-2
deque.rear(); //Out: Dado N-3

deque.print(); //Out: Dado A-2 Dado N-1 Dado N-3
