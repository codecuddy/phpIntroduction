<?php
    // CONSTANTS: written in all caps
    define("TITLE", "PHP Variables and Constants");
?>

<!DOCTYPE html>

<html>

    <head>
        <title><?php echo TITLE; ?></title>
    </head>
    
    <body>
    
        
        <?php
            // BOOLEAN: True or False
            $loggedIn = true;
            
            // INTEGER: Any whole number
            $myAge = 29;
            
            // FLOATING POINT: A fractional number
            $totalPrice = 58.75;
            
            // STRING: text enclosed in " " or ' '
            $myName = "Charlie";
            //  $myName = "Ch-ch-ch-charlie";   <-- can rename variables
            
            // DISPLAY ON SCREEN
            echo "Hello, my name is $myName and I am $myAge years old. I spent 
            $$totalPrice at the store today."; 
            
        ?>
            
            </br>
            </br>
            
        <?php
            
            // CONSTANTS: written in all caps
            define("TITLE", "PHP Variables and Constants");
            
            echo TITLE;
            
            
            
        ?>
</html>






























