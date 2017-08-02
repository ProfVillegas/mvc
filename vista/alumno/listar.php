<section class="container">
	<table class="table">
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
				<td><?php echo $d->matricula;?></td>
				<td><?php echo $d->nombre;?></td>
				<td><?php echo $d->fecha_nac;?></td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
	
</section>