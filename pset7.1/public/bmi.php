<?php
    
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("bmi_form.php");
    }

    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
         render("bmi_result.php");
    }
    
    
?>