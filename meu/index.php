<?php
include('app/Item.php');
include('app/Servidor.php');
include('app/Emprestimo.php');

$item = new Item();
$item->nome = 'Apagador';
$item->descricao = 'Apagador para quadro branco ';
$item->patrimonio = '009866';


echo "<pre>";
print_r($item);
echo "</pre>";

$servidor = new Servidor();
$servidor->nome = 'Joao';
$servidor->dataNascimento = '1999-09-17';

$emprestimo = new Emprestimo();
$emprestimo->dataEmprestimo = '2026-08-24 17:10';
$emprestimo->item = $item;
$emprestimo->Servidor = $servidor;

echo "<pre>";
print_r($emprestimo);
echo "</pre>";