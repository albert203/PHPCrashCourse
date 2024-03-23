<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = 1;

        //match statement
        $result = match($a){
            1, 3, 5 => "one or three or five",
            2 => "two",
            default => "not one, three, or five",
        };

        echo $result;

        //switch 
        switch($a){
            case 1:
                echo "a is 1";
                break;
            case 2:
                echo "a is 2";
                break;
            default:
                echo "a is not 1 or 2";
                break;
        }

    ?>

</body>
</html>