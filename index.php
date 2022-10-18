<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Basic</title>
</head>
<body>
    <form method="post">  
        Enter First Number:  
        <input type="number" name="number1" /><br><br>  
        Enter Second Number:  
        <input type="number" name="number2" /><br><br>  
        <input  type="submit" name="submit_add" value="Add">
        <input  type="submit" name="submit_sub" value="Subtract">
        <input  type="submit" name="submit_mul" value="Multiply">
        <input  type="submit" name="submit_div" value="Divide">
    </form>  
    <?php  
        if(isset($_POST['submit_add']))  
        {  
            $number1 = $_POST['number1'];  
            $number2 = $_POST['number2'];  
            $sum =  $number1+$number2;     
                echo "The Sum of $number1 and $number2 is: ".$sum;   
        }elseif(isset($_POST['submit_sub']))
        {
            $number1 = $_POST['number1'];  
            $number2 = $_POST['number2'];
            $dif = $number1-$number2;
                echo "The Difference of $number1 and $number2 is:".$dif;
        }elseif(isset($_POST['submit_mul']))
        {
            $number1 = $_POST['number1'];  
            $number2 = $_POST['number2'];
            $pro = $number1*$number2;
                echo "The Product of $number1 and $number2 is:".$pro;
        }elseif(isset($_POST['submit_div']))
        {
            $number1 = $_POST['number1'];  
            $number2 = $_POST['number2'];
            $qou = $number1/$number2;
                echo "The Qoutient of $number1 and $number2 is:".$qou;
        }
    ?>
</body>
</html>