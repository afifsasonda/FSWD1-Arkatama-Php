<?php

require_once 'Cat.php';
require_once 'Dog.php';

// object class animal
$animal = new Animal("Harimau", "Karnivora");
echo $animal->getInfo();
echo "<br>";

// object class Cat
$cat = new Cat("Kitty");
echo $cat->getInfo();
echo "<br>";

// object class Cat
$dog = new Dog("Buddy");
echo $dog->getInfo();
echo "<br>";
?>