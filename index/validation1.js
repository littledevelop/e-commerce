$(document).ready(function(){
	$("#loginform").validate({
		rules:
		{
			name:
			{	required:true,
				number:false,
			},
			mobile:
			{
				number:true,
				required:true,
				maxlength:10,
				minlength:10,
			},
			email:
			{
				required:true,
				email:true,
			},
			password:
			{
				required:true,
				maxlength:8,
				minlength:6,
			},		
			cpassword:
			{
				required:true,
				maxlength:8,
				minlength:6,
				equalTo:'#pass',
			},
			address:
			{
				required:true,
			},
			state:
			{
				required:true,
			},
			city:
			{
				required:true,
			},
			dob:
			{
				required:true,
			},
			gender:
			{
				required:true,
			},
			rememberme:
			{
				required:true,
			},
			profile:
			{
				required:true,
			},

		},
		messages:
		{
			name:
			{	required:"*Please Enter Name",
				number:"Name Should be only alphabets",
			},
			mobile:
			{
				number:"*Please Enter Only Digits",
	 			required:"*Please Enter Mobile Number",
	 			maxlength:"*Mobile Number Should be Only 10th Digit Allow",
	 			minlength:"*Mobile Number Only 10th Digit Allow",
			},
			email:
			{
				required:"*Please Enter Email ID",
	 			email:"*Please Enter Valid Email ID",
			},
			password:
			{
				required:"*Please Enter Password",
	 			maxlength:"*Password Should be Only 8th Character",
	 			minlength:"*Password Should be Atleast 6th Character",
			},		
			cpassword:
			{
				required:"*Please Enter Confirm Password",
	 			maxlength:"*Confirm Password Should be Only 8th Character",
	 			minlength:"*Confirm Password Should be Atleast 6th Character",
	 			equalTo:'*Confirm Password and Password Should Be Matched',
			},
			address:
			{
				required:"*Please Enter Address",
			},
			state:
			{
				required:"*Please Select State",
			},
			city:
			{
				required:"*Please Select City",
			},
			dob:
			{
				required:"*Please Enter Confirm Password",
			},
			gender:
			{
				required:"*Please check Gender",
			},
			rememberme:
			{
				required:"*Please Check you agree or not",
			},
			profile:
			{
				required:"*Please Choose your profile pic",
			},
		},
		 errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if (placement) {
              $(placement).append(error)
            } else {
              error.insertAfter(element);
            }
          },
      

	});
});