<!DOCTYPE html>
<head>
</head>
<?php
    if(isset($_POST['operator'])){
        $first_num = $_POST['first_num'];
        $second_num = $_POST['second_num'];
        $operator = $_POST['operator'];
        $result = '';
        if (is_numeric($first_num) && is_numeric($second_num)) {
            switch ($operator) {
                case "Add":
                $result = $first_num + $second_num;
                    break;
                case "Subtract":
                $result = $first_num - $second_num;
                    break;
                case "Multiply":
                    $result = $first_num * $second_num;
                    break;
                case "Divide":
                    $result = $first_num / $second_num;
            }
        }
    }
?>

<body>
    <div id="page-wrap">
	<h3>Calculator</h3>
	  <form action="" method="post">
        <label for="">First Number</label><br></br>
        <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <br></br>

        <label for="">Second Number</label><br></br>
        <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <br></br>

        <input type="submit" name="operator" value="Add" />
        <input type="submit" name="operator" value="Subtract" />
        <input type="submit" name="operator" value="Multiply" />
        <input type="submit" name="operator" value="Divide" />
            <br></br>
        <label for="">Result</label><br></br>
        <input  name="result" value="<?php echo $result; ?>">
	  </form>
    </div>
</body>
</html>