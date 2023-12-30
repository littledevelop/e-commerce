function get_statewise_city(ob)
{
	// console.log(ob);
	$.ajax({
		url:"get_city.php",
		type:"post",
		data:"state_id="+ob,
		success:function(result)
		{
			// console.log(result);
			$("#get_city").html(result);
			$(".get_city1").html(result);
		}
	});
}

//to get reason detail
function get_reason_detail(obj)
{
	$.ajax({
		url:"backend.php",
		type:"post",
		data:"new_reason_id="+obj,
		success:function(result)
		{
			// console.log(result);
			$("#reason_detail").html(result);
		}
	});
}
//to display subcategory

function disp_subcategory(value)
{
	$.ajax({
			url: "disp_subcategory.php",
			type:"post",
			data:"category_id="+value,
			success:function(result) 
			{
				
				$("#scategory").html(result);
			}
	})
}




//to preview single image
  function readURL(input) {
    if (input.files && input.files[0]) {
    
      var reader = new FileReader();
      reader.onload = function (e) { 
        document.querySelector("#img").setAttribute("src",e.target.result);
      };

      reader.readAsDataURL(input.files[0]); 
    }
  }

//to preview multiple image
 $(document).ready(function(){
    $('#choose-files').change(function(){
        $("#frames").html('');
        for (var i = 0; i < $(this)[0].files.length; i++) {
            $("#frames").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
        }
    });
});



//discount price display in textbox
// function show_discount_price(obj)
// {
// 	// alert("hello");
// 	$.ajax({
// 		url:"get_discount_price.php",
// 		type:"post",
// 		data:"offer_id="+obj,
// 		success:function(result)
// 		{
// 			 $("#dprice").html(result);

// 		 var discount=$("#disc_price").val();
// 		 var val=$("input[name='mrp_price']").val();
//      var total=val - discount;            
//       $("#selling_price").val(total);
// 		}
// 	});
// }

function show_discount_price(obj)
{
	// alert("hello");
	var offer_id=obj;
	var discount_price="discount_price";
	$.ajax({
		url:"backend_page.php",
		type:"post",
		data:{data_event:discount_price,offer_id:offer_id}, 
		//	data:{data_event:"discount_price","offer_id="+obj},
		success:function(result)
		{
			 $("#disc_price").val(result);
			 var mrp_price = $("input[name='mrp_price']").val();
			 count_selling_price(mrp_price);

		}
	});
}

//count Selling Price
  function count_selling_price(val)
   {
      var discount=$("#disc_price").val();
     var total=val - discount;            
      // console.log(total);
      $("#selling_price").val(total);
   }


   //search data
  
  
//pagination
// function getdata(total_page) {
// 	// body...
// 	$.ajax({
// 			url:"pagination.php",
// 			type:"post",
// 			data:{data_event:pagination,:total_page},
// 			success:function(result){
// 				document.getElementById("pagination_div").innerHTML=response;
// 			}
// 	});
// }


//view order data in order wise
function view_order_data(ob)
{
	alert("hii");
		$.ajax({

			url:"backend.php",
			type:"post",
			data:"no_of_order="+ob,
			success:function(result)
			{
				console.log(result);
				$("#disp_order_data").html(result);
			}
		});
}