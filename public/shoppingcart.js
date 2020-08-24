$(document).ready( function(){

	$('.addtocartBtn').on('click', function(){
		var id = $(this).data('id');
		var name = $(this).data('name');
		var codeno = $(this).data('codeno');
		var photo = $(this).data('photo');
		var unitprice = $(this).data('unitprice');
		var discount = $(this).data('discount');
		var qty = 1;

		var mylist = {id:id, codeno:codeno , name:name, photo:photo, unitprice:unitprice, discount:discount, qty:qty};

		console.log(mylist);

	});
});