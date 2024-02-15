<?php

use PHPUnit\Framework\TestCase;
require_once 'ShoppingList.php';

class ShoppingListTest extends TestCase 
{
    public function testAddItem()
    {
        $shoppingList = new ShoppingList();
        $shoppingList->addItem('carro');
        $this->assertEquals(['carro'], $shoppingList->getItems());
    }

    public function testAddItemThatAlreadyExists()
    {
        $shoppingList = new ShoppingList();
        $shoppingList->addItem('carro');
        $shoppingList->addItem('carro');
        $this->assertEquals(['carro', 'carro'], $shoppingList->getItems());
    }

    public function testRemoveItem()
    {
        $shoppingList = new ShoppingList();
        $shoppingList->addItem('carro');
        $shoppingList->removeItem(0);
        $this->assertEquals([], $shoppingList->getItems());
    }

    public function testRemoveItemThatDoesNotExist()
    {
        $shoppingList = new ShoppingList();
        $shoppingList->removeItem(0);
        $this->assertEquals([], $shoppingList->getItems());
    }

    public function testClear()
    {
        $shoppingList = new ShoppingList();
        $shoppingList->addItem('carro');
        $shoppingList->addItem('moto');
        $shoppingList->addItem('moto');
        $shoppingList->addItem('carro');
        $shoppingList->clear();
        $this->assertEquals([], $shoppingList->getItems());
    }


}

/*
1) a)Qual é o propósito da classe ShoppingList?

    R: O propósito da classe ShoppingList é criar uma lista de compras, realizar a adição de itens, 
    a remoção de itens, listar os itens da lista e remover todos os itens dela de uma vez.

   b)Quais são os métodos disponíveis na classe ShoppingList e o que cada um
deles faz?

    R: A classe ShoppingList possui os métodos:
    AddItem() - Adiciona um item na lista de compras.
    GetItems() - Retorna todos os items da lista.
    RemoveItem() - Remove um item da lista de compras a partir da sua posição no array.
    Clear() - Remove todos os itens da lista de compras.

   c)Explique o que é testado no método TestAddItem().

    R: No método TestAddItem() é realizado o teste de se a Classe ShoppingList está adicionando o item corretamente.

   d) Qual é a finalidade do método testRemoveItem() e o que ele verifica?

    R: A finalidade do método testRemoveItem() é testar se a Classe ShoppingList está removendo o item corretamente 
    ao fornecer sua posição no array. Ele verifica se o array está vazio após a adição de um item e, então, a remoção do mesmo.