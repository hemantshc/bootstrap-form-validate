<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style type="text/css">
	body {
     background: url('dolphin.jpg') fixed;
    background-size: cover;
}
	#form {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
    text-align: center;
}

#form h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}

.errormess{
		color: red;
	}
</style>
</head>
<body>

<div class="container-fluid">
	<div class="container-fluid top-bar  bg-primary">
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6 ">
				<p class="text-right text-bold">Contact us-<span class="glyphicon glyphicon-phone">91- 9570070655</span></p>
			</div>
		</div>
	</div>

		<div class="container">
            <div class="form-horizontal" id="form">
                <h2>Registration</h2>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">User Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" id="name" onchange="validate(this.value,'name');" placeholder="Enter username" class="form-control" autofocus>
                        <div class="errormess" id="error_name"></div>
                    </div>
				</div>
				<div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" onchange="validate(this.value,'email');" placeholder="Enter Email" class="form-control" name= "email">
                        <div class="errormess" id="error_email"></div>
                    </div>
                </div>

				<div class="form-group">
					<label for="email" class="col-sm-3 control-label">Password </label>
                    <div class="col-sm-9">
						<input type="password" name="password" id="pswd" onchange="validate(this.value,'pswd');" class="form-control text" placeholder="enter password">
						<div class="errormess" id="error_pswd"></div>
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-3 control-label">Mobile Number </label>
                    <div class="col-sm-9">
						<input type="text" name="mobile" id="mobile" onchange="validate(this.value,'mobile');" class="form-control text" placeholder="enter mobile no.">
						<div class="errormess" id="error_mobile"></div>
					</div>	
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-3 control-label">Date of Birth </label>
                    <div class="col-sm-9">							
						<input type="date" name="dob" id="dob"  onchange="validate(this.value,'dob');" class="form-control text" placeholder="">
						<div class="errormess" id="error_dob"></div>
					</div>
				</div>

				<div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                        	<div class="col-sm-4">
                               <label class="radio-inline">
                                   <input type="radio" name="gender" value="male">Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                               <label class="radio-inline">
                                   <input type="radio" name="gender" value="other">other
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
					<label for="email" class="col-sm-3 control-label">Select state </label>
                    	<div class="col-sm-9">	
							<select id="state" onchange="validate(this.value,'state');" class="form-control text>
							" >
								<option></option>
								<option>Delhi</option>
								<option>Kerala</option>
								<option>Odisha</option>
								<option>Assam</option>
								<option>Bihar</option>
								<option>Gujrat</option>
								<option>Goa</option>
								<option>Manipur</option>
							</select>
						<div class="errormess" id="error_state"></div>
					</div>
				</div>
						
				<div class="form-group" id="myDiv">
                    <label class="control-label col-sm-3">Select Games</label>
                    <div class="col-sm-6">
                        <div class="row">
                        	<div class="col-sm-4">
                               <label class="form-check-inline">
                                   <input type="checkbox" name="checkbox" value="Cricket">Cricket
                                </label>
                            </div>
                            <div class="col-sm-4">
                               <label class="form-check-inline">
                                   <input type="checkbox" name="checkbox" value="Football">Football
                                </label>
                            </div>
                            <div class="col-sm-4">
                               <label class="form-check-inline">
                                   <input type="checkbox" name="checkbox" value="Hockey">Hockey
                                </label>
                            </div>
                            <div class="col-sm-4">
                               <label class="form-check-inline">
                                   <input type="checkbox" name="checkbox" value="Badminton">Badminton
                                </label>
                            </div>
                            <div class="col-sm-4">
                               <label class="form-check-inline">
                                   <input type="checkbox" name="checkbox" value="Kabaddi">Kabaddi
                                </label>
                            </div>
                            <div class="col-sm-4">
                               <label class="form-check-inline">
                                   <input type="checkbox" name="checkbox" value="Chess">Chess
                                </label>
                            </div>
                        </div>
                    </div>
                </div>		
				<div class="form-group">
					<label for="email" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
						<textarea id="address" onchange="validate(this.value,'address');" class="form-control" rows="6"></textarea>
						<div class="errormess" id="error_address"></div>
					</div>
				</div>	
				<div class="form-group">
					<div class="col-sm-12 ">
						<div class="row col-sm-6 col-md-offset-3">
							<input type="submit" class="btn btn-primary" onclick="insertVal();" value="Submit">
						</div>
					</div>	
				</div>	
			</div>			
		</div>			
</div>					
						

	
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  	<script>
  		var error = 0;
  		function validate(value1, type){
  			//console.log("value = "+value1+" type = "+type);

  			if(value1)
  			{	//Name Validation
  				if(type == 'name')
  				{
  					var name_regex = /^([a-zA-Z\s]{3,16})$/;
  					if (value1.match(name_regex))
  					{
  						$("#error_"+type).html("");
  						return 0;
  					}
  					else
  					{
  						$("#error_"+type).html("**Only Character is allowed");
  						error++;
  						return 1;
  					}
  						
  				}
  				
  				//Email validation
  				else if(type == 'email')
  				{
  					var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  					if (value1.match(email_regex) || email.length ==0)
  					{
  						$("#error_"+type).html("");
  						return 0;
  					}
  					else
  					{
  						$("#error_"+type).html("**Enter valid email id");
  						error++;
  						return 1;
  					}
  					
  				}
  				
  				//password validation
  				else if(type == 'password')
  				{
  					var pass = /^[A-Za-z0-9\d=!\-@._*]*$/;
  					if (!value1.match(pass))
  					{
  						$("#error_"+type).html("");
  						return 0;
  					}
  					else
  					{
  						$("#error_"+type).html("**Enter valid password");
  						error++;
  						return 1;
  					}
  					
  				}
  				

  				//Mobile number validation
  				if(type == 'mobile')
  				{
  					var mobile_regx = /^[0-9]+$/;
  					
  					if (value1.match(mobile_regx) && (value1.length >=10 && value1.length <14))
  					{
  						$("#error_"+type).html("");
  						return 0;
  					}
  					else
  					{
  						$("#error_"+type).html("**please enter valid mobile number");
  						error++;
  						return 1;
  					}
  					
  				}

  				// State validation
  				else if(type =='state')
  				{
  					$("#error_"+type).html("");
  						return 0;
  				}

  				//Address Validation
  				if(type == 'address')
  				{
  					var add_regex = /^[#.0-9a-zA-Z\s,-;""/:]+$/;
  					if (value1.match(add_regex))
  					{
  						$("#error_"+type).html("");
  						return 0;
  					}
  					else
  					{
  						$("#error_"+type).html("**please fill the valid address");
  						error++;
  						return 1;
  					}
  						
  				}

  			}
  			
  			else{
  				$("#error_"+type).html("**This field is Required");
  				error++;
  				return 1;
  			}
  		}
		function insertVal(){

			var err = 0;
			var games = [];

			var name = $("#name").val();
			var email = $("#email").val();
			var pswd = $("#pswd").val();
			var mobile = $("#mobile").val();
			var dob = $("#dob").val();
			var gender = $('input[name="gender"]:checked').val();
			var state =$("#state").val();	
			//games = $("input[type = 'checkbox'][name='checkbox']").serialize();
      		$('#myDiv :checked').each(function() {
                games.push($(this).val());
            	});
      			games =games.toString();//convert Array data into string form
				//console.log(games);

			var address = $("#address").val();

			//Initializing variables with Regular expressions
			var data1 = {
						"name":name,
						"email":email,
						"pswd" :pswd,
						"mobile" :mobile,
						"dob" :dob,
						"gender" :gender,
						"state" :state,
						"games" :games,
						"address" :address

						};
			//console.log(data1);			
			for(var i in data1){
				err = validate(data1[i],i);
				console.log(data1[i]);
			}



			
			if(err == 0){
				$.ajax({
					type: "POST",
					url: 'insert.php',
					data : {"data1":data1},
					/*data: {"name":name,"email":email,"pswd":pswd,"mobile":mobile,"dob":dob,"gender":gender, "state":state, "games":games, "address":address},*/
					cache: false,		 
					success: function(result){
						console.log(result);
						if(result == 1){
							alert("successfully submitted");
						}
						else{
							alert("Try Again");
						}
					}
				});
			}
			else{
				alert("fill all the fields");
			}

		}


	</script>
</body>
</html>