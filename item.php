<?php
$name = "Vélo";
$price= "150 euros";
$image = "images/image-velo.jpg";
echo "Le " . $name . " coûte " . $price . "<br>";

if ($name!="Vélo") {
    echo "Ce n'est pas un vélo" . "<br>";
    }
else{
    echo "C'est un vélo" . "<br>";
}
?>

<img src="<?php echo $image ?>" height="100" width="100" alt="vélo"/>



