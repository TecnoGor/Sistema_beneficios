<?php include('../template/header.php');?>
	

			<div class="contain_table_dashboard">

				<button class="button_rgstr"><a href="registrar.php"><i class="bi bi-person-plus-fill"></i> Registrar Habitante</a></button><hr>

				<form action="" method="POST">

					<label><i class="bi bi-search"></i> BUSCAR:</label>
					<input type="text" class="form-control" name="search" onblur="javascript:searchHabitante(this)">
				</form>

				<table class="table table-hover">
					<thead>  
						<tr>
						<th id="id_table">Nº</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Cedula</th>
						<th>Sexo</th>
						<th>Nacionalidad</th>
						<th>Estado Civil</th>
						<th>Fecha de Nac.</th>
						<th>Tlfno / Celular</th>
						<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$x = 0;

						if (isset($_REQUEST['search']) == null) {
							include('../php/clSystem.php');

							$objList = new pSystem();

							$listado = $objList->listBosses();

							$i = 0;
							$j=1;

							while ($i<count($listado)){
								echo "<tr>";
								echo "<td>" . $j . "</td>";
								echo "<td>" . $listado[$i]->nom . "</td>";
								echo "<td>" . $listado[$i]->snom . "</td>";
								echo "<td>" . $listado[$i]->ced . "</td>";
								echo "<td>" . $listado[$i]->sex . "</td>";
								echo "<td>" . $listado[$i]->nacionalidad . "</td>";
								echo "<td>" . $listado[$i]->e_civil . "</td>";
								echo "<td>" . $listado[$i]->fnac . "</td>";
								echo "<td>" . $listado[$i]->cel . "</td>";
								echo "<td>" . '<a href="actualizar.php?upd=' . $listado[$i]->id_cl . '" class="boton_edit" title="Editar Habitante"><img src="../fontawesome/svgs/regular/pen-to-square.svg" class="icon_edit"></a>' . "</td>";
								echo "</tr>";
								$i++;
								$j++;
							}
	
						}elseif (isset($_REQUEST['search']) != null) {
							
							include('../model/connection.php');

							$buscar= $_REQUEST['search'];

							$sql = "SELECT * FROM habitantes WHERE cedula=:buscar || nombres=:buscar || apellidos=:buscar and tipo_habitante = 'Jefe de Familia';";

							$stmt = $conn->prepare($sql);
							$stmt->bindParam(":buscar", $buscar);
							$stmt->execute();

							$j = 1;

							while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
							            
							            echo "<tr>";
										echo "<td>" . $j . "</td>";
										echo "<td>" . $row->nombres . "</td>";
										echo "<td>" . $row->apellidos . "</td>";
										echo "<td>" . $row->cedula . "</td>";
										echo "<td>" . $row->sexo . "</td>";
										echo "<td>" . $row->nacionalidad . "</td>";
										echo "<td>" . $row->e_civil . "</td>";
										echo "<td>" . $row->fecha_nac . "</td>";
										echo "<td>" . $row->sexo . "</td>";
										echo "<td>" . '<a href="actualizar.php?upd=' . $row->id . '" class="boton_edit" title="Editar Habitante"><img src="../fontawesome/svgs/regular/pen-to-square.svg" class="icon_edit"></a>' . "</td>";
										echo "</tr>";
										$j++;
							}
						}

						
					?>




					</tbody>

				</table>
			</div>
		<?php include('../template/footer.php');?>