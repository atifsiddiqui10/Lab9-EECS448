
<?php
    error_reporting(E_ALL);
    ini_set("display_error", 1);

    function welcomeUser()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        echo "<h2>" . "Welcome " . $username . "</h2>" . "<br>";
        echo "<h2>" . "Your password is: " . $password . "</h2>" . "<br>";
    }

    function printReceipt()
    {
        $SCQ= $_POST["SCQ"];
        $SBQ = $_POST["SBQ"];
        $SJQ = $_POST["SJQ"];

        $shipping = $_POST["shipping"];

        $SCP = 200;
        $SBP = 80;
        $SJP = 150;

        $total = $SCP * $SPQ + $SBP * $SBQ + $SJP * $SJQ + $shipping;

        echo "<h3>" . "Your total is: $" . $total . "</h3>" . "<br>";
        echo "Here is your receipt:<br>";
        echo "<table border='1'><tbody>";
        echo "<tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Subtotal</td></tr>";
        echo "<tr><td>Soccer Cleats</td><td>".$SCQ."</td><td>$$SCP.00</td><td>$".$SCQ*$SCP.".00</td>";
        echo "<tr><td>Soccer Balls</td><td>".$SBQ."</td><td>$$SBP.00</td><td>$".$SBQ*$SBP.".00</td>";
        echo "<tr><td>Soccer Jerseys</td><td>".$SJQ."</td><td>$$SJP.00</td><td>$".$SJQ*$SJP.".00</td>";
        echo "<tr><td>Shipping</td><td colspan = 2>$".$shipping.".00</td><td>$$shipping.00</td></tr>";
        echo "<tr><td>Total Cost</td><td colspan=3>$$total.00</td>";


    }

    welcomeUser();
    printReceipt();
?>
