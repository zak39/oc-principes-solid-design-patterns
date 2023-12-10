<?php

class ParentOrder {}
class Order extends ParentOrder {}

class SubOrder extends Order {}

class Cart
{
    public function getShippingCost(Order $order)
    {
        /*...*/
    }
}

// Mauvaise idée!
class BadSubCart extends Cart
{
    public function getShippingCost(SubOrder $order)
    {
        /*...*/
    }
}

// Bonne idée!
class GoodSubCart extends Cart
{
    public function getShippingCost(ParentOrder $order)
    {
        /*...*/
    }
}
