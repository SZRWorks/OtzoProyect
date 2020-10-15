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
        return preg_match("/\d{10}/", $this->getPin()) == 1;
    }
    
    private function isValidCard(){
        return preg_match("/\d{13,18}/", $this->getPin()) == 1;
    }
    
    function getPin() {
        return $this->pin;
    }

    function getMode() {
        return $this->mode;
    }


}