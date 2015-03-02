<?php
class Car
{
    public $make_model;
    public $price;
    public $miles;

    function worthBuying($max_price) {
        return $this->price < $max_price;
    }

    function __construct($type_car, $value_car, $miles_car) {
        $this->make_model = $type_car;
        $this->price = $value_car;
        $this->miles = $miles_car;
    }
}

$porsche = new Car("2004 Porsche 911",114991,7862);
/*$porsche->make_model = "2004 Porsche 911";
$porsche->price = 114991;
$porsche->miles = 7864; */

$ford = new Car("2011 Ford F450",55885,14241);
/*$ford->make_model = "2011 Ford F450";
$ford->price = 55885;
$ford->miles = 14241;*/

$lexus = new Car("2013 Lexus RX 350",44700,20000);
/*$lexus->make_model = "2013 Lexus RX 350";
$lexus->price = 44700;
$lexus->miles = 20000;*/

$mercedes = new Car("Mercedes Benz CLS550",39900,37979);
/*$mercedes->make_model = "Mercedes Benz CLS550";
$mercedes->price = 39900;
$mercedes->miles = 37979;*/

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
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
