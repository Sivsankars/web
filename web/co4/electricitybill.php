<html>
    <head>
        <title>electricity bill</title>
    </head>
    <body>
        <form action="POST">
            <table>
                <tr>
                    <td>Enter the meter number:
                        <input type="number" name="num1">
                    </td>
                </tr>
                <tr>
                    <td>Enter the Number of units:
                        <input type="number" name="unit">
                    </td>
                </tr>
                <tr>
                    <td>Enter the category:
                        <select name="traffic">
                            <option>Select</option>
                            <option>Rural</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
    $num1=$_POST['num1'];
    $unit=$_POST['unit'];
    $trafic=$_POST['traffic'];
    if($trafic=="Rural")
    {
        if($unit>0&&$unit<=50)
        {
            $e=20;
            $price=(($unit*.25)+$e);
            echo "$price";
        }
    }
    else if($unit>50&&$unit<=100)
    {
        $e=20;
        $price=(($unit*.55)+$e);
    }
    else if($unit>100&&$unit<=150)
    {
        $e=30;
        $price=(($unit*.75)+$e);
    }
    else if($unit>150&&$unit<=250)
    {
        $e=30;
        $price=(($unit*1.55)+$e);
    }
    else if($unit>250&&$unit<=400)
    {
        $e=35;
        $price=(($unit*2)+$e);
    }
    else
    {
        $e=30;
        $price=(($unit*2.5)+$e);
    }

    echo "your Meter number is:" .$num1;
    echo "<br>";
    echo "Units are:".$unit;
    echo "<br>";
    echo "extra charge are:".$e;
    echo "<br>";
    echo "Total $unit units of charge:".$price;
    echo "<br>";
    }
    if($trafic=="Residential")
    {
        if($unit>0&&$unit<=50)
        {
            $e=35;
            $price=(($unit*1.35)+$e);
            echo "$price";
        }
    }
    else if($unit>50&&$unit<=100)
    {
        $e=35;
        $price=(($unit*2.15)+$e);
    }
    else if($unit>100&&$unit<=150)
    {
        $e=35;
        $price=(($unit*3)+$e);
    }
    else if($unit>150&&$unit<=250)
    {
        $e=35;
        $price=(($unit*3.5)+$e);
    }
    else if($unit>250&&$unit<=400)
    {
        $e=35;
        $price=(($unit*4)+$e);
    }
    else
    {
        $e=30;
        $price=(($unit*5)+$e);
    }

    echo "your Meter number is:" .$num1;
    echo "<br>";
    echo "Units are:".$unit;
    echo "<br>";
    echo "extra charge are:".$e;
    echo "<br>";
    echo "Total $unit units of charge:".$price;
    echo "<br>";
    }
    if($trafic=="Commercial")
    {
        if($unit>0&&$unit<=50)
        {
            $e=65;
            $price=(($unit*3)+$e);
            echo "$price";
        }
    }
    else if($unit>50&&$unit<=100)
    {
        $e=65;
        $price=(($unit*4.5)+$e);
    }
    else if($unit>100&&$unit<=150)
    {
        $e=65;
        $price=(($unit*5.5)+$e);
    }
    else if($unit>150&&$unit<=250)
    {
        $e=65;
        $price=(($unit*6.5)+$e);
    }
    else if($unit>250&&$unit<=400)
    {
        $e=65;
        $price=(($unit*8)+$e);
    }
    else
    {
        $e=65;
        $price=(($unit*10)+$e);
    }

    echo "your Meter number is:" .$num1;
    echo "<br>";
    echo "Units are:".$unit;
    echo "<br>";
    echo "extra charge are:".$e;
    echo "<br>";
    echo "Total $unit units of charge:".$price;
    echo "<br>";
    }
}
?>