<?php
class Car
{
    private $make_model;
    private $price;
    private $miles;

    function worthBuying($max_price) {
        return $this->price < $max_price;
    }

    function __construct($type_car, $value_car, $miles_car) {
        $this->make_model = $type_car;
        $this->price = $value_car;
        $this->miles = $miles_car;
    }

    function setMake_model($new_make){
        $string_model = (string) $new_make;
         if ($string_model != 0) {
             $this->make_model = $string_model;
         }
    }

    function setMiles($new_miles){
        $string_miles = (float) $new_miles;
        if ($float_miles != 0) {
            $this->miles = $float_miles;
        }
    }

    function setPrice($new_price){
        $float_price = (float) $new_price;
         if ($float_price != 0) {
            $this->price = $float_price;
         }
    }

    function getMake_model(){
        return $this->make_model;
    }

    function getMiles(){
        return $this->miles;
    }

    function getPrice()    {
        return $this->price;
    }
}

$porsche = new Car("2004 Porsche 911",114991,7862);
$ford = new Car("2011 Ford F450",55885,14241);
$lexus = new Car("2013 Lexus RX 350",44700,20000);
$mercedes = new Car("Mercedes Benz CLS550",39900,37979);

$mercedes->setPrice("99");



$cars = array($porsche, $ford, $lexus, $mercedes);

$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->worthBuying($_GET['price'])) {
        array_push($cars_matching_search, $car);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                $value = $car->getPrice();
                $miles = $car->getMiles();
                $make = $car->getMake_model();
                echo "<li> $make </li>";
                echo "<ul>";
                    echo "<li> $$value </li>";
                    echo "<li> Miles: $miles </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
