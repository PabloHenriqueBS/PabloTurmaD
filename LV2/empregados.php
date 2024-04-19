<?php
 class Empregado {
}
private $nome;
private $sobrenome;
private $salarioMensal;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSalarioMensal() {
        return $this->salarioMensal;
    }

    public function setSalarioMensal($salarioMensal) {
        $this->salarioMensal = $salarioMensal;
    }

    public function getSalarioAnual() {
        return $this->salarioMensal * 12;
    }

    public function aplicarAumento($porcentagem) {
        $aumento = $this->salarioMensal * ($porcentagem / 100);
        $this->salarioMensal += $aumento;
    }
    $empregado1 = new Empregado();
    $empregado1->setNome("carlos");
    $empregado1->setSobrenome("Silva");
    $empregado1->setSalarioMensal(1000);
    
    $empregado2 = new Empregado();
    $empregado2->setNome("vitoria");
    $empregado2->setSobrenome("Riberio");
    $empregado2->setSalarioMensal(1000);
    
    echo "<br>Salário anual do empregado 1: $" . $empregado1->getSalarioAnual() . "<br>";
    echo "Salário anual do empregado 2: $" . $empregado2->getSalarioAnual() . "<br>";
    
    
    $empregado1->aplicarAumento(10);
    $empregado2->aplicarAumento(10);
    
    echo "<br>Após aumento de 10%:<br>";
    echo "Novo salário anual do empregado 1: $" . $empregado1->getSalarioAnual() . "<br>";
    echo "Novo salário anual do empregado 2: $" . $empregado2->getSalarioAnual() . "<br>";
?>