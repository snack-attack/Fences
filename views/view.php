<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Posts & Railings Challenge</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">  
    </head>
    <body>
        <header>
            <h1>Fence Fancy!</h1>
            <h2>Calculate how many materials you need to build a fence of a certain minimum length OR provide a quantity of materials and find out the maximum length fence you can build.</h2>
        </header>
        <form action="index.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h3>OPTION 1: How many posts and railings do you have?</h3>
            Railings: <input type="number" name="railings" min="0"><br><br>
            Posts: <input type="number" name="posts" min="0"><br><br>
            <h3>OPTION 2: The minimum length of fence you require:</h3>
            <input type="number" name="length" min="0"><br><br>
            Units: 
            <input type="radio" name="unit">Centimeters
            <input type="radio" name="unit">Meters<br><br>
            <button name="submit">Build me a fence!</button>
        </form>
        
    </body>
</html>