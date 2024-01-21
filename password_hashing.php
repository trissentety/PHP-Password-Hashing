<?php

//Use hashes to turn a sensitive string into a random mix of letters, numbers and symbols with a math process.
$pass = "gary 321";

#password_hash uses bcrypt
$hash = password_hash($pass, PASSWORD_DEFAULT);
//Returns. Length of hash might change over time as bcrypt updates so max characters where value is placed should go up to 255.
//$2y$10$3PP6MaDDp9ZiQW.eUAkPku8YEc2U3m4qKordTFk/e3wDFAPHo5EGi

echo $hash . "<br>";

//Compare 2 passwords with crypt and use to return true or false if both match
if (password_verify("squidward", $hash)) {
    //if 2 parameters are same
    echo "Values are same";
} else {
    echo "Values are different";
}
