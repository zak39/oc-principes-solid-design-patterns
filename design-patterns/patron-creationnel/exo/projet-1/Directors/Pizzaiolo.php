<?php

class Pizzaiolo
{
    private PizzaBuilder $pizzaBuilder;

    public function __construct(PizzaBuilder $pizzaBuilder)
    {
        $this->pizzaBuilder = $pizzaBuilder;
    }

    public function createMargherita() : Pizza
    {
        return $this->pizzaBuilder->preparePizza()->getPizza();
    }

    public function createMargheritaWithEgg() : Pizza
    {
        // Construire la pizza avec l'ajout d'un oeuf ("egg")
        return $this->pizzaBuilder
            ->preparePizza()
            ->addIngredient('egg')
            ->getPizza();
    }

    public function createBigMargherita() : Pizza
    {
        // Construire la pizza en augmentant sa taille
        return $this->pizzaBuilder
            ->preparePizza()
            ->increaseSize()
            ->getPizza();
    }

    public function createBigMargheritaWithEgg() : Pizza
    {
        // Cette fois, les deux en même temps (ajout egg + taille en XL)
        return $this->pizzaBuilder
            ->preparePizza()
            ->increaseSize()
            ->addIngredient('egg')
            ->getPizza();
    }
}
