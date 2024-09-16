<?php include('../template/header.php');?>

	

		<div class="dashboard">

			<div class="container services">
				<?php
					    include_once "../model/conexion.php";
					    $sentencia = $bd -> query("select * from entrega");
					    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
					    //print_r($persona);
					?>
				<div class="grid-container">
					<div class="col-md-7">
					            <!-- inicio alerta -->
					            <?php 
					                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
					            ?>
					            <div class="alert alert-danger alert-dismissible fade show" role="alert">
					            <strong>Error!</strong> Rellena todos los campos.
					            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					            </div>
					            <?php 
					                }
					            ?>


					            <?php 
					                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
					            ?>
					            <div class="alert alert-success alert-dismissible fade show" role="alert">
					            <strong>Registrado!</strong> Se agregaron los datos.
					            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					            </div>
					            <?php 
					                }
					            ?>   
					            
					            

					            <?php 
					                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
					            ?>
					            <div class="alert alert-danger alert-dismissible fade show" role="alert">
					            <strong>Error!</strong> Vuelve a intentar.
					            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					            </div>
					            <?php 
					                }
					            ?>   



					            <?php 
					                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
					            ?>
					            <div class="alert alert-success alert-dismissible fade show" role="alert">
					            <strong>Cambiado!</strong> Los datos fueron actualizados.
					            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					            </div>
					            <?php 
					                }
					            ?> 


					            <?php 
					                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
					            ?>
					            <div class="alert alert-warning alert-dismissible fade show" role="alert">
					            <strong>Eliminado!</strong> Los datos fueron borrados.
					            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					            </div>
					            <?php 
					                }
					            ?> 

					            <!-- fin alerta -->
					            <div class="card">

					            	<h1 class="title">
					            		Lista de Entrega
					            	</h1>
					                
					                <div class="p-4">
					                    <table class="table align-middle">
					                        <thead>
					                            <tr>
					                                <th scope="col" id="id_table">N°</th>
					                                <th scope="col">Cedula</th>
					                                <th scope="col">Fecha</th>
					                                <th scope="col">Cantidad</th>
					                                <th scope="col">Beneficio</th>
					                                <th scope="col">Entrega</th>
					                                <th scope="col" colspan="2">Opciones</th>
					                            </tr>
					                        </thead>
					                        <tbody>
					                            
					                            <?php 
					                            	$i=1;
					                                foreach($persona as $dato){ 
					                            ?>

					                            <tr>
					                                <td scope="row"><?php echo $i; ?></td>
					                                <td><?php echo $dato->cedula; ?></td>
					                                <td><?php echo $dato->fecha; ?></td>
					                                <td><?php echo $dato->cantidad; ?></td>
					                                <td><?php echo $dato->beneficio; ?></td>
					                                <td><?php echo $dato->entrega; ?></td>
					                                <td><a class="text-success" href="editar.php?codigo=<?php echo $dato->id; ?>"><i class="bi bi-pencil-square"></i></a></td>
					                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="../model/eliminar.php?codigo=<?php echo $dato->id; ?>"><i class="bi bi-trash"></i></a></td>
					                            </tr>

					                            <?php
					                            $i++; 
					                                }
					                            ?>

					                        </tbody>
					                    </table>
					                    
					                </div>
					            </div>
					        </div>
				</div>

				<div class="grid-container">
	       
	                <div>

	                	<h1 class="title">
	                		Registrar Entrega
	                	</h1>
	                	<form class="form form_services" method="POST" action="../model/registrar.php">
		                   <!--  <div class="mb-3">
		                        <label class="form-label">cedula: </label>
		                        <input type="text" class="form-control" name="txtCedula" autofocus required>
		                    </div> -->

		                    <div class="mb-3">
		                    	<label>Cedula de Jefe de Familia:</label>
		                    	<input type="number" class="form-control" onblur="javascript:validarJefe(this);" name="txtCedula" autofocus required>
		                    </div>
		                    <div class="mb-3">
		                        <label class="form-label">fecha: </label>
		                        <input type="date" class="form-control" name="txtFecha" autofocus required>
		                    </div>
		                    <div class="mb-3">
		                        <label class="form-label">cantidad: </label>
		                        <input type="number" class="form-control" name="txtCantidad" autofocus required>
		                    </div>
		                    <div class="mb-3">
		                        <label class="form-label">beneficio: </label>
		                        <select class="form-control" name="txtBeneficio">
		                            <option disabled selected>----</option>
		                          <option value="Bolsa">Bolsa</option>
		                          <option value="Proteina">Proteina</option>
		                          <option value="Cilindro de gas">Cilindro de gas</option>
		                        </select>
		                    </div>
		                    <div class="mb-3">
		                        <label class="form-label">entrega: </label>
		                        <input type="text" class="form-control" name="txEntrega" autofocus required>
		                    </div>
		                    <div class="d-grid">
		                        <input type="hidden" name="oculto" value="1">
		                        <input type="submit" class="btn btn-primary button_rgstr" value="Registrar">
		                    </div>
	                	</form>
	                </div>
	            

				</div>

			</div>
		
		</div>

	</div>

<?php include('../template/footer.php');?>