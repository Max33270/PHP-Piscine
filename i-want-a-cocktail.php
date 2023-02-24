<?php 
class Mojito
{
    public float $alcoholRate;
    public array $ingredients;
    public int $price;
    public function __construct(float $alcoholRate = 0.15, array $ingredients = array('rum','lime', 'sparkling water', 'mint', 'sugar'), int $price = 8)
    {
        $this->alcoholRate = $alcoholRate;
        $this->ingredients = $ingredients;
        $this->price = $price;
    }
}
?>