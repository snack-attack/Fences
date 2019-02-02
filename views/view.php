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
            <h1 style="text-align:center">Fancy Fence!</h1>
            <h4>Calculate how many materials you need to build a fence of a certain minimum length OR provide a quantity of materials and find out the maximum length fence you can build.</h4>
        </header>
        <form action="index.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><br>
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
        <br>
        <hr>
        <br>
        <h2 style="text-align:center">Final Fence Specifications</h2>
        <table style="width:75%; margin-bottom:8rem">
            <tr>
                <th></th>
                <th>Provided Specifications</th>
                <th>Final Specifications</th>
            </tr>
            <tr style="margin-bottom:20px">
               <th>Posts</th>
               <th><?= isset($_POST["posts"]) ?></th>
               <th><?= $posts ?></th>
            </tr>
            <tr>
               <th>Railings</th>
               <th><?= isset($_POST["railings"]) ?></th>
               <th><?= $railings ?></th>
            </tr>
            <tr>
               <th>Length</th>
               <th><?= isset($_POST["length"]) ?></th>
               <th><?= $length ?></th>
            </tr>
            <tr>
               <th>Units</th>
               <th>Meters</th>
               <th>Meters</th>
            </tr>
        </table>
        
    </body>
</html>