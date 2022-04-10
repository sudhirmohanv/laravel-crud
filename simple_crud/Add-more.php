<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  
<div class="container">
	
				<div class="row mt-2">
			    <div class="col-md-2"><b>Add Parameter <span style="color:red;font-weight: bold;"><span style="color:red;font-weight: bold;">*</span></span></b></div>
			    <div class="col-md-10" style="overflow-y: auto;max-height: 300px;">
			       	<table class="table table-striped table-bordered">
			       		
			       			<thead style="background-color: black;color:white;position: sticky;top:0;">
			       				<tr>
				       				<th>Serial No.</th>
				       				<th>Parameter</th>
				       				<th>
				       					<button type="button" class="btn btn-warning btn-sm addmore" >
				       					Add More</button>

				       				</th>
			       				</tr>
			       			</thead>
			       		
			       		<tbody id="append-rows">
			       			
			       		</tbody>
			       			

			       	</table>
			        </div>
			</div>
</div>

</body>
<script>
//code for Adding more and remove functionality
	
	var i = 1;
	$(document).ready(function(){
		$(".addmore").click(function(){
			$("#append-rows").append(`<tr>
					    <td>`+i+`.</td>
					    <td><input type="text" name="parameter[]" class="form-control"></td>
					    <td><button type="button" class="btn btn-danger btn-sm" onclick="removebtn(this);">Delete</button></td>
			  		</tr>`);
			i++;
		})
	});
	

	function removebtn(element){
		$(element).parent().parent().remove();
		i--;
	}

</script>
</html>