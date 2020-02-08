






// Show hide Password
var eye = document.getElementById('eyepassword');
var pass = document.getElementById('password');
var stat = true;
if(eye != null){
	eye.addEventListener('click', function(){
		if(stat == true){
			eye.innerHTML = "<i class='fas fa-eye'></i>";
			pass.type = "text";
			stat = false;
		}else{
			eye.innerHTML = "<i class='far fa-eye-slash'></i>";
			pass.type = "password";
			stat = true;
		}
	});
}

function show(){
	if(this.files && this.files[0]){
		var obj = new FileReader();
		obj.onload = function(data){
			var image = document.getElementById("image");
			image.src = data.target.result;
			image.style.opacity = "1";
		}
		obj.readAsDataURL(this.files[0]);
	}
}
function validate(input,warning){
	var check = 0;
	var field = document.querySelectorAll(input);
	var info_error = document.querySelectorAll(warning);
	for(var i=0; i<field.length; i++){
		if($(field[i]).val()==null || $(field[i]).val().length == 0){
			$(info_error[i]).css({'display':'block'});
			check--;
			continue;
		}else{
			$(info_error[i]).css({'display':'none'});
			check++;
			continue;
		}
	}
	return check;
}

function form_validate(form_name,input,warning,fieldamount){
	$(form_name).on('submit', function(e){
		
		if(validate(input,warning)>=fieldamount){
			$(form_name).submit();
		}else{
			e.preventDefault();
		}
	});
}
 



// Redirect
function redirect(link){
	document.location.href = link;
}





