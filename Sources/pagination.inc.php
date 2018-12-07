<!DOCTYPE html>

<html>
	<body>
		<script>
			function pageNavi(current){
				
				if(current < 1  || current > 4){
					document.getElementById("Left").disabled = true;
				}
				else{
					
				}
			}
		</script>
	</body>
	<style>
		.pagination button{
			position: absolute;
			cursor: pointer;
			color: #003865;
		    background-color: white;
		    text-align: left;
		    padding: 8px 16px;
		    border: 1px solid #ddd;
		    text-decoration: none;
			display: inline-block;
		    font-size: 20px;
		    line-height: 15px
		}

		.pagination button:hover:not(.active){
			background-color: #8DC8E8;
			color: white;
		}

		.pagination button.active{
			background-color: #003865;
			color: white;
		}

		.pagination:after{
			content: "";
			clear: both;
			display: table;
		}

		button:focus{
			outline: 0;
		}

		.disPagination{
			pointer-events: none;
			cursor: not-allowed;
			background-color: #EEEEEE !important;
		}
	</style>
</html>