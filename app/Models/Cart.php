<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
   
 //    public $items = null;
 //    public $total_quantity = 0;
 //    public $total_price = 0;

 //    public function __construct($old_cart) {
 //        if($old_cart) {
 //            $this->items = $old_cart->items;
 //            $this->total_quantity = $old_cart->total_quantity;
 //            $this->total_price = $old_cart->total_price;
 //        }
 //    }

 //    //keep each product in cart once
 //    public function add($item, $id) {
 //        $stored_item = [
 //            'quantity' => 0,
 //            'sale_price' => $item->sale_price,
 //            'item'     => $item,
 //        ];

 //        //check if cart already has items
 //        if($this->items) {
 //            //check if we already have the current added item in $this->items
 //            if(array_key_exists($id, $this->items)) {
 //                $stored_item = $this->items[$id];
 //            }
 //        }
 //        $stored_item['quantity']++;
 //        $stored_item['price'] = $stored_item['quantity'] * $item->sale_price; //$stored_item['quantity'] is how many we have of an item in cart
 //        $this->items[$id] = $stored_item;

 //        $this->total_quantity++;
 //        $this->total_price += $item->sale_price;
 //    }

 // // public function remove($item, $id) {
 // //        //check if cart already has items
 // //        if($this->items) {
 // //            //if the item exists, remove it from the item array
 // //            if(array_key_exists($id, $this->items)) {
 // //                $this->total_quantity = $this->total_quantity - $this->items[$id]['quantity'];
 // //                $this->total_price = $this->total_price - $this->items[$id]['price'];
 // //                unset($this->items[$id]);
 // //            }
 // //            //if there are no more items left, reset total values and unset the items array
 // //            if(count($this->items) == 0) {
 // //                $this->total_quantity = 0;
 // //                $this->total_price = 0;
 // //                unset($this->items);
 // //                return 2;
 // //            }
 // //            return 1;
 // //        }
 // //        else { //if the cart is empty
 // //            return 0;
 // //        }
 // //    }

   }