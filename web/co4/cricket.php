<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
    <body>
        <center>
            <table border="1">
                <tr>
                    <th>Key</th>
                    <th>Players</th>
                </tr>

                <?php
                    $players=array("KL Rahul","Shikhar Dhawan","Virat Kohli",'Rishabh Pant','Shreyas Iyer','Venkatesh Iyer','R Ashwin','Bhuvneshwar Kumar','Jasprit Bumrah','Yuzvendra Chahal');

                    foreach($players as $k=>$v){
                        echo"<tr><td><h3>$k</h3></td><td><h3>$v</h3></td></tr>";
                    }
                ?>
            </table>
     </center>
    </body>
</html>
