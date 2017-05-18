<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        if ($_POST["username"] == NULL)
        {
            apologize("Please enter a Username");
        }
        else if ($_POST["password"] == NULL)
        {
            apologize("Please enter a password");
        }
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Your passwords do not match");
        }
        //check to see if the username already exists, if not then add user into database
        
    }
    
        
        if (CS50::query("INSERT IGNORE INTO users (username, password, weight) VALUES(?, ?, ?)", $_POST["username"], $_POST["password"], $_POST["weight"]) == true)
        {
            $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            $_SESSION["id"] = $id;
            redirect("index.php");
        }
        else
        {
            apologize("Username already exists");
            
        }
        
        

?>