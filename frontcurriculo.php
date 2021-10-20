<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="UTF-8">
		<title>Pagina Ajax Jquery</title>

		<style type="text/css">
		
			header{
				width: 98.6%;
				height: 20px;
				background-color:#E6E6FA;
				float: left;
				/*margin-left:20px;*/
				padding: 20px 10px;
				display: inline-bolck;
				text-align: center;
				font-family:helvetica;
				font-size: 15px;
			}
			
			#area-menu a{
				text-decoration: none;
				color: #4F4F4F;
				
			
			}
				
			#area-menu a:hover{
				color: #DAA520;
				
			}
			
		
			#meio01{
				width: 28%;
				height: 400px;
				float: left;
				margin-top:60px;
				margin-left: 485.5px;
				border: 1px solid #363636;
				border-color: 	#808080;
				background-color: #A9A9A9;
				position:absulte;
				border-radius: 15px;
				
			}
			#principal02{
				width:100%;
				height: 500px;
				float: left;
				background:"fundo-jogo.jpg";
				position:absulte;
				margin-top:auto;
				
			}
			
           
			#login{
				margin-top: 70px;
				margin-left: 159px;

			}
			#login0{
				width: 230px;
    			height: 220px;
				margin-top: 65px;
				margin-left: 13px;
				/*color: #363636;*/
				font-family:helvetica;
				font-size: 13px;
			}
			footer{
				width: 98.5%;
				height: 20px;
				float: left;
				/*margin-left: 20px;*/
				background-color:#4F4F4F;
				padding: 20px 10px;
				text-align: center;
				font-family:helvetica;
				font-size: 15px;
					
			}
		</style>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
				$(document).ready(function(){
					$("#header").load("headerContent.php"   );
					$("#meio01" ).load("meio01Content.php");
					$("#principal02" ).load("sprincipal02Content.php");
					
				});
		</script>
	</head>
<body background="fundo-jogo.jpg">
    
	<header id="header"></header>

	<section id="meio01">
	<section id="principal02"></section>
	</section>
	

</body>
</html>