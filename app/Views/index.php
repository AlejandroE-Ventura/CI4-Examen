<?php 
$idpersona = $datos[0]['id_persona'];
$nombre = $datos[0]['nombre'];
$fecha = $datos[0]['fecha']; 
$edad = $datos[0]['edad']; 
?>
<center><h1>Agenda de contactos</h1></center>
<div class="card-deck">
  <div class="example-1 card">
    <div class="wrapper" style="background: url(<?php echo base_url() ?>/public/images/yo.jpg) 20% 1%/cover no-repeat;">
      <div class="date"><?php echo $nombre; ?></div>
      <div class="data">
        <div class="content">
          <span>Informacion Personal</span>
          <h6>Fecha de creacion del proyecto:
            <small class="text-muted"><?php echo $fecha; ?></small>
          </h6>
          <h6>Nombre:
            <small class="text-muted"><?php echo $nombre; ?></small>
          </h6>
          <h6>Edad:
            <small class="text-muted"><?php echo $edad; ?></small>
          </h6>
        </div>
      </div>        
    </div>
  </div>
  <div class="example-1 card">
    <div class="wrapper" style="background: url(<?php echo base_url() ?>/public/images/chino.png) 20% 1%/cover no-repeat;">
      <div class="date">Luis Ventura</div>
      <div class="data">
        <div class="content">
          <span>Informacion Personal</span>
          <h6>Fecha de creacion del proyecto:
            <small class="text-muted">17/12/20</small>
          </h6>
          <h6>Nombre:
            <small class="text-muted">Luis Ventura</small>
          </h6>
          <h6>Edad:
            <small class="text-muted">24</small>
          </h6>
        </div>
      </div>        
    </div>
  </div>
  <div class="example-1 card">
    <div class="wrapper" style="background: url(<?php echo base_url() ?>/public/images/cholo.jpg) 20% 1%/cover no-repeat;">
      <div class="date">Ermenegildo Ventura</div>
      <div class="data">
        <div class="content">
          <span>Informacion Personal</span>
          <h6>Fecha de creacion del proyecto:
            <small class="text-muted">17/12/20</small>
          </h6>
          <h6>Nombre:
            <small class="text-muted">Ermenegildo Ventura</small>
          </h6>
          <h6>Edad:
            <small class="text-muted">24</small>
          </h6>
        </div>
      </div>        
    </div>
  </div>
</div>


