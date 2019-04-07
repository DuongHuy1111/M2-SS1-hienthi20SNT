<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Prime Number</title>
</head>
<body>
<h3>Hiển thị số lượng tùy ý số nguyên tố đầu tiên</h3>
<form action="" method="post">
    <input type="text" name="inputValue" placeholder="Enter the number">
    <input type="submit" value="Submit">
</form>

<?php
$number = $_POST['inputValue'];
$count = 0;
$N = 2;
function isPrimeNumber($num)
{
    if ($num < 2) {
        return false;
    }
    for ($index = 2; $index < $num; $index++) {
        if ($num % $index == 0) {
            return false;
        }
    }
    return true;
}
while ($count < $number) {
    if (isPrimeNumber($N)){
        echo "Số nguyên tố thứ ".($count+1)." là ".$N."<br>";
        $count++;
    }
    $N++;
}
?>
</body>
</html>