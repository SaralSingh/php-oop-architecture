<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>teacher records</h1>

    <table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($teachers as $teacher):?>
        <tr>
            <td><?=$teacher['id']?></td>
            <td><?=$teacher['name']?></td>
            <td><?=$teacher['role']?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>



</body>
</html>