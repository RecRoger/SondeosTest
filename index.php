<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Suma de Binarios</title>

</head>
<body>
	<h1>Suma de Binarios</h1>
	<label for="number1">Inserte el primer numero binario</label>
	<input type="text" name="number1" id="number1" class="binary" maxlength="16">
	= <span id="value1">0</span>
	<br>
	<label for="number2">Inserte el segundo numero binario</label>
	<input type="text" name="number2" id="number2" class="binary" maxlength="16">
	= <span id="value2">0</span>
	<br>
	<p>El resultado es <b><span id="result">0</span></b>  =  <span id="decimalR">0</span> </p>

	

	<!-- Script Section -->
	<script src="jquery-3.2.1.min.js"></script>

	<script>
		var binaryRegex = /^[01]+$/;

		$('.binary').on('input', function(){
			if (!binaryRegex.test($(this).val()) && $(this).val()!=''){
				alert('error: Solo caracteres binarios');
				var validInput = $(this).val().slice(0, -1);
				$(this).val(validInput);
			}else{
				var value = ($(this).val()=='')? 0: parseInt($(this).val(), 2);
				var id = $(this).attr('id').split('r')[1];
				$('#value'+id).html(value);

				$.ajax({
		            type: "POST",
		            url: "sumaBinaria.php",
		            data: {val1: $('#number1').val(),val2: $('#number2').val()},
		            timeout: 180000
		        })
		        .done(function(data) {
		        	console.log(data);
		        	$('#result').html(data);
		        	$('#decimalR').html(parseInt(data,2))
		        })
		        .fail(function(msg) {
		            alert("Fallo Conexion!!! \n"+msg);
		        });

			}
		})	
	</script>
</body>
</html>