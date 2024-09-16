

	<?php include('../template/header.php');?>

	

		<div class="dashboard">

			<div class="form_container_rgstr">

				<?php

					if(isset($_REQUEST['upd'])) $id = $_REQUEST['upd'];

					$host = 'localhost';
					$dbname = 'comunidad';
					$usrname = 'consejo';
					$psswd = 'c0n53j0';

					$dsn = "mysql:host=".$host.";dbname=".$dbname;

					$conn = new PDO($dsn, $usrname, $psswd);

					$sql = "SELECT * FROM habitantes WHERE id = :id";

					$stmt = $conn->prepare($sql);
					$stmt->bindParam(":id",$id);
					$stmt->execute();

					$count = $stmt->rowCount();

					if($count > 0){
						$lista = $stmt->fetch();
					}

				?>

				<form class="form_container" method="POST" action="update.php">

					<input type="hidden" name="id" value="<?= $lista['id']?>">

					<div class="grid_container">

						<h1 class="h1_center">Actualizar Habitante</h1>
						
						<div class="">
							<input type="text" name="nom" required placeholder="Ingrese su nombre" class="input_rgstr" value="<?= $lista['nombres']?>">

							<input type="text" name="snom" required placeholder="Ingrese su apellido" class="input_rgstr" value="<?= $lista['apellidos']?>">

							<input type="number" name="ced" required placeholder="Ingrese su cedula" class="input_rgstr" value="<?= $lista['cedula']?>">

							
						</div>

						<div>

							<input type="date" name="fnac" class="input_rgstr" value="<?= $lista['fecha_nac']?>">

							<input type="text" name="cel" required placeholder="Ingese su numero celular" class="input_rgstr" value="<?= $lista['tlf_cel']?>">

							<input type="text" name="discapacidad" placeholder="Posee alguna discapacidad?" class="input_rgstr" value="<?= $lista['discapacidad']?>">
							
						</div>

						<div class="">

							<input type="text" name="pensionado" placeholder="Es usted Pensionado?" class="input_rgstr" value="<?= $lista['pensionado']?>">

							<select name="e_civil" required class="input_rgstr" value="<?= $lista['e_civil']?>">
								
								<option selected disabled>Seleccione ...</option>

								<option value="Soltero (a)">Soltero (a)</option>

								<option value="Casado (a)">Casado (a)</option>

								<option value="Divorciado (a)">Divorciado (a)</option>

								<option value="Viudo (a)">Viudo (a)</option>

								<option value="Concubino (a)">Concubino (a)</option>

							</select>

							<select name="t_habitante" required class="input_rgstr" value="<?= $lista['tipo_habitante']?>">

								<option disabled selected>Seleccionar ....</option>

								<option value="Jefe de Familia">Jefe de Familia</option>

								<option value="Integrante de Familia">Integrante de Familia</option>

								<option value="Jefe de Calle">Jefe de Calle</option>

								<option value="Jefe de Comunidad">Jefe de Comunidad</option>
								
							</select>
						</div>
						
						<div class="">
						

							<select name="nacionalidad" required class="input_rgstr" value="<?= $lista['nacionalidad']?>">

								<option disabled selected>Seleccionar ...</option>

								<option value="Venezolano">Venezolano</option>

								<option value="Extranjero">Extranjero</option>

							</select>

							<select name="nro_casa" required class="input_rgstr" value="<?= $lista['casa_id']?>">
								<option disabled selected>Seleccionar ....</option>
									
								<?php
									include("clSystem.php");

									$objList = new pSystem();
									$list = $objList->listHouse();
									$i = 0;	
									while($i<count($list)){
										$house=$list[$i]->casa;	
										$house_id=$list[$i]->id_cl; 
										echo '<option value="'.$house_id.'">'.$house."</option>"; 
										$i++;
									}
								?>
								
							</select>

							<select name="sex" required class="input_rgstr" value="<?= $lista['sexo']?>">
								
								<option selected disabled>Seleccione ....</option>

								<option value="Masculino">Masculino</option>

								<option value="Femenina">Femenina</option>

							</select>
						</div>

						<div>
							<input type="submit" name="snd" class="button_rgstr" value="Actualizar Habitante">	
						</div>
					</div>
					
					

				</form>
				
			</div>

		</div>

	</div>
<?php include('../template/footer.php');?>