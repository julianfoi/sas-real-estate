
        <?php foreach ($ALL as $item):?>
            <?php $foto3=$item['foto_id']; ?> 
            <?php $tipo3=$item['tipo']; ?> 
            <?php $lugar3=$item['lugar']; ?> 
            <?php
            echo "
            <div class='slide'> 
            <img src='fotos/" . $foto3 . ".jpg' />
            <div class='slide_content'>
            <div class='slide_content_wrap'>
            <h4 class='title'>" . $tipo3 . " en " . $lugar3 . "</h4>
            <a class='readmore' href='inmuebles.php'>
            <form action='inmueble.php' method='POST'>
            <input type='hidden' name='inmueble' value='" . $foto3 . "'>
            <input type='submit' value='Detalles'></form></a>
            </div>
            </div>
            </div> 
            "; ?>
            
        
        <?php endforeach;?>
</div>
<div class="timers"></div>
<div class="slidePrev"><span></span></div>
<div class="slideNext"><span></span></div>
</div> 
<!-- ******** FULL WIDTH SLIDER END ******** -->

</header>

<!-- ******** REVIEWS START ******** -->

<!-- ******** REVIEWS END ******** -->
        
        <article class="wrapper">

        <!-- ******** HIGHLIGHT START ******** -->


        <div class="row">
        <div class="span12">
        <hr>
        </div>
        </div>

        <!-- ******** BLOG START ******** -->
        <div class="span12">
        <h1>Especialistas en Finca Raíz en Bogotá y Mosquera. Nuestros Inmuebles en Bogotá:</h1>
        </div>
        <div class="row">
        <div class="span12">
        <h2 class="center">En Arriendo</h2>
        </div>
        </div>

        <div class="row gallery">
        <ul>
        
        <?php foreach ($FOR_RENT as $rent):?>
        <?php
            $foto = $rent['foto_id'];
            $tipo = $rent['tipo'];
            $lugar = $rent['lugar'];
            echo "<li class='span3'>
            <a href='fotos/" . $foto . ".jpg' class='fancybox' rel='gallery' title='COINOR: Especialistas en Finca Raíz en Bogotá'>
            <img src='fotos/" . $foto . ".jpg' alt='Gallery' class='round' />
            <img style='margin-bottom: 2%;' src='images/shadow3.png'>
            </a>" . $tipo . " en " . $lugar . "</br>
            <form action='inmueble.php' method='POST'>
                <input type='hidden' name='inmueble' value='" . $foto . "'>
                <input type='submit' value='Detalles'>
            </form>
            </li>
            ";
    ?>
            <?php endforeach;?>
        
        </ul>
        </div>

        <div class="row">
        <div class="span12">
        <h2 class="center">En Venta</h2>
        </div>
        </div>
        
        <div class="row gallery">
        <ul>
        <?php foreach ($FOR_SALE as $sale):?>
        <?php
            $foto = $sale['foto_id'];
            $tipo = $sale['tipo'];
            $lugar = $sale['lugar'];
            
            echo "<li class='span3'>
                <a href='fotos/" . $foto . ".jpg' class='fancybox' rel='gallery' title='COINOR: Especialistas en Finca Raíz en Bogotá'>
                <img src='fotos/" . $foto . ".jpg' alt='Gallery' class='round' /><img style='margin-bottom: 2%;' src='images/shadow3.png'></a>" . $tipo . " en " . $lugar . "</br>
                <form action='inmueble.php' method='POST'>
                    <input type='hidden' name='inmueble' value='" . $foto . "'>
                    <input type='submit' value='Detalles'>
                </form>
            </li>
            ";
                ?>
            <?php endforeach;?>
        
        </ul>
        </div>	


        </article>

       