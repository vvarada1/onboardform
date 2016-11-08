<!DOCTYPE html>
	<head>
		<title>OnBoard Form</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" 
		href="bootstrap.min.css">
		<script src="jquery-2.1.4.min.js"></script>
		<script src="bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h1 class="col-sm-offset-5">OnBoard Form</h1>
			
			<form action="operation.php" name="demoForm" onsubmit="return validateForm()"
			class="form-horizontal  col-sm-offset-3" method="post">
				
				<div class="form-group">	
					<label class="control-label col-sm-4"
					for="advCompName">Advertiser Company Name:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control error" 
						name="advCompName" id="advCompName">
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">	
					<label class="control-label col-sm-4"
					for="advFname">Advertiser Contact - First Name:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control error" 
						name="advFname" id="advFname">
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">	
					<label class="control-label col-sm-4"
					for="advLname">Advertiser Contact - Last Name:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control error" 
						name="advLname" id="advLname">
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">	
					<label class="control-label col-sm-4"
					for="advContactPhone">Advertiser Contact Phone:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control error" 
						name="advContactPhone" id="advContactPhone">
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-4" 
					for="advWebAddr">Advertiser Web Address:</label>
					<div class="col-sm-3">          
						<input type="url" class="form-control error" 
						name="advWebAddr" id="advWebAddr">
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-4" 
					for="advEmailAddr">Advertiser Email Address:</label>
					<div class="col-sm-3">          
						<input type="email" class="form-control error" 
						name="advEmailAddr" id="advEmailAddr">
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-4" 
					for="businessDesc">Business Description:</label>
					<div class="col-sm-3">
						<textarea class="form-control error" 
						name="businessDesc" id="businessDesc"></textarea>
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-4" 
					for="locationName">Location Name:</label>
					<div class="col-sm-3">          
						<input type="text" class="form-control error" 
						name="locationName" id="locationName">
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">	
					<label class="control-label col-sm-4"
					for="addr1">Address 1:</label>
					<div class="col-sm-3">
						<textarea class="form-control error" 
						name="addr1" id="addr1"></textarea>
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">	
					<label class="control-label col-sm-4"
					for="city">City:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control error" 
						name="city" id="city">
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">	
					<label class="control-label col-sm-4"
					for="postalCode">Postal Code:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control error" 
						name="postalCode" id="postalCode">
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">	
					<label class="control-label col-sm-4"
					for="phone">Phone:</label>
					<div class="col-sm-3">
						<input type="phone" class="form-control error" 
						name="phone" id="phone">
						<span name="warning" class="warning"></span>
					</div>
				</div>
				
				<div class="form-group">        
					<div class="col-sm-offset-4 col-sm-2">
					<button type="submit" 
					class="btn btn-success" name="Submit">
					Submit</button>
					</div>   
				</div>
				
			</form>
		</div>
	</body>
	
	<script>
		var len=document.forms.demoForm.length;
		flag=true;
		
		var validateForm=function(){
			for(var i=0;i<len-1;i++){
				if((document.forms.demoForm[i].tagName)!="BUTTON"){
					var a=document.forms.demoForm[i].value;
					
					if(a==""||a==null){
						document.getElementsByClassName("warning")[i].innerHTML="Field Required";
						document.getElementsByClassName("warning")[i].style.color="#C7092E";
						document.getElementsByClassName("error")[i].style.border="2px solid #C7092E";
						flag=false;					
					}
				}
			}
		return flag;
		}
		$('.error').on('focus',function(){
			$(this).css('border','1px solid #ccc');
			$(this).next('span').text("");
			
		});
	</script>
		
</html>
