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
<form action="../index.php" method="post">
    <input name="first_number" required type="number" placeholder="First Number">
    <input name="second_number" required type="number" placeholder="Second Number">
<select name="operator">
    <option value="+">Addition</option>
    <option value="-">Subtraction</option>
    <option value="*">Multiplication</option>
    <option value="/">Division</option>
</select>
    <input hidden name="action" value="create">
    <input type="submit" value="calculate">
</form>
<a style="text-decoration: none" href="/">History</a>
</body>
</html>