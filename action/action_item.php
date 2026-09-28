<?php

use App\Item;
require('../vendor/autoload.php');
$action = $_GET['action'];
$item = new Item();
switch($action){
    case 'cadastrar':
        $item->nome = $_POST['nome'];
        $item->descricao = $_POST['descricao'];
        $item->patrimonio = $_POST['patrimonio'];
        $item->cadastrar();
        header('location: /Reserva_Recursos/view/item/listar.php'); // Redireciona após cadastrar
        exit; // Encerra o script após o redirecionamento
    break;    
    case 'excluir':
        $item->id = $_GET['id'];
        $item->excluir();
        header('location: /Reserva_Recursos/view/item/listar.php');
        exit; // Encerra o script após o redirecionamento
}