<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px solid black">
    <tr>
        <th>Id</th>
        <th>First_Number</th>
        <th>Second_Number</th>
        <th>Operator</th>
        <th>Result</th>
    </tr>
    <?php foreach ($alldatas as $key=>$datas): ?>
    <tr>
        <td><?php echo $key+1?></td>
        <td><?php echo $datas->first_number?></td>
        <td><?php echo $datas->second_number?></td>
        <td><?php echo $datas->operator?></td>
        <td><?php echo $datas->result?></td>
        <td>
        <form method="post" action="../index.php">
            <input type="hidden" name="editId" value="<?=$datas->id;?>">
            <button type="submit" value="edit" name="action">Edit</button>
        </form>
        </td>
        <td>
            <form method="post" action="../index.php">
                <input type="hidden" name="delete" value="<?=$datas->id;?>">
                <button type="submit" value="delete" name="action">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach;?>
</table>
<a style="text-decoration: none" href="view/form.php">Calculate New</a>
</body>
</html>