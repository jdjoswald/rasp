<?php
include("include/header.php");
?>
<body>

    
<section>
    <figure>
        <h2>Habitación</h2>
        
        <button type="btn" onclick="ira('control.php?gpio=26&state=1')"name ="button">Encender</button >

        <button type="btn"onclick="ira('control.php?gpio=26&state=0')"name ="button">Apagar</button >
        
    </figure>

    <figure>
        <h2>Arcade</h2>
        <button type="btn" onclick="ira('control.php?gpio=26&state=1')"name ="button">Encender</button >

        <button type="btn"onclick="ira('control.php?gpio=26&state=0')"name ="button">Apagar</button >
    </figure>

    <figure>
    <h2>Leds</h2>
    <button type="btn" onclick="ira('control.php?gpio=26&state=1')"name ="button">Encender</button >

    <button type="btn"onclick="ira('control.php?gpio=26&state=0')"name ="button">Apagar</button >
    </figure>

    <figure>
        <h2>Luz 4</h2>
        <button type="btn" onclick="ira('control.php?gpio=26&state=1')"name ="button">Encender</button >

        <button type="btn"onclick="ira('control.php?gpio=26&state=0')"name ="button">Apagar</button >
    </figure>

    <figure>
        <h2>Luz 5</h2>
        <button type="btn" onclick="ira('control.php?gpio=26&state=1')"name ="button">Encender</button >

        <button type="btn"onclick="ira('control.php?gpio=26&state=0')"name ="button">Apagar</button >
    </figure>   

    <figure>
        <h2>Luz 6</h2>
        <button type="btn" onclick="ira('control.php?gpio=26&state=1')"name ="button">Encender</button >

        <button type="btn"onclick="ira('control.php?gpio=26&state=0')"name ="button">Apagar</button >
    </figure>

    <figure>  
        <h2>Luz 7</h2>
        <button type="btn" onclick="ira('control.php?gpio=26&state=1')"name ="button">Encender</button >

        <button type="btn"onclick="ira('control.php?gpio=26&state=0')"name ="button">Apagar</button >

    </figure>

    <figure>
        <h2>Luz 8</h2>
        <button type="btn" onclick="ira('control.php?gpio=26&state=1')"name ="button">Encender</button >

        <button type="btn"onclick="ira('control.php?gpio=26&state=0')"name ="button">Apagar</button >
    </figure>

</section>

</body>

<script>
    function ira(page){
        location.href=page;
    }
</script>

<?php
include("include/footer.php");
?>