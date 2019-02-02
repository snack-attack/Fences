<?php

include_once "./index.view.php"; 

?>

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
