	<?php $this->load->helper('form');  ?>
	<?= form_open("/controlador1/recibirdatos") 
	?>

	<?
		$nombre = array(
			'name' => 'nombre',
			'placeholder' =>'Escribe tu nombre'
			);

		$videos = array(
			'name' => 'videos',
			'placeholder' =>'cantidad videos'
			);
	?>
		<?= form_label('Nombre: ', 'nombre')  ?>
		<?= form_input($nombre)  ?>
	<br>
		<?= form_label('Numero de videos: ', 'videos')  ?>
		<?= form_input($videos)  ?>
	
	<?= form_submit('','Subir curso') ?>
	<?= form_close()  ?>
	</body>
</html>