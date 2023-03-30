<?php

require_once 'sort.php';

class Search
{
    private $arr = array();
    public $is_found = false;

    function __construct($type, $element, $arr)
    {
        $this->arr = $this->convertStringToArr($arr);

        switch ($type) {
            case "linear":
                $this->linearSearch($element, $this->arr);
                break;
            case "binary":
                $this->binarySearch($element, $this->arr);
        }
    }

    private function convertStringToArr($str)
    {
        // Use the explode function to split the string into an array based on comma separator
        $arr = explode(",", $str);

        // Use array_map function to convert each string element to an integer
        $arr = array_map('intval', $arr);

        return $arr;
    }

    private function linearSearch($element, $arr)
    {
        for ($x = 0; $x < count($arr); $x++) {
            if ($arr[$x] == $element) {
                $this->is_found = true;
                break;
            }
        }

        return true ? $this->is_found : false;
    }

    private function binarySearch($element, $arr)
    {
        // Sort the array in ascending order
        sort($arr);
        
        $n = count($arr);
        $left = 0;
        $right = $n - 1;
        // Keep dividing the search interval in half until the element is found or the interval is empty
        while ($left <= $right) {
            $mid = floor(($left + $right) / 2);
            if ($arr[$mid] == $element) {
                // Element found
                $this->is_found = true;
                break;
            } elseif ($arr[$mid] < $element) {
                // Search in the right half of the interval
                $left = $mid + 1;
            } else {
                // Search in the left half of the interval
                $right = $mid - 1;
            }
        }
        return true ? $this->is_found : false;
    }
}
