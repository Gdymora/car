<?php

namespace Car;

use Car\Itea\MovableInterface;

class Car implements MovableInterface
{
private $traf_fics=false;
private $speed = 0;
private $max_speed = 100;
private $fuel = 100;
     /**
     * Включает зажигание
     * @return mixed
     */
    public function start(){

        if ($this->traffic != false){
            return false;                   
        }
     
              
        $this->fuel = $this->fuel + 1; 
        $this->traffic = true;
        echo "Run - br-br-br";  
    }

    /**
     * Выключает зажигание
     * @return mixed
     */
    public function stop(){
        
        if ($this->traffic != true){
            return false;                      
        }
     
       
      
        $this->fuel = 0; 
        $this->traffic = false;
        echo "Stop - ts-st-tst-tstst";
    }

    /**
     * Увеличивает скорость движения
     * @return mixed
     */
    public function up(){

        if($this->speed < $this->max_speed){
            $this->speed = $this->speed + 1;
        }

        return $this->speed;
    }

    /**
     * Уменьшает скорость движения
     * @return mixed
     */
    public function down(){
        if($this->speed > 0){
            $this->speed = $this->speed - 1;
            
        }

        return $this->speed;
    }
}
