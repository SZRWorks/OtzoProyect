<?php

class Pin {
    
    const NUM_TEL = 1;
    const NUM_CARD = 2;
    
    private $pin = 0, $mode = 0;
    
    function __construc($pin, $mode){
        $this->pin = $pin;
        $this->mode = $mode;
    }
    
    public function Verify() {
        switch ($this->getMode()) {
            case self::NUM_TEL:  return isValidTel();
            case self::NUM_CARD: return isValidCard();
        }
    }

    private function isValidTel(){
        $bandera = preg_match("/\d{10}/", $this->getPin()) >= 1;
        return $bandera;
    }
    
    private function isValidCard(){
        $bandera = preg_match("/\d{13,18}/", $this->getPin()) >= 1;
        return $bandera;
    }
    
    function getPin() {
        return $this->pin;
    }

    function getMode() {
        return $this->mode;
    }


}