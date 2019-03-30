<div ng-app="">
<div class="container"> 
<div class="row">

<div class="col-md-2" ></div>
<div class="col-md-8" >
<h4>Formulario de solicitud</h4><br>
<form action="<?php echo (base_url());?>index.php/solicitud/save_solicitud" method="post">

    <label for="">Monto a solicitar</label>
    <input type="number" name="Monto" class="form-control" ng-model="monto">

    <label for="">Edad</label>
    <input type="number" name="Edad" class="form-control">

    <input type="checkbox" name="TarjetaDeCredito" class="form-check-label">
    <label for="">Cuento con tarjeta de credito</label><br>

    <label for="">Plazo a pagar:</label>
    <select name="Plazo" class="form-control" ng-model="plazo" selected="1">
        <option value="0.05">3 Meses</option>
        <option value="0.07">6 Meses</option>
        <option value="0.12">9 Meses</option>
    </select><br>
    
    <label>Sumonto a pagar sera de: $ {{monto+(monto*plazo)}}</label><br>
    
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
<div class="col-md-2" ></div>

</div>
</div>
</div>