<div class="col-md-4" style="margin-top:15px;">
    <div class="col-md-12 card">
        <div class="card-body">
           
                <img src="<?php echo $producto['imagen']; ?>" width="300" 
                    height="300" class="card-img-top">
            
            <h5 class="card-title">Nombre del producto: </h5>  <?php echo $producto['nombreProducto']; ?>
            <p class="card-text"><h5>Marca:</h5><?php echo $producto['marca']; ?></p>
            <p class="card-text"><h5>Precio:</h5>$<?php echo $producto['precio']; ?></p> 
            <p class="card-text"><h5>Descripcion:</h5><?php echo $producto['descripcion']; ?></p>

        </div>
    </div>
</div>  