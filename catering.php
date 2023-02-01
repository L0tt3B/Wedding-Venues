<!DOCTYPE html>
<html lang="en">
<head>
    <title>Catering Costs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            background-color: #c4ecf0;
            font-family: "Apple Chancery", Times, serif;
            }

        table {
	        margin-left:auto;
	        margin-right:auto;
            table-layout:fixed;
            width: 100%;
        }
        
        td {
        	width: 25%;
            background-color: white;
        }
        
        .center {
	        text-align:center;
        }
        .header{
            background-color: #dec4f0;
            border-color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <h3 class="center">Catering Costs!</h3>
        <?php
        $readHTML = file_get_contents("catering.html");
        $min = trim($_REQUEST['min']);
        $max = trim($_REQUEST['max']);

        $C1 = $C2 = $C3 = $C4 = $C5 = "";
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $C1 = trim($_REQUEST['c1']);
            $C2 = trim($_REQUEST['c2']);
            $C3 = trim($_REQUEST['c3']);
            $C4 = trim($_REQUEST['c4']);
            $C5 = trim($_REQUEST['c5']);
        }

        echo "<table class='table' border=1>
            <tr>
                <th scope='col' class='header'>Cost Per Person &#8594 <br>&#8595 Party Size</th>
                <th class='header'>$C1</th>
                <th class='header'>$C2</th>
                <th class='header'>$C3</th>
                <th class='header'>$C4</th>
                <th class='header'>$C5</th>
            </tr>";
        foreach (range($min, $max, 5) as $Size){
            echo "<table class='table' border=1>
            <tr>
            <td class='header'>".$Size."</td>
            <td class='center'>£".$Size*$C1."</td>
            <td class='center'>£".$Size*$C2."</td>
            <td class='center'>£".$Size*$C3."</td>
            <td class='center'>£".$Size*$C4."</td>
            <td class='center'>£".$Size*$C5."</td>
            </tr>";
        	}
            
        ?>
    
</body>
</html>