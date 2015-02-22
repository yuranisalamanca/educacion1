<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Colegios</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/foundation.css">
</head>
<body>
	<div class="row">
		<br><br>
		<label style="text-align: center"><h3>Colegios</hr></label>
		<br><br>
		<table style="margin: 0 auto" >
			<thead>
				<tr>
					<th width="210" style="text-align:center">Nombre</th>
					<th width="210" style="text-align:center">Direcci&oacute;n</th>
					<th width="150" style="text-align:center">Acci&oacute;n</th>
				</tr>
			</thead>
				<?php for ($i=0; $i < count($colegios) ; $i++) { ?>
				<tr>
					<td style="text-align:center"> <?php echo utf8_decode($colegios[$i]['nombre']); ?> </td>
					<td style="text-align:center"> <?php echo utf8_decode($colegios[$i]['direccion']); ?> </td>
					<td style="text-align:center">
						<a class="editarColegio" href=" <?php echo site_url('colegioController/editarColegio/'.$colegios[$i]['idColegios'].'/'.$colegios[$i]['nombre'].'/'.$colegios[$i]['direccion']); ?>">
							<img src=" <?php echo base_url(); ?>img/iconos/edit.png ">
						</a>
					</td>
				</tr>
				<?php } ?>
			<tbody>
			</tbody>
		</table>
	</div>

</body>
</html>