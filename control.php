
<?php
    $gpio=$_GET["gpio"];
    $state=$_GET["state"];
       echo shell_exec( "gpio -g mode ".$gpio." out");
       echo shell_exec( "gpio -g write " .$gpio." ".$state);
       header("Location: home.php");
?>
