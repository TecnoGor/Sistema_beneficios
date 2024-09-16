
	<footer class="footer">
			<h1>
				
			</h1>
	</footer>
	
	<script type="text/javascript">
		
		function validarJefe(nu){
			console.log("Validar jefe de familia");
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					console.log(this.responseText);
					var msjExistencia = "";
					if(this.responseText==0){
						msjExistencia="No hay ningun jefe de familia con esta cedula";
					}else {
						msjExistencia="Cedula correcta";
					}
					alert(msjExistencia);
				}
			};
			xmlhttp.open("POST", "../model/consultarJefe.php?txtCedula="+nu.value,true);
			xmlhttp.send();
		}

	</script>

	<script type="text/javascript">
		
		function userRepetido(nu){
			console.log('El usuario es repetido?');

			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200) {
					console.log(this.responseText);
					var msjUsuario = "";
					if (this.responseText==0) {
						msjUsuario="El usuario no existe";
					}else{
						msjUsuario="Ya existe un usuario con este nombre";
					}
					alert(msjUsuario);
				}
			};
			xmlhttp.open("POST", "../php/model-lis/validarUsuario.php?user="+nu.value,true);
			xmlhttp.send();
		}
	</script>

	<script type="text/javascript">
		
		function searchHabitante(nu) {
			console.log("Buscando habitante");

			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200) {
					console.log(this.responseText);
					var msjSearch = "";
					if (this.responseText==0){
						msjSearch = "No se encontro ningun habitante";
						alert(msjSearch);
					}else {
						msjSearch = "Habitante encontrado";
						
					}
					
				}
			};
			xmlhttp.open("POST", "../php/busqueda.php?buscar="+nu.value,true);
			xmlhttp.send();
		}

	</script>

	<!-- <script type="text/javascript" src="template/js/bootstrap.min.js"></script> -->

</body>
</html>