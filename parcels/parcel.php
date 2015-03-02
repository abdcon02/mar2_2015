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


?>
<!DOCTYPE html>
<html>
<head>
    <title>Parcel Information</title>
</head>
<body>
    <h1>Thanks for entering your parcel information, below are our calculations:</h1>

<?php echo $len;?>

</body>
</html>
