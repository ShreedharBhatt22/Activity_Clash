<head>
    <script>
    	
        function preventBack() { window.history.forward(1); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };

    	preventBack() 

</script>
</head>

<?php

session_start(); 
include('.\includes\config.php');
      unset($_SESSION['logged_in']);  
      session_destroy();  



header('location:index.php');

 ?>
 