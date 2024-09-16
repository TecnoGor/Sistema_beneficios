<?php include('../template/header.php');?>

		<div class="dashboard">

			<div class="form_container_rgstr">

				<form class="form_container" method="POST" action="rstr_conn.php">

					<div class="grid_container">

						<h1>REGISTRAR HABITANTE</h1>
						
						<div>
							
							
							<input type="text" name="nom" required placeholder="Ingrese su nombre" class="input_rgstr" required>

							<input type="text" name="snom" required placeholder="Ingrese su apellido" class="input_rgstr" required>

							<input type="number" name="ced" required placeholder="Ingrese su cedula" class="input_rgstr" required>

							

						</div>

						<div>

							<input type="date" name="fnac" class="input_rgstr" required>

							<input type="text" name="cel" required placeholder="Ingese su numero celular" class="input_rgstr">

							<input type="text" name="discapacidad" placeholder="Posee alguna discapacidad?" class="input_rgstr">
							
						</div>


						<div>
							
							

							<input type="text" name="pensionado" placeholder="Es usted Pensionado?" class="input_rgstr" required>

							<select name="e_civil" required class="input_rgstr" required>
								
								<option selected disabled>Seleccione ...</option>

								<option value="Soltero (a)">Soltero (a)</option>

								<option value="Casado (a)">Casado (a)</option>

								<option value="Divorciado (a)">Divorciado (a)</option>

								<option value="Viudo (a)">Viudo (a)</option>

								<option value="Concubino (a)">Concubino (a)</option>

							</select>

							<select name="t_habitante" required class="input_rgstr" required>

								<option disabled selected>Seleccionar ....</option>

								<option value="Jefe de Familia">Jefe de Familia</option>

								<option value="Integrante de Familia">Integrante de Familia</option>

								<option value="Jefe de Calle">Jefe de Calle</option>

								<option value="Jefe de Comunidad">Jefe de Comunidad</option>
								
							</select>

						</div>


						<div>
							
							<select name="nacionalidad" required class="input_rgstr" required>

								<option disabled selected>Seleccionar ...</option>

								<option value="Venezolano">Venezolano</option>

								<option value="Extranjero">Extranjero</option>

							</select>

							<select name="nro_casa" required class="input_rgstr" required>
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

							<select name="sex" required class="input_rgstr" required>
								
								<option selected disabled>Seleccione ....</option>

								<option value="Masculino">Masculino</option>

								<option value="Femenina">Femenina</option>

							</select>

						</div>

						<div>

							<input type="submit" name="snd" class="button_rgstr" value="Registrar Habitante">
							
						</div>

					</div>

				</form>
				
			</div>

		</div>

	</div>

<?php include('../template/footer.php');?>