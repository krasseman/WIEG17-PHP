<html>
    <head>
       <?php 
       define("namn", "Filmtips.com");

       ?>
        <title>
        
        <?php echo constant("namn");
           if (isset($pageName)) {

            echo " - $pageName ";
            
        }
        
        ?>
        
        </title>
      <?php 
      
     
      
      ?>
        <style>
            body {
                background-color: black;
                color: white;
                text-align: center;
            }

            a {
                text-decoration: none;
                color: white;
                font-size: 20px;
                border: 1px solid black;
            }

       

        
        </style>
    </head>
    <body>
<?php echo "<h1>$pageName </h1>"?>

    <a href = "start.php"> Start </a>  <br>
    <a href = "list.php"> Listan </a> <br>
    <a href = "kontakt.php"> Kontakt </a> 


    
    
    <?php
     
     ?>
     <br/>
</ul>