
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MyFirstCalculator</title>
        <link href="css/color.css" rel="stylesheet">
        <link href="css/box.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    
    <body>
        
        <div class="one">
        <form action="calc.php" method="get">
            <p>Digite el primer número: </p>
            <input type="number" name="variable1">
            <br><br><br>
            <select name="Operation">
                <option value="">Select a operation</option>
                <option value="1">Sum + </option>
                <option value="2"> Rest - </option>
                <option value="3">Mult x</option>
                <option value="4">Div / </option>
                <option value="5">Log</option>
                <option value="6">Squared</option>
                <option value="7">Pow</option>
                <option value="8">√</option>
                <option value="9">Root</option>
                 <option value="10">Divm</option>
            </select>
            <br><br>
            <p>Digite el segundo número: </p>
            <input type="number" name="variable2">
            <br><br>
            <button type="submit">Operate</button>
        </form>
        <p><?php if (isset($message)=== true):?>
            <?php echo $message ?>
            <?php endif ?>
        </p>
        </div>
       
    </body>
</html>
