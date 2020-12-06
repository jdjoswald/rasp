<?php
include("include/header.php");
?>
<body>
    <section>
    <div class="columna">
            <figure>
            
                <h2>Habitación</h2>
                <button type="btn" onclick="ira('control.php?gpio=21&state=1')"name ="button">Encender</button >
                <button type="btn"onclick="ira('control.php?gpio=21&state=0')"name ="button">Apagar</button > 
            </figure>

            <figure>
                <h2>Leds</h2>
                <button type="btn" onclick="ira('control.php?gpio=16&state=1')"name ="button">Encender</button >
                <button type="btn"onclick="ira('control.php?gpio=16&state=0')"name ="button">Apagar</button >
            </figure>

            <figure>
                <h2>Luz 4</h2>
                <button type="btn" onclick="ira('control.php?gpio=26&state=1')"name ="button">Encender</button >
                <button type="btn"onclick="ira('control.php?gpio=26&state=0')"name ="button">Apagar</button >
            </figure>

            <figure>
                <h2>Luz 5</h2>
                <button type="btn" onclick="ira('control.php?gpio=19&state=1')"name ="button">Encender</button >
                <button type="btn"onclick="ira('control.php?gpio=19&state=0')"name ="button">Apagar</button >
            </figure>   
    </div>
        
    <div class="columna">
           
            <figure>
                <h2>Arcade</h2>
                <button type="btn" onclick="ira('control.php?gpio=20&state=1')"name ="button">Encender</button >
                <button type="btn"onclick="ira('control.php?gpio=20&state=0')"name ="button">Apagar</button >
            </figure>

            <figure>
                <h2>Luz 6</h2>
                <button type="btn" onclick="ira('control.php?gpio=13&state=1')"name ="button">Encender</button >
                <button type="btn"onclick="ira('control.php?gpio=13&state=0')"name ="button">Apagar</button >
            </figure>

            <figure>  
                <h2>Luz 7</h2>
                <button type="btn" onclick="ira('control.php?gpio=6&state=1')"name ="button">Encender</button >
                <button type="btn"onclick="ira('control.php?gpio=6&state=0')"name ="button">Apagar</button >
            </figure>

            <figure>
                <h2>Luz 8</h2>
                <button type="btn" onclick="ira('control.php?gpio=5&state=1')"name ="button">Encender</button >
                <button type="btn"onclick="ira('control.php?gpio=5&state=0')"name ="button">Apagar</button >
            </figure>

    </div>
    <div class="columna">
            <figure>
                <h2>Black out</h2>
                <button type="btn" onclick="ira('control.php?gpio=26&state=-1')"name ="button">Black out</button >
                
            </figure>
            <figure>
                <h2>Game on</h2>
                <button  type="btn" onclick="ira('control.php?gpio=26&state=-2')"name ="button">Game on</button >
            </figure>

    </div>
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