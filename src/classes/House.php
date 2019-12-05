<?php
class House
{
    const MYFAVORITE = "Rīga";

    //code goes here
    public $color;
    public $price;

    private $topPrice;

    //__construct specifies a constructor method called when we create new class instance
    public function __construct($color, $price, $topPrice)
    {
        echo "I am constructing a new house<br>";
        $this->color = $color;
        $this->price = $price;
        $this->topPrice = $topPrice;

        $this->printPrice();
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
