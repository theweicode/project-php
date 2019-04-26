<?php
$name = "Will";
$lname = "Ting";
const test = "test";
const fullname = "Will Ting";
const plane = "Jet";
const nsent = "Hi my name is Will Ting";

function randSent()
{
    $rand = str_shuffle(nsent);
    return $rand;
}


function printName()
{
    $car = "BMW";
    return $car;
}

function printFullName()
{
    return fullname;
}

?>





<!DOCTYPE html>

<html>


<body>
    <?php echo "<h1>My Name is {$name}<h1>" ?>
    <?php echo $name ?>
    <!-- php uses . as concatenator -->
    <?php echo "<h1>My Name is " . $name . "<h1>"
        . "My plane is a " . plane
    ?>

    <?php echo printName(); ?>
    <?php echo "<h1>" . printFullName() . "<h1>"; ?>
    <?php echo randSent() ?>
</body>

</html>