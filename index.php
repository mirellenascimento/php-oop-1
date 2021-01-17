<?php

class Room{
  public $number;
  public $area;
  public $bathroom;
  public $maxGuests;
  public $extraInfo;

  function __construct($number, $area){
    $this->number = $number;
    $this->area = $area;
  }

  function showInfo(){
    echo "Room number: " . $this->number . "<br>";
    echo "Room area: " . $this->area . "m&#178; <br>";
    echo "Bathroom: " . $this->bathroom . "<br>";
    echo "Maximum of guests allowed: " . $this->maxGuests . "<br>";
    echo "Extra information: " . $this->extraInfo . "<br><br>";
  }
};

$firstRoom = new Room(1, 35);
$firstRoom->bathroom = "Private bathroom with free toiletries, toilet, bathtub or shower, towels, hairdryer and toilet paper";
$firstRoom->maxGuests = 4;
$firstRoom->extraInfo = "Balcony, montain view, heating/air-condicioning, flat-screen TV, refigrerator, microwave, kitchenware, free WIFI, free parking, NO SMOKING.";

echo $firstRoom->showInfo();

$SecondRoom = new Room(2, 24);
$SecondRoom->bathroom = "Shared bathroom with free toiletries, toilet, shower, towels, hairdryer and toilet paper";
$SecondRoom->maxGuests = 12;
$SecondRoom->extraInfo = "Heating/air-condicioning, flat-screen TV, refigrerator, microwave, kitchenware, free WIFI, NO SMOKING.";

echo $SecondRoom->showInfo();
?>
