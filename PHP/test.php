<?php

echo <<<_END
    <html>
        <body>
        <u><p align="center"> Welcome to Mathematica! </p></u>
            <form  action='test.php' method="post">
                <input type="text" name="val1" placeholder="first number">
                <input type="text" name="op1" placeholder="operator"> 
                <input type="text" name="val2" placeholder="second number"> =
                <input type="submit" value="summit"> <br>
            </form>
        </body>
    </html>
_END;






if(isset($_POST['val1'])  && isset($_POST['op1']) && isset($_POST['val2']))
{
    $first = $_POST['val1'] ;
    $sec = $_POST['val2'];

    switch ($_POST['op1']):
        case '+':
            print  $first + $sec;
            break;
        case '-':
            echo  $_POST['op1'] - $_POST['op1'];
            break;
        case '*':
            echo  $_POST['op1'] * $_POST['op1'];
            break;
        case '/':
            echo  $_POST['op1'] / $_POST['op1'];
            break;
        endswitch;
}
