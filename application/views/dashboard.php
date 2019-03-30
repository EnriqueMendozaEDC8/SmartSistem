<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dashboard.css'); ?>">
<div class="container">
<div class="row">
    <div class="col-md-4 data-container">
        <h4>Perfil</h4>
        <h5>Nombre de usuario: <?php echo $this->session->userdata('user_name'); ?></h5>
        <label for="">Pendientes</label><br>
        <?php
            foreach ($infoData as $row) {
                if ($row['estatus']==0 && $row['autorizacion']==0 && $row['monto']>0) {
        ?>
                    <label for="" class="in-process"><?php echo($row['fecha']." - $".($row['monto']+($row['monto']*$row['plazo']))." - Pendiente");?></label><br>
        <?php
                }
            }
            if($infoData[0]['monto'] == 0){
                echo('<label for="">Usted aun no tiene solicitudes realizadas</label><br>');
            }
        ?>
        <label for="">Rechazados</label><br>
        <?php 
            foreach ($infoData as $row) {
                if ($row['estatus']==1 && $row['autorizacion']==0 && $row['monto']>0) {
        ?>
                    <label for="" class="no-acepted"><?php echo($row['fecha']." - $".($row['monto']+($row['monto']*$row['plazo']))." - Rechazado");?></label><br>
        <?php
                }
            } 
            if($infoData[0]['monto'] == 0){
                echo('<label for="">Usted aun no tiene solicitudes realizadas</label><br>');
            }
        ?>
    </div>
    <div class="col-md-4 data-container" >
        <h4>Historial</h4>
        <label for="">Historial de credito</label><br>
        <?php 
            foreach ($infoData as $row) {
                if ($row['estatus']==1 && $row['autorizacion']==1 && $row['monto']>0) {
        ?>
                    <label for=""  class="acepted"><?php echo('Codigo de Referencia: '.$row['id_solicitud']);?></label><br>
                    <label for=""  class="acepted"><?php echo('Codigo de Referencia: '.$row['edad']); ?></label><br>
                    <label for=""  class="acepted"><?php echo('Fecha: '.$row['fecha']); ?></label><br>
                    <label for=""  class="acepted"><?php echo('Monto pagado: '.($row['monto']+($row['monto']*$row['plazo']))); ?></label><br>
        <?php
                    echo('<br>');
                }
            } 
            if($infoData[0]['monto'] == 0){
                echo('<label for="">Usted aun no tiene solicitudes realizadas</label><br>');
            }
        ?>
    </div>
    <div class="col-md-4 data-container" >
        <h4>Solicitudes</h4>
        <label for="">En proceso de autorizacion</label><br>
        <?php 
            foreach ($infoData as $row) {
                if ($row['estatus']==0 && $row['autorizacion']==0 && $row['monto']>0) {
        ?>
                    <label for="" class="in-process"><?php echo($row['fecha']." - $".($row['monto']+($row['monto']*$row['plazo']))." - Pendiente");?></label><br>
        <?php
                }
            } 
            if($infoData[0]['monto'] == 0){
                echo('<label for="">Usted aun no tiene solicitudes realizadas</label><br>');
            }
        ?>
        <br>
        <a href="<?php echo (base_url());?>index.php/solicitud" class="btn btn-primary fake-button">Nueva Solicitud</a>
    </div>

</div>
</div> 
<br>

<div class="container">
<div class="row">

    <div class="col-md-11" ></div>
    <div class="col-md-1" >
        <a href="<?php echo (base_url());?>index.php/sesion/log_out" class="btn btn-danger fake-button">Salir</a>
    </div>

</div>
</div>
</body>
</html>