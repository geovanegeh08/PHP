<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- lib para mascara de preço -->
<script type="text/javascript" src="js/jquery.priceformat.min.js"></script>
<script type="text/javascript" src="js/jquery.mask.js"></script>

<script type="text/javascript">
	$('.price').priceFormat({
	    prefix: '',
	    centsSeparator: ',',
	    thousandsSeparator: '.'
	});
$('.cpf').mask('000.000.000-00', {reverse: true});
$('.phone_with_ddd').mask('(00) 00000-0000');
$('.matricula').mask('000.000-0', {reverse: true});

	/*setInterval(function(){ 
		var contador = $("#contador").text();
		var novo = parseInt(contador) + 1;
		$("#contador").text(novo);
	}, 1000);*/

	/*setTimeout(function() {
		var contador = $("#contador").text();
		var novo = parseInt(contador) + 1;
		$("#contador").text(novo);
	}, 3000);*/

	setTimeout(function() {
		$(".esconde").fadeOut(2500);
	}, 2500);
</script>
</body>
</html>