<?php 
interface PoolTempsInterface {
    public function getActualTemp();
    public function getLastDaysTemps();
    public function setHeater(bool $isActive);
}

class PoolTemps implements PoolTempsInterface {
    private $currentTemp;
    private $lastDaysTemps;
    public $isActive = false;

    public function __construct(int $currentTemp, array $lastDaysTemps) {
        $this->currentTemp = $currentTemp;
        $this->lastDaysTemps = $lastDaysTemps;
    }

    public function getActualTemp() {
        return $this->currentTemp;
    }

    public function getLastDaysTemps() {
        return $this->lastDaysTemps;
    }

    public function setHeater(bool $isActive) {
        $this->isActive = $isActive;
    }

    public function activateHeater() {
        $averageTemp = array_sum($this->lastDaysTemps) / count($this->lastDaysTemps);
        if ($averageTemp > 20 && $this->currentTemp >= 25) {
            $this->setHeater(true);
        }
    }
}
?>