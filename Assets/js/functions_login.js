$('.login-content [data-toggle="flip"]').click(function() 
{
	$('.login-box').toggleClass('flipped');
	return false;
});

var divLoading = document.querySelector("#divLoading");

document.addEventListener('DOMContentLoaded', function(){
	if(document.querySelector("#formLogin")) 
    {
        let formLogin = document.querySelector("#formLogin");
		formLogin.onsubmit = function(e) {
			e.preventDefault();

            let strEmail = document.querySelector('#txtEmail').value;
			let strPassword = document.querySelector('#txtPassword').value;

            if (strEmail == "" || strPassword == "")
			{
                Swal.fire( 'Por favor', 'Escribe usuario y contraseña.', 'error');
				return false;
			}else{
				divLoading.style.display = "flex";
				var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
				var ajaxUrl = base_url+'/Login/loginUser'; 
				var formData = new FormData(formLogin);
				request.open("POST", ajaxUrl, true);
				request.send(formData);

				request.onreadystatechange = function(){
					if (request.readyState != 4) return;
					if (request.status == 200){
						var objData = JSON.parse(request.responseText);
						if(objData.status)
						{
							window.location = base_url+'/dashboard';
						}else{
							Swal.fire('Atención', objData.msg, 'error');
							document.querySelector('#txtPassword').value = "";
						}
					}else{						
						Swal.fire('Atención', "Error en el proceso", 'error');
					}
					divLoading.style.display = "none";
					return false;
				}
            }
        }
    }

	if(document.querySelector("#formResetPass")){		
		let formResetPass = document.querySelector("#formResetPass");
		formResetPass.onsubmit = function(e) {
			e.preventDefault();

			let strEmail = document.querySelector('#txtEmailReset').value;
			if(strEmail == "")
			{
				Swal.fire('Por favor', 'Escribe tu correo electrónico.', 'error');
				return false;
			}else{
				divLoading.style.display = "flex";
				var request = (window.XMLHttpRequest) ? 
								new XMLHttpRequest() : 
								new ActiveXObject('Microsoft.XMLHTTP');
								
				var ajaxUrl = base_url+'/Login/resetPass'; 
				var formData = new FormData(formResetPass);
				request.open("POST", ajaxUrl, true);
				request.send(formData);
				request.onreadystatechange = function()
				{					
					if(request.readyState != 4) return;

					if(request.status == 200){
						var objData = JSON.parse(request.responseText);
						if(objData.status)
						{
							Swal.fire({
								title: '',
								text: objData.msg,
								icon: 'success',
								confirmButtonText: "Aceptar",
								closeOnConfirm: false,
							}).then((result) => {
								if (result.isConfirmed) {
									window.location = base_url;
								}
							});
						}else{
							Swal.fire('Atención', objData.msg, 'error');
						}
					}else{
						Swal.fire('Atención', 'Error en el proceso', 'error');
					}
					divLoading.style.display = "none";
					return false;
				}	
			}
		}
	}

	if(document.querySelector("#formCambiarPass")){
		let formCambiarPass = document.querySelector("#formCambiarPass");
		formCambiarPass.onsubmit = function(e) {
			e.preventDefault();

			let strPassword = document.querySelector('#txtPassword').value;
			let strPasswordConfirm = document.querySelector('#txtPasswordConfirm').value;
			let idUsuario = document.querySelector('#idUsuario').value;

			if(strPassword == "" || strPasswordConfirm == ""){
				Swal.fire('Por favor', 'Escribe la nueva contraseña.', 'info');
				return false;
			}else{
				if(strPassword.length < 5 ){					
					Swal.fire('Atención', 'La contraseña debe tener un mínimo de 6 caracteres.', 'info');
					return false;
				}
				if(strPassword != strPasswordConfirm){					
					Swal.fire('Atención', 'Las contraseñas no son iguales.', 'error');
					return false;
				}
				divLoading.style.display = "flex";
				var request = (window.XMLHttpRequest) ? 
							new XMLHttpRequest() : 
							new ActiveXObject('Microsoft.XMLHTTP');
				var ajaxUrl = base_url+'/Login/setPassword'; 
				var formData = new FormData(formCambiarPass);
				request.open("POST", ajaxUrl, true);
				request.send(formData);
				request.onreadystatechange = function()
				{
					if(request.readyState != 4) return;
					if(request.status == 200){
						var objData = JSON.parse(request.responseText);
						if(objData.status)
						{
							Swal.fire({
								title: '',
								text: objData.msg,
								icon: 'success',
								confirmButtonText: "Iniciar sessión",
								closeOnConfirm: false,
							}).then((result) => {
								if (result.isConfirmed) {
									window.location = base_url+'/login';
								}
							});
						}else{
							Swal.fire('Atención', objData.msg, 'error');
						}
					}else{
						Swal.fire('Atención', 'Error en el proceso', 'error');						
					}
					divLoading.style.display = "none";
				}
			}
		}
	}
}, false);