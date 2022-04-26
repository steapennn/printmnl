function swalCorrect(){
	Swal.fire({
	icon: 'success',
	title: 'Welcome',
  }).then(function()
  {
   location.href='dashboard.php';
  }) 
  }
function swalpopup(){
Swal.fire({
  customClass: 'swal-wide',
  title: "<h2>Heat Press</h2>", 
  html: `<div class="container py-5">
  <div class="row">
  <div class="col-md-6" style="width:100px;">
		  <img src="pic/tshirt2.jpg" width="50%" height="auto">
		  </div>
	  <div class="col-md-6 mx-auto">
		  <form class="jl" method = "POST" action ="">
		  
		  <input type="text" name="cmbSA" value="Heat Press" style = "display:block;" hidden></input>
			  <div class="form-group row">
			  
				  <div class="col-sm-6">
					  <label for="inputFullname">Fullname</label>
					  <input type="text" class="form-control" name="txtFname" id="inputFullname" placeholder="Fullname" required>
				  </div>
				  <div class="col-sm-6">
					  <label for="inputContactno">Contact number</label>
					  <input type="text" class="form-control" name="txtCno" id="inputContactno placeholder="Contact Number">
				  </div>
			  </div>
			  <div class="form-group row">
				  <div class="col-sm-6">
					  <label for="inputCompName">Company Name</label>
					  <input type="text" class="form-control" name="txtCname" id="inputCompName" placeholder="Company Name">
				  </div>
				  <div class="col-sm-6">
					  <label for="inputCompAdd">Company Address</label>
					  <input type="text" class="form-control"name="txtCAdd" id="inputCompAdd" placeholder="Company Address">
				  </div>
			  </div>
			  <div class="form-group row">
				  <div class="col-sm-6">
						<select name = "cmbFT" class= "form-control">						        		
							<option value = ""> --Fabric type--</option>
							<option value = "Crepe"> Crepe</option>
							<option value = "wool">Denim</option>
							<option value = "Dri-fit"> Leather</option>
							<option value = "Cotton"> Cotton</option>
			 			</select>
				  </div>
				  <div class="col-sm-6">
						<select name = "cmbCT" class= "form-control">						        		
							<option value = ""> --Cloth type--</option>
							<option value = "Tee"> Tee</option>
							<option value = "Hoodie">Hoodie</option>
							<option value = "Polo Shirt">Polo shirt</option>
							<option value = "Sleeves"> Sleeves</option>
							<option value = "Cap"> Cap</option>
			 			</select>
				  </div>
				  <div class="col-sm-6">
						<select name = "cmbSZ" class= "form-control">						        		
							<option value = ""> --Size--</option>
							<option value = "XS"> Extra Small</option>
							<option value = "S">Small</option>
							<option value = "M">Medium</option>
							<option value = "L"> Large</option>
							<option value = "XL"> Extra large</option>
							<option value = "XXL"> Double Extra Large</option>
			 			</select>
				  </div>
				  <div class="col-sm-6">
				  <input type="number" class="form-control" name="txtQ" id="inputQuantity" placeholder="--Quantity--" required>
				  </div>
				  <div class="col-sm-6">
						<select name = "cmbM" class= "form-control">						        		
							<option value = ""> --Machine--</option>
							<option value = "m1"> Machine 1</option>
							<option value = "m2">Machine 2</option>
							<option value = "m3">Machine 3</option>
							<option value = "m4"> Machine 4</option>
							<option value = "m5"> Machine 5</option>
			 			</select>
				  </div>
				  <div class="col-sm-6">
			  	<select name = "cmbPay" class= "form-control">						        		
				  <option value = ""> --Payment--</option>
				  <option value = "m1">Installment</option>
				  <option value = "m2">Full</option>
			   </select>

			  </div>

			  </div>
			  <button type="submit" name="btnCreate" class="btn btn-primary px-4 float-right" value = "submit">Save</button>
		  </form>
	  </div>
  </div>
</div>`,
focusConfirm: false,
        showCancelButton:false,
        showConfirmButton:false,
});
}

