<?php

class ShippingType {}
class SubShippingType extends ShippingType {}

class ParentOrder {}
class Order extends ParentOrder {}
class SubOrder extends Order {}

interface Cart
{
    public function getOrder(ShippingType $type) : Order;
}

// Fatal error: Declaration of WrongParamCart::getOrder(SubShippingType $type): Order must be compatible with Cart::getOrder(ShippingType $type): Order
class WrongParamCart implements Cart
{
    public function getOrder(SubShippingType $type) : Order
    {
        return new Order();
    }
}

// Fatal error: Uncaught TypeError: Return value of WrongReturnCart::getOrder() must be an instance of Order, instance of ParentOrder returned
class WrongReturnCart implements Cart
{
    public function getOrder(ShippingType $type) : Order
    {
        return new ParentOrder();
    }
}

// Pas d'erreur ici, les contraintes de l'interface sont respectées
class RightCart implements Cart
{
    public function getOrder(ShippingType $type) : Order
    {
        return new Order();
    }
}
