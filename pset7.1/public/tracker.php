<?php
    require("../includes/config.php"); 
 
    if ($_SERVER["REQUEST_METHOD"] == "GET")
        {
        
            render("tracker_form.php", ["title" => "Buy"]);
        }
    
    else if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            
            //inserting into weight history table
            CS50::query("INSERT INTO weight_history (week, user_id, weight) VALUES (?, ?, ?)", $_POST["weekselect"], $_SESSION["id"], $_POST["weightinput"]);
            render("graph.php");//redirect to phpfile with weight line graph
        }


?>