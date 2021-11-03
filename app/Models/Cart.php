<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null; //group of items
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart) //old items
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $storedItem =['quantity'=>0, 'price' => $item->price, 'item' => $item];//group of that item=>$items for storing one time

   if($this->items)
    {
        if(array_key_exists($id,$this->items))
        {
            $storedItem=$this->items[$id]; //if item exit we add then overrite $storedItem
        }
    }

        $storedItem['quantity']++;
        $storedItem['price'] = $item->price * $storedItem['quantity'];
        $this->items[$id] = $storedItem;
        $this->totalQuantity++;
        $this->totalPrice += $item->price;
    }

   }

