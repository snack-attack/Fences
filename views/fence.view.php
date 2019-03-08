<h2 style="text-align:center">Final Fence Specifications</h2>
<table style="width:75%; margin-bottom:8rem">
    <tr>
        <th></th>
        <th>Provided Specifications</th>
        <th>Final Specifications</th>
    </tr>
    <tr style="margin-bottom:20px">
        <th>Posts</th>
        <th><?= $_POST['posts']; ?></th>
        <th><?= $data["posts"]; ?></th>
    </tr>
    <tr>
        <th>Railings</th>
        <th><?= $_POST['railings']; ?></th>
        <th><?= $data["railings"]; ?></th>
    </tr>
    <tr>
        <th>Length</th>
        <th><?= $_POST['length']; ?></th>
        <th><?= $data["length"]; ?></th>
    </tr>
    <tr>
        <th>Units</th>
        <th>Meters</th>
        <th>Meters</th>
    </tr>
</table>
