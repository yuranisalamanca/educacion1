<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Agregar Colegios</title>
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Propuestas</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/foundation.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.fancybox.css" />
        <script src="<?php echo base_url(); ?>js/vendor/modernizr.js"></script>
        <script src="<?php echo base_url(); ?>js/vendor/jquery.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.fancybox.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.fancybox.pack.js"></script>
</head>
<body>
	<div class="row">
		<form method="post" action="<?php echo site_url('colegioController/agregarColegio'); ?>">
			<fieldset>
				<legend> Informacion del Colegio NUSEFA</legend>
				 <?php if($this->session->userdata('varError')!=''){ ?>
          <div id="varError" style="margin-top: 10px; width: 74%; margin-left: 13%" class="alert-box warning radius" > &nbsp;<?php echo $this->session->userdata('varError'); ?><a href="#" class="close" data-dismiss="alert" id="closeVarError">&times;</a></div>
        <?php $this->session->unset_userdata('varError'); } ?>
				<label> Nombre del Colegio: 
					<input name="nombreColegio" type="text" placeholder="Escriba el nombre del colegio..." >
				</label>

				<label> Direcci&oacute;n del Colegio: 
					<input name="direccionColegio" type="text" placeholder="Escriba la direccion del colegio...">
				</label>

				<div style="margin:0 auto">
					<input type="submit" class = "button" value="Agregar">
				</div>	

			</fieldset>
		</form>
	</div>

</body>
 <script type="text/javascript">
    $('#closeVarError').click(
        function (){
        $('#varError').hide(1000);
    });

    
    </script>
</html>