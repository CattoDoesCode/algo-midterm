<?php

class Sort
{
    private $unsorted_arr = array();

    public $sorted_arr = array();

    function __construct($type, $unsorted_arr)
    {
        $this->unsorted_arr = $this->convertStringToArr($unsorted_arr);

        switch ($type) {
            case "bubble":
                $this->bubbleSort($this->unsorted_arr);
                break;
            case "quick":
                $this->quickSort($this->unsorted_arr);
                break;
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

    private function bubbleSort($arr)
    {
        $n = count($arr);
        // Outer loop for number of passes
        for ($i = 0; $i < $n - 1; $i++) {
            // Inner loop for comparing adjacent elements
            for ($j = 0; $j < $n - $i - 1; $j++) {
                // If the current element is greater than the next element, swap them
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
        // Return the sorted array
        return $this->sorted_arr = $arr;
    }

    private function quickSort($arr)
    {
        $n = count($arr);
        // Base case: array with 0 or 1 element is already sorted
        if ($n <= 1) {
            return $arr;
        }
        // Select a pivot element (usually the middle element)
        $pivotIndex = floor($n / 2);
        $pivotValue = $arr[$pivotIndex];
        // Partition the array into two sub-arrays: elements less than pivot and elements greater than pivot
        $left = array();
        $right = array();
        for ($i = 0; $i < $n; $i++) {
            if ($i == $pivotIndex) {
                continue;
            }
            if ($arr[$i] < $pivotValue) {
                $left[] = $arr[$i];
            } else {
                $right[] = $arr[$i];
            }
        }
        // Recursively sort the sub-arrays and concatenate them with the pivot element in the middle
        return $this->sorted_arr = array_merge($this->quickSort($left), array($pivotValue), $this->quickSort($right));
    }
}
