<?php

class ParentOrder {}
class Order extends ParentOrder {}
class SubOrder extends Order {}

class Cart
{
    public function getOrder()
    {
        /*...*/
        
        return new Order();
    }
}

// Bonne idée!
class GoodSubCart extends Cart
{
    public function getOrder()
    {
        /*...*/
        
        return new ParentOrder();
    }
}

// Mauvaise idée!
class BadSubCart extends Cart
{
    public function getOrder()
    {
        /*...*/
        
        return new SubOrder();
    }
}
