<?php
    require_once 'Car.php';

    $car = new Car();

    $car->set_values("Toyota", "Camry", "red");
   
    // ouput using getters
    echo "MAKE: " .$car->get_make(). "<br>";
    echo "MODEL: " .$car->get_model(). "<br>";
    echo "COLOR: " .$car->get_color(). "<br>";

    // echo "<br>";
    // echo "MAKE (calling of public property): " .$car->make. "<br>";
    // echo "MODEL (calling of public property): " .$car->model. "<br>";
    // echo "COLOR (calling of public property): " .$car->color. "<br>";

?>











































































