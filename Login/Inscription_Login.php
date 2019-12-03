



<!-- By Wassim Fathallah -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inscription/login</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v8">
	<div class="page-content">
		<div class="form-v8-content">
			<div class="form-left">
				<img src="https://www.up-00.com/i/00148/r699du8gubhn.png" alt="form">
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" style="color: #08F56C; text-decoration: underline;  text-decoration-color:white; padding-top: -10px;">Inscrivez vous C'est gratuit</button>
					</div>
			
				</div>
				<!-- Inscription -->
				<form class="form-detail" name="myform"   method="post"  action="Inscription.php" onsubmit="return Validate(this)"   >
					<div class="tabcontent" id="sign-up">
						



						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="name" id="name" class="input-text" required>
								<span class="label">Nom</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="lastname" id="lastname" class="input-text" required>
								<span class="label">Prenom</span>
		  						<span class="border"></span>
							</label>
						</div>

						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="equipe" id="equipe" class="input-text" required>
								<span class="label">Equipe Prefere</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="email" name="email" id="email" class="input-text" required>
								<span class="label">E-Mail</span>
		  						<span class="border"></span>
							</label>
						</div>

						<div class="form-row">
							<label class="form-row-inner">
								<input type="email" name="ComfirmEmail" id="ComfirmEmail" class="input-text" required>
								<span class="label">Confirmation d'Email</span>
		  						<span class="border"></span>
							</label>
						</div>

						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Mot de pass</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
								<span class="label">Comfirmation de mot de pass</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="register"  class="register" value="Register"   >


						</div>
                        
                        
					</div>
				</form>

				
			</div>
		</div>
	</div>
	



<script>
function Validate() {

		//var pass =document.form["myform"][""].value;
		var pwd = document.getElementById("password").value;
		var confirmation_pwd = document.getElementById("comfirm_password").value;
		    var mail = document.getElementById("email").value;
		var confMail = document.getElementById("ComfirmEmail").value;
//___________________    

if(mail != confMail){

					

						alert("Email Don't Match !")
						return false;
					}

else 


			

if(pwd != confirmation_pwd){

				alert("password Don't Match !");
			return false;

			}




}


</script>
</body>
</html>