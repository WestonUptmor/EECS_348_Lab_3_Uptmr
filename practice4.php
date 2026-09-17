<?php
if (isset($_POST['num'])) {
    $num = $_POST['num'];
    echo "<table border='1' cellpadding='8'>";
    for ($i = 1; $i <= $num; $i++) {
        echo "<td>" . ($i) . "</td>"; 
    }
    echo "<tr>";
    for ($i = 1; $i <= $num; $i++) {
        echo "<td>" . ($i) . "</td>"; 
        for ($i2 = 1; $i2 <= $num; $i2++){
            echo "<td>" . ($i*$i2) . "</td>"; 
        }
        echo "<tr>";
    }
}
?>

<form method="post">
    Enter Number: <input type="number" name="num">
    <button type="submit">Create Multiplication Table</button>
</form>
