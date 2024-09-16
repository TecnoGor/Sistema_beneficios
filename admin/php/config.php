<?php include('../template/header.php');?>

	

		<div class="dashboard">

			<div class="container services">
				<div class="grid-container">
					<h1>
						Lista Usuarios
					</h1>
					<table class="table" method="post">
						  <thead class="bg-info">
						    <tr>
						      <th scope="col" id="id_table">ID</th>
						      <th scope="col">USUARIO</th>
						      <th scope="col">CORREO</th>
						      <th scope="col">ROL</th>
						      <th scope="col" colspan="2">OPCIONES</th>
						  	</tr>
						  </thead>

							<tbody>
								<?php
								include "../model/connection.php";

								$consulta = "SELECT * FROM usuarios;";
								$sql=$conn->prepare($consulta);

								$sql->execute();
								$i = 1;
								while($datos = $sql->fetch(PDO::FETCH_OBJ)) {
									echo "<tr>";
									echo "<td>".$i."</td>";
									echo "<td>".$datos->usuario."</td>";
									echo "<td>".$datos->correo."</td>";
									echo "<td>".$datos->roles."</td>";
									// echo "<td>" . '<a href="model-lis/update.php?upd=' . $datos->id . '" class="boton_edit" title="Editar Habitante"><img src="../fontawesome/svgs/regular/pen-to-square.svg" class="icon_edit"></a>' . "</td>";
									echo "<td>".'<a class="text-success" title="Editar" href="model-lis/update.php?upd=' . $datos->id . '"><i class="bi bi-pencil-square"></i></a>' . "</td>";
									// echo '<td>'.'<a href="" class="btn btn-small btn-danger">'.'<i class="fa-solid fa-trash-can"></i>'.'</td>';
									echo "<td>".'<a class="text-success" title="Eliminar" href="model-lis/eliminar.php?upd=' . $datos->id . '"><i class="bi bi-trash"></i></a>' ."</td>";
									echo "</tr>";
									$i++;
								} 
								?>
								<!-- 	<td>
					      	<a href="" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i>
					      </td>
					      <td>
					      	<a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i>
					      </td> -->
					    </tbody>

						</table>
				</div>

				<div class="grid-container">

					<h1>Datos de Usuario:</h1>

					<form action="model-lis/registrar.php" method="post" name="registro" class="form form_service">
	  					

	  					<div class="mb-3">
	    					<label class="form-label">Usuario:</label>
	    					<input type="text" class="form-control" onblur="javascript:userRepetido(this);" name="usuario" placeholder="Ingresar Usuario">
	  					</div>

				  		<div class="mb-3">
				    		<label class="form-label">Contraseña:</label>
				    		<input type="password" class="form-control" name="password" placeholder="Ingresar Contraseña">
				  		</div>

				  		<div class="mb-3">
				    		<label class="form-label">Correo Electronico:</label>
				    		<input type="email" class="form-control" name="email" placeholder="Ingresar Email">
				  		</div>

			  			<div class="mb-3" >
			    			<label  class="form-label">Rol:</label><br>
			    		  <select name="roles" class="form-control">
			    				<option value="jefe_comunidad"> Jefe de comunidad</option>
			   					<option value="jefe_calle"> Jefe de calle</option>
			   					<option value="comunidad"> Comunidad</option>
			  				</select>
				  		</div>

	  					<button type="submit" class="btn btn-dark button_rgstr">REGISTRAR</button>

			  		</form>
				</div>
			</div>
		
		</div>

	</div>
	
	<?php include('../template/footer.php');?>