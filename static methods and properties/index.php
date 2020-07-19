<?php
include_once 'home.class.php';

// use staticClass\home; //We need the keyword `use ` whenever the class has a namespace inside it to call the function

echo  staticClass\home::greeting();

echo "<br>";
staticClass\address::getAddress();