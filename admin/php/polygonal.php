<?php include('../template/header.php');?>

	

		<div class="dashboard">

			<div class="">
				
				<details class="desplegable">
					<summary>Oriental</summary>
					<div class="contain_table_dashboard">

						<table class="table table-hover">
							<thead>  
								<tr>
								<th id="id_table">Nº</th>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th>Sexo</th>
								<th>Cedula</th>
								<th>Nacionalidad</th>
								<th>Estado Civil</th>
								<th>Fecha de Nac.</th>
								<th>Tipo de Habitante</th>
								<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								<?php 


								include('../php/clSystem.php');

								$objList = new pSystem();

								$listado = $objList->pOriental();

								$i = 0;
								$j=1;

								while ($i<count($listado)){
									echo "<tr>";
									echo "<td>" . $j . "</td>";
									echo "<td>" . $listado[$i]->nom . "</td>";
									echo "<td>" . $listado[$i]->snom . "</td>";
									echo "<td>" . $listado[$i]->sex . "</td>";
									echo "<td>" . $listado[$i]->ced . "</td>";
									echo "<td>" . $listado[$i]->nacionalidad . "</td>";
									echo "<td>" . $listado[$i]->e_civil . "</td>";
									echo "<td>" . $listado[$i]->fnac . "</td>";
									echo "<td>" . $listado[$i]->tipo_habitante . "</td>";
									echo "<td>" . '<a href="actualizar.php?upd=' . $listado[$i]->id_cl . '" class="boton_edit" title="Editar Habitante"><img src="../fontawesome/svgs/regular/pen-to-square.svg" class="icon_edit"></a>' . "</td>";
									echo "</tr>";
									$i++;
									$j++;
								}

							?>

							</tbody>

						</table>
					</div>
				</details>

				<details class="desplegable">
					<summary>Carabobo</summary>
					<div class="contain_table_dashboard">

						<table class="table table-hover">
							<thead>  
								<tr>
								<th id="id_table">Nº</th>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th>Sexo</th>
								<th>Cedula</th>
								<th>Nacionalidad</th>
								<th>Estado Civil</th>
								<th>Fecha de Nac.</th>
								<th>Tipo de Habitante</th>
								<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								<?php 

								$host = 'localhost';
								$dbname = 'comunidad';
								$usrname = 'consejo';
								$psswd = 'c0n53j0';


								$conexion = "mysql:host=".$host.";dbname=".$dbname;
								try {
									$conexion = new PDO($conexion, $usrname, $psswd);

									$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									// echo "conexion establecida";
								} catch (PDOException $e) {
									echo 'Error al establecer la conexion' . $e->getMessage();
								}

						    	$sql = "SELECT habitantes.id, nombres, apellidos, sexo, cedula, nacionalidad, e_civil, fecha_nac, tipo_habitante, casa_id FROM habitantes INNER JOIN casas, poligonal WHERE habitantes.casa_id=casas.id && casas.id_poligonal = poligonal.id && poligonal.id = 2;";

						    	$stmt = $conexion->prepare($sql);
						    	$stmt->execute();
						    	$i = 1;
						    	while($rows = $stmt->fetch(PDO::FETCH_OBJ)) {
						    			echo "<tr>";
						    			echo "<td>" . $i . "</td>";
										echo "<td>" . $rows->nombres . "</td>";
										echo "<td>" . $rows->apellidos . "</td>";
										echo "<td>" . $rows->sexo . "</td>";
										echo "<td>" . $rows->cedula . "</td>";
										echo "<td>" . $rows->nacionalidad . "</td>";
										echo "<td>" . $rows->e_civil . "</td>";
										echo "<td>" . $rows->fecha_nac . "</td>";
										echo "<td>" . $rows->tipo_habitante . "</td>";
										echo "<td>" . '<a href="actualizar.php?upd=' . $rows->id . '" class="boton_edit" title="Editar Habitante"><img src="../fontawesome/svgs/regular/pen-to-square.svg" class="icon_edit"></a>' . "</td>";
										echo "</tr>";
										$i++;
						    	}
							?>




							</tbody>

						</table>
					</div>
				</details>

				<details class="desplegable">
					<summary>Francisco Javier</summary>
					<div class="contain_table_dashboard">

						<table class="table table-hover">
							<thead>  
								<tr>
								<th id="id_table">Nº</th>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th>Sexo</th>
								<th>Cedula</th>
								<th>Nacionalidad</th>
								<th>Estado Civil</th>
								<th>Fecha de Nac.</th>
								<th>Tipo de Habitante</th>
								<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								<?php 

								$sql = "SELECT habitantes.id, nombres, apellidos, sexo, cedula, nacionalidad, e_civil, fecha_nac, tipo_habitante, casa_id FROM habitantes INNER JOIN casas, poligonal WHERE habitantes.casa_id=casas.id && casas.id_poligonal = poligonal.id && poligonal.id = 3;";

						    	$stmt = $conexion->prepare($sql);
						    	$stmt->execute();
								$i = 1;
						    	while($rows = $stmt->fetch(PDO::FETCH_OBJ)) {
						    			echo "<tr>";
						    			echo "<td>" . $i . "</td>";
										echo "<td>" . $rows->nombres . "</td>";
										echo "<td>" . $rows->apellidos . "</td>";
										echo "<td>" . $rows->sexo . "</td>";
										echo "<td>" . $rows->cedula . "</td>";
										echo "<td>" . $rows->nacionalidad . "</td>";
										echo "<td>" . $rows->e_civil . "</td>";
										echo "<td>" . $rows->fecha_nac . "</td>";
										echo "<td>" . $rows->tipo_habitante . "</td>";
										echo "<td>" . '<a href="actualizar.php?upd=' . $rows->id . '" class="boton_edit" title="Editar Habitante"><img src="../fontawesome/svgs/regular/pen-to-square.svg" class="icon_edit"></a>' . "</td>";
										echo "</tr>";
										$i++;
						    	}

							?>




							</tbody>

						</table>
					</div>
				</details>

				<details class="desplegable">
					<summary>Principal</summary>
					<div class="contain_table_dashboard">

						<table class="table table-hover">
							<thead>  
								<tr>
								<th id="id_table">Nº</th>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th>Sexo</th>
								<th>Cedula</th>
								<th>Nacionalidad</th>
								<th>Estado Civil</th>
								<th>Fecha de Nac.</th>
								<th>Tipo de Habitante</th>
								<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								<?php 

								$sql = "SELECT habitantes.id, nombres, apellidos, sexo, cedula, nacionalidad, e_civil, fecha_nac, tipo_habitante, casa_id FROM habitantes INNER JOIN casas, poligonal WHERE habitantes.casa_id=casas.id && casas.id_poligonal = poligonal.id && poligonal.id = 4;";

						    	$stmt = $conexion->prepare($sql);
						    	$stmt->execute();
								$i = 1;
						    	while($rows = $stmt->fetch(PDO::FETCH_OBJ)) {
						    			
						    			echo "<tr>";
						    			echo "<td>" . $i . "</td>";
										echo "<td>" . $rows->nombres . "</td>";
										echo "<td>" . $rows->apellidos . "</td>";
										echo "<td>" . $rows->sexo . "</td>";
										echo "<td>" . $rows->cedula . "</td>";
										echo "<td>" . $rows->nacionalidad . "</td>";
										echo "<td>" . $rows->e_civil . "</td>";
										echo "<td>" . $rows->fecha_nac . "</td>";
										echo "<td>" . $rows->tipo_habitante . "</td>";
										echo "<td>" . '<a href="actualizar.php?upd=' . $rows->id . '" class="boton_edit" title="Editar Habitante"><img src="../fontawesome/svgs/regular/pen-to-square.svg" class="icon_edit"></a>' . "</td>";
										echo "</tr>";
										$i++;
						    	}

							?>




							</tbody>

						</table>
					</div>
				</details>

			</div>
		
		</div>

	</div>
<?php include('../template/footer.php');?>