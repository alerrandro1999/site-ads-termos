<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
		$(document).ready(function(){
			$(".modal_btn").click(function(){
				$(".modal_box").addClass("active");
			});

			$(".modal_close").click(function(){
				$(".modal_box").removeClass("active");
			});
		});
	</script>


<script src="js/app.js"></script>
</body>
</html>