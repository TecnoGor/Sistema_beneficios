$(document).ready(function(){
	$('#loginAdmin').on('click', function(){
		loginAdmin();
	});

	$('#loginProfesor').on('click', function(){
		loginProfesor();
	});

})

function loginAdmin() {
	var login = $('#user').val();
	var pass = $('#password').val();

	$.ajax({
		url: './includes/loginAdmin.php',
		method: 'POST',
		data: {
			login:login,
			pass:pass
		},
		success: function(data) {
			$('#msjAdmin').html(data);

			if (data.indexOf('Redirigiendo') >= 0) {
				window.location = 'admin/php/system.php';
			}
		}
	})
}

// function loginProfesor() {
// 	var loginProfesor = $('#userProfesor').val();
// 	var passProfesor = $('#passwordProfesor').val();

// 	$.ajax({
// 		url: './includes/loginProfesor.php',
// 		method: 'POST',
// 		data: {
// 			loginProfesor:loginProfesor,
// 			passProfesor:passProfesor
// 		},
// 		success: function(data) {
// 			$('#msjProfesor').html(data);

// 			if (data.indexOf('Redirecting') >= 0) {
// 				window.location = 'prof/';
// 			}
// 		}
// 	})
// }