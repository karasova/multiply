<!DOCTYPE html>
<html>
<head>
    <title> Таблица умножения </title>
</head>
<body>
    <form method = 'POST'>
        <p> Таблица умножения </p>
        <p><input name = 'x' placeholder = 'Rows'> 
        <input name = 'y' placeholder = 'Columns'></p>
        <p><input name = 'test' id = 'test' type = 'submit' placeholder = 'Create'></p>

    </form>
    <table border = 2>
        <?php
            include "function.php";
            $x = 10;
            $y = 10;
            if (isset($_POST['x']) && is_numeric($_POST['x']))
                $x = (int)$_POST['x'];
            if (isset($_POST['y']) && is_numeric($_POST['y']))
                $y = (int)$_POST['y'];
            echo multiply_table($x, $y);
        ?>
    </table>
</body>
</html>
