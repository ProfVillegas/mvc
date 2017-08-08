<div class="container">
	<a href="<?php echo BASE_URL."alumno/nuevo";?>" 
	class="btn btn-raised btn-primary">Nuevo</a>
</div>
<section class="container">

	<div class="table-responsive">
	<table class="table table-striped table-hover table-condensed">
		<thead>
			<tr>
				<td>Matricula</td>
				<td>Nombre</td>
				<td>Fecha de Nacimiento</td>			
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($data as $d){
			?>
			<tr>
				<td>
				<a href="<?php echo BASE_URL;?>alumno/actualizar/<?php echo $d->matricula ;?>">
				<?php echo $d->matricula;?>
				   </a>
				</td>
				<td><?php echo $d->nombre;?></td>
				<td><?php echo $d->fecha_nac;?>
					<a class="btn btn-primary" href="<?php echo BASE_URL;?>alumno/actualizar/<?php echo $d->matricula ;?>">
						Editar
				   </a>
				   
					<a class="btn btn-primary" href="<?php echo BASE_URL;?>alumno/eliminar/<?php echo $d->matricula ;?>">
						Eliminar
				   </a>
				</td>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
	</div>
</section>