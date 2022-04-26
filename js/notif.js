function swalSuccess(){
	Swal.fire({
	icon: 'success',
	title: 'Submitted',
  }).then(function()
  {
   location.href='service.php';
  }) 
  }