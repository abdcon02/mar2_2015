<?php
    class Parcel {

        private $length;
        private $width;
        private $height;
        private $weight;

        function __construct($pleng, $pwid, $phei, $pwei) {
            $this->length = $pleng;
            $this->width = $pwid;
            $this->height = $phei;
            $this->weight = $pwei;
        }

        function volume(){
            return $this->width * $this->height * $this->length;
        }

        function costToShip(){
            return number_format($this->weight * 4.25 , 2);
        }

        function getLength(){
            return $this->length;
        }

        function getWidth(){
            return $this->width;
        }

        function getHeight() {
            return $this->height;
        }

        function getWeight(){
            return $this->weight;
        }

}

$len = $_GET["length"];
$wid = $_GET["width"];
$hei = $_GET["height"];
$wei = $_GET["weight"];

$package = new Parcel($len,$wid,$hei,$wei);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Parcel Information</title>
</head>
<body>
    <h1>Thanks for entering your parcel information, below are our calculations:</h1>
    <h3>Just to be clear, the info you entered was:</h3>
    <ul>
        <li>Length: <?= $len;?></li>
        <li>Width: <?= $wid; ?></li>
        <li>Height: <?= $hei;?></li>
        <li>Weight: <?= $wei;?></li>
    </ul>
    <h3>This is the Volume of your Parcel!</h3>
        <ul>
    <?php
        $vol = $package->volume();
        echo "<li>$vol</li>";
    ?>
        </ul>
    <h3>This is the cost of shipping your parcel to Mongolia:</h3>
    <p>(Our rate is $4.25 per oz for international shipping)</p>
        <ul>
    <?php
        $cost = $package->costToShip();
        echo "<li>$$cost </li>";
    ?>
        </ul>

</body>
</html>
