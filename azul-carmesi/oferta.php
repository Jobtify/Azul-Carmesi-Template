

<?php 
	$resp = $this->apiController->obtenerPorId($oferta_id);
	if($resp->response==true){
 ?>


 <div class="intro-banner"   style=" background:url('<?php echo __PATH__ ?>/themes/azul-carmesi/img/fondo-oferta.jpg')  no-repeat center center;background-size:cover ; background-color: rgb(0 0 0 / 0.4); padding-top:8rem;padding-bottom:8rem">

 	<div class="bg-overlay-gray-darkest">
 		<div class="container d-flex">
 			<div class="logo-empresa">
 				<a class="navbar-brand" href="#">
          		<img src="https://cdn.jobtify.com.mx/jobtifynew.png" class="d-fluid" alt=""></a>

 			</div>

 			<div class="titulo-puesto">
 				<h2><?php echo $resp->data->oferta_titulo ?></h2>
 			</div>
 			
 		</div>
 		
 	</div>
 	
 </div>


 <div class="contenido">
 	<div class="container">
 		<div class="row ">
 			<div class=" description col-lg-8 p-4">
 				<h4>DESCRIPCIÓN DEL PUESTO:</h4>
 				<hr class="linea">

 				<?php echo html_entity_decode($resp->data->oferta_descripcion) ?>
 			</div>

 			<div  class="col-lg-4">
 				<div class="boton-postular p-5 ">
 					<a href="<?php echo __PATH__.'/oferta/postular/'.$resp->data->oferta_id ?>"><button type="button" class="btn btn-success BotonPostular pr-3 pl-3">Postular ahora <i class="fa fa-arrow-circle-right flecha"></i></button></a>

 				</div>

 				<div class="detalles">
 					<div class="card border-0">
 						<div class="card-title text-center">
 							<h4>DETALLES</h4>
 							<hr class="linea">
 						</div>
 						<div class="contenidodetalles d-flex">
		 					<div class="icono-datos p-3">
								<i class="fa fa-calendar ofertasiconos"></i>
							</div>

							<div class="textdatos">
								<h3>Fecha de publicación:</h3>
								<li><?php echo  $resp->data->oferta_fechapublicacion ?></li>
							</div>

						</div>
						<div class="contenidodetalles d-flex">
		 					<div class="icono-datos p-3">
								<i class="fas fa-money-bill-alt"></i>
							</div>

							<div class="textdatos">
								<h3>Salario:</h3>
								<li><?php echo $resp->data->oferta_salario ?></li>
							</div>

						</div>
						<div class="contenidodetalles d-flex">
		 					<div class="icono-datos p-3">
								<i class="far fa-clock"></i>
							</div>

							<div class="textdatos">
								<h3>Jornada Laboral:</h3>
								<li><?php echo $resp->data->oferta_contrato ?></li>
							</div>

						</div>
						<div class="contenidodetalles d-flex">
		 					<div class="icono-datos p-3">
								<i class="fas fa-map-marker-alt ofertasiconos"></i>
							</div>

							<div class="textdatos">
								<h3>Ubicación:</h3>
								<li> <?php echo $resp->data->oferta_nombrelocalidad.', '.$resp->data->oferta_nombremunicipio.', '.$resp->data->oferta_nombreestado.'.'; ?></li>
							</div>
						</div>

					</div>
					<div class=" text-center compartir mt-3 mb-3">
 					<h4>Compartir</h4>
 					<hr class="linea">
					<a class="enlaceIcono p-2 " href="http://www.facebook.com/sharer.php?u=<?php echo __PATH__?>/oferta/<?php echo $resp->data->oferta_id ?>" target="_blank"><i class="fab fa-facebook-square icon"></i></a> 
					<a class="enlaceIcono p-2" href="https://twitter.com/?status=<?php echo __PATH__?>/oferta/<?php echo $resp->data->oferta_id?>" target="_blank"><i class="fab fa-twitter icon"></i></a>

					<a class="enlaceIcono p-2" href="https://www.linkedin.com/shareArticle?url=<?php echo __PATH__?>/oferta/<?php echo $resp->data->oferta_id?>" target="_blank"><i class="fab fa-linkedin icon"></i></a>

					<a class="enlaceIcono p-2" href="https://telegram.me/share/url?url=<?php echo __PATH__?>/oferta/<?php echo $resp->data->oferta_id?>" target="_black"><i class="fab fa-telegram"></i> </a>

					<a class="enlaceIcono p-2" href="https://api.whatsapp.com/send?text=<?php echo __PATH__?>/oferta/<?php echo $resp->data->oferta_id?>" target="_black"><i class="fab fa-whatsapp-square"></i> </a>
 					
 					</div>
 				</div>						
 			</div>	

 		</div>
 		</div>
 			 
 		</div>
 		
 	</div>
 	
 </div>


<?php 
	}else{
?>

<div class="container w-50 border rounded oferta-descripcion">
	Oferta no válida.

</div>
<br><br>
<?php
	}
 ?>