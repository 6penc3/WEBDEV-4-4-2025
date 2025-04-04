<?php
$result = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num_one = $_POST['num_one'];
    $num_two = $_POST['num_two'];
    $operator = $_POST['calculate'];

    if ($operator == '+') {
        $result = $num_one + $num_two;
    } elseif ($operator == '-') {
        $result = $num_one - $num_two;
    } elseif ($operator == 'x') {
        $result = $num_one * $num_two;
    } elseif ($operator == '/') {
        if ($num_two != 0) {
            $result = $num_one / $num_two;
        } else {
            $result = "Cannot divide by zero";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>

<style>
    body 
    {
        background-image: url('washi.jpg');
        background-size: cover; 
        background-position: center;

    }
    
    .content
    {
        max-width: 500px;
        margin: auto;
        text-align: center;
        padding: 10px;
        font-size: 30px;
        font-family: monospace;
    }
</style>
<body>
    
    <div class="content">
    <h1>PHP Calculator</h1>

    <form action="" method="POST">
        <p>
            <input type="number" name="num_one" value="<?php echo isset($num_one) ? $num_one : ''; ?>"/> <b>Input Answer Here</b>
        </p>
        <p>
            <input type="number" name="num_two" value="<?php echo isset($num_two) ? $num_two : ''; ?>"/> <b>Input Answer Here</b>
        </p>
        <p>
            <input type="submit" name="calculate" value="+" />
            <input type="submit" name="calculate" value="-" />
            <input type="submit" name="calculate" value="x" />
            <input type="submit" name="calculate" value="/" />
        </p>
    </form>
    <h3>Result: <?php echo $result; ?></h3>

    </div>

</body>
</html>
