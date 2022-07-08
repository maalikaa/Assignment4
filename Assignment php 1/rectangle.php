<html>  
    <body>  
        <form method = "post">   
            Width: <input type="number" name="width">   
        <br><br>   
            Length: <input type="number" name="length"> <br>   
        <input type = "submit" name = "submit" value="Calculate">   
        </form>   
        </body>   
</html>  
<?php   
    if(isset($_POST['submit'])){  
    $width = $_POST['width'];   
    $length = $_POST['length'];  
    function calculateArea($paramWidth, $paramHeight) {
        return $paramWidth * $paramHeight;
    } 
    $area = calculateArea($width, $length);
        echo "Area of rectangle with width " .$width. " and length " .$length. " is: " .$area;
    }   
?>