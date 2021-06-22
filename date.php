<?php
namespace App\Date;

class year{
    private $year;
private $month = ['J','J','J','J','J','J','J','J','J','J'];
    public function __construct($year)
    {
        $this->year = $year;
    }

    public function getYear(){
        return date('Y');
    }

}
?>