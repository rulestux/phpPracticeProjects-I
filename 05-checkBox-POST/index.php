<?php

if(isset($_POST['optionals'])) {

    $optionals = $_POST['optionals'];
    print_r($optionals);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1>Optionals</h1>
    <form action="index.php" method="post">
        <div>
            <input type="checkbox" name="optionals[]" value="Sunroof"> Sunroof
        </div>
        <div>
            <input type="checkbox" name="optionals[]" value="Navigation System"> Navigation System
        </div>
        <div>
            <input type="checkbox" name="optionals[]" value="Leather Seats"> Leather Seats
        </div>
        <div>
            <input type="checkbox" name="optionals[]" value="Blind Spot Monitor"> Blind Spot Monitor
        </div>
        <div>
            <input type="checkbox" name="optionals[]" value="Audio System"> Audio System
        </div>
        <div>
            <input type="submit" value="Send">
        </div>
    </form>
</body>
</html>
