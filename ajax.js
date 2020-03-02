<script type="text/javascript">
$(document).ready(function(){

	$('#submit').click(function(e){
		e.preventDefault();

		$.ajax({

			method:"post",
			url:"../function.php",
			data:$('#jami').serialize(),
			dataType:"text",
			success:function(response){
				$('#messagedisplay').text(response);
			}
		})
		
	})

});

</script>