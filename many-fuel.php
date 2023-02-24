<?php
class Car {
    private $tank;

    public function getTank() {
        return $this->tank;
    }

    public function setTank($tank) {
        $this->tank = $tank;
        return $this;
    }

    public function ride($float) {
        $this->tank -= $float / 20;
        return $this;
    }

    public function fill($float) {
        $this->tank += $float;
        return $this;
    }
}
?>