
<?php
    $gpio=$_GET["gpio"];
    $state=$_GET["state"];
    $allgpio=[21,20,16,26,19,13,6,5];
    $i = 0;
    if($state==-1){
        while($i<8){
            echo shell_exec( "gpio -g mode ".$allgpio[$i]." out");
            echo shell_exec( "gpio -g write " .$allgpio[$i]." 0");   
            $i++;           
        }
        header("Location: home.php");
    }
    else if($state==-2){
        while($i<8){
            echo shell_exec( "gpio -g mode ".$allgpio[$i]." out");
            echo shell_exec( "gpio -g write " .$allgpio[$i]." 0"); 
            $i++;           
        }
        echo shell_exec( "gpio -g write 16 1");
        header("Location: home.php");
    }
    else{
        echo shell_exec( "gpio -g mode ".$gpio." out");
        echo shell_exec( "gpio -g write " .$gpio." ".$state);
        header("Location: home.php");
    }

   
?>
