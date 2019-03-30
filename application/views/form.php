<div class="container">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <label>Porfavor ingrese su nombre de usuario:</label>
    </div>
    
    <div class="col-md-2">
        <form action="<?php echo (base_url());?>index.php/sesion/log_in" method="post">
    </div>
    <div class="col-md-6">
            <input type="text" name="User" class="form-control"></input>
    </div>
    <div class="col-md-2"><button type="submit"class="btn btn-primary">Entrar</button></div>
    <div class="col-md-2"></form></div>

</div>
</div>

</body>
</html>