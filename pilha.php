<?php

class Pilha {
    private $elementos;
    private $topo;

    public function __construct() {
        $this->elementos = [];
        $this->topo = -1;
    }

    // Adiciona 
    public function push($elemento) {
        $this->topo++;
        $this->elementos[$this->topo] = $elemento;
    }

    // Remove 
    public function pop() {
        if (!$this->isEmpty()) {
            $elementoRemovido = $this->elementos[$this->topo];
            $this->topo--;
            return $elementoRemovido;
        }
        return null;
    }

    // Retorna topo da pilha
    public function top() {
        if (!$this->isEmpty()) {
            return $this->elementos[$this->topo];
        }
        return null;
    }

    // Verifica se a pilha ta vazia
    public function isEmpty() {
        return $this->topo == -1;
    }
}


$pilha = new Pilha();
$pilha->push("1");
$pilha->push("2");
$pilha->push("3");

echo "Topo da pilha: " . $pilha->top() . "\n"; 
echo "Removendo elemento: " . $pilha->pop() . "\n"; 
echo "Topo da pilha: " . $pilha->top() . "\n"; 

?>
