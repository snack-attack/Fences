<?php

include_once "./index.view.php"; 

?>

<section>
    <form action="index.php" method="post"><br>
        <h3>OPTION 1: How many posts and railings do you have?</h3>
        Posts: <input type="number" name="posts" min="0"><br><br>
        Railings: <input type="number" name="railings" min="0"><br><br>
        <h3>OPTION 2: The minimum length of fence you require:</h3>
        Length: <input type="number" name="length" min="0"><br><br>
        Units: 
        <!-- <input type="radio" name="unit">Centimeters -->
        <!-- <input type="radio" name="unit">Meters<br><br> -->
        <button name="submit">Build me a fence!</button>
    </form>
</section>