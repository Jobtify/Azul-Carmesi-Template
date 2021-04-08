

<br>
<div class="container  ">
	<h2 class="text-center">Forma parte de nuestro equipo de trabajo</h2>
	<h5 class="text-center">Estas son las ofertas que tenemos disponibles para ti.</h5>
</div>


<hr class="Line">


	


<div class="container ">
	<table class="table table-responsive table-hover ">

		
		
		<thead class="thead-dark">
			<tr>
				<th >Fecha</th>
                  <th>Empresa</th>
                  <th >Puesto</th>
                  <th >Funciones</th>
                  <th >Salario</th>
                  <th >Lugar</th>
                  <th class="postula-ofertas" >¡Postula!</th>
			</tr>
		</thead>
		<?php 
			$oferta = $this->apiController->obtenerTodas();
			foreach ($oferta->data as $value => $key) {
		?>
		<tbody class="tbody" >
			<tr >
				<td ><p><?php echo $key->oferta_fechapublicacion ?></p></td>
                <td><a href="your-career-starts-here.html"><img class=" imagen-ofertas-empresa img-semi-transparent-inverse" src="https://cdn.jobtify.com.mx/jobtifynew.png" width="45" height="40" alt=""></a></td>
                <td><p class="puesto"><a href="oferta/<?php echo $key->oferta_id ?>"><?php echo $key->oferta_titulo ?></a></p></td>
                <td><p><?php echo $key->oferta_funciones ?></p></td>
                <td><?php echo $key->oferta_salario ?></td>
                <td><?php echo $key->oferta_nombrelocalidad.', '.$key->oferta_nombremunicipio.', '.$key->oferta_nombreestado.'.' ?></td>
                <td><a href="oferta/<?php echo $key->oferta_id ?>"><button class=" BotonPostular ">Postular <i class="fa fa-arrow-circle-right flecha"></i></button></a></td>
			</tr>
		</tbody>
		<?php
						}
					?>
	</table>
	
</div>

