<?php
class Fatura {
    private $numero;
    private $descricao;
    private $quantidade;
    private $preco;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        if ($preco > 0) {
            $this->preco = $preco;
        } else {
            $this->preco = 0.0;
        }
    }

    public function getTotalFatura() {
        $total = $this->quantidade * $this->preco;
        return ($total > 0) ? $total : 0;
    }
}

$fatura = new Fatura();
$fatura->setNumero("001");
$fatura->setDescricao("Teclado");
$fatura->setQuantidade(2);
$fatura->setPreco(45.25);

echo "Número da Fatura: " . $fatura->getNumero() . "<br>";
echo "Descrição: " . $fatura->getDescricao() . "<br>";
echo "Quantidade: " . $fatura->getQuantidade() . "<br>";
echo "Preço por Item: $" . $fatura->getPreco() . "<br>";
echo "Total da Fatura: $" . $fatura->getTotalFatura() . "<br>";



?>

