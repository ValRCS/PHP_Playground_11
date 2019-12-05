<?php
class House
{
    //code goes here
    public $color = "red";
    public $price = 100000;

    private $topPrice = 500000;

    //__construct specifies a constructor method called when we create new class instance
    public function __construct()
    {
        echo "I am constructing a new house<br>";
    }

    public function printHello()
    {
        // code...
        echo "Printing Hello<br>";
    }

    public function printPrice()
    {
        echo "This house costs $this->price <br>";
    }

    public function getTopPrice()
    {
        // echo $this->formatText($this->topPrice);
        echo "The Top Price is " . $this->formatText($this->topPrice) . "<br>";
    }

    private function formatText($text)
    {
        //we could do more work here
        return "<em>$text</em>";

    }

    public function strongText($text)
    {
        return "<strong>$text</strong>";
    }

}
