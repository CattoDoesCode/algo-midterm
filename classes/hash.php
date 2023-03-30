<?php

class Hash
{
    private $key;
    public $address;

    function __construct($type, $key)
    {
        $this->key = $key;
        
        switch($type) {
            case "midsquare":
                $this->midSquare($this->key);
                break;
            case "digitextraction":
                $this->digitExtraction($this->key);
                break;
        }
    }

    private function midSquare($key) {
        // Convert the key to an integer
        $num = intval($key);
        // Square the integer and convert it back to a string
        $squared = strval($num * $num);
        $n = strlen($squared);
        // Get the middle 3 characters of the squared string
        $start = floor(($n - 3) / 2);
        return $this->address = substr($squared, $start, 3);
    }

    private function digitExtraction($key) {
        // Extract the first, third, and fourth characters of the key
        return $this->address = substr($key, 0, 1) . substr($key, 2, 1) . substr($key, 3, 1);
        
    }
}
