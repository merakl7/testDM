<!--   форма обратной связи -->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title >Форма обратной связи</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href = "how.php">Главная страница</a>
		<a class="navbar-brand"  href="news.php">Новости <span class="sr-only">(current)</span></a>
		<a class="navbar-brand" href="index.php">Поддержка</a>
<form class="form-inline my-2 my-lg-0">
    
      
    </form>

<style>
		body {
			background: #FFF5EE;
			color: #000000;
		}
	</style>


	

	<style>

   .center {
   	 top: 800%;
  left: 50%; 
  width: 450px; 
  height: 6500px; 
  position: absolute; 
  margin-top: -225px; 
  margin-left: -225px;
  background: #FFF5EE;
  color: #000000;
</style>
	<style>
  .submit {
	width: 120px;
	height: 32px;
	padding: 0 0 2px;
	font: 16px "Trebuchet MS", Tahoma, Arial, sans-serif;
	outline: none;
	position: relative;
	cursor: pointer;
	border-radius: 3px;
	color: #555;
	border: 1px solid #BBB;
	border-top: 1px solid #D0D0D0;
	border-bottom: 1px solid #A5A5A5;
	text-shadow: 1px 1px #FAFAFA;
	box-shadow:
		inset 0 1px #F5F5F5,
		inset 1px 0 #EDEDED,
		inset -1px 0 #EDEDED,
		inset 0 -1px #E7E7E7,
		0 2px #B2B1B1,
		0 3px #A5A5A5,
		0 4px 2px rgba(0,0,0,0.4)
	;
	background: -moz-linear-gradient(top,  #eeeeee 0%, #e2e2e2 100%); 
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#eeeeee), color-stop(100%,#e2e2e2)); 
	background: -webkit-linear-gradient(top,  #eeeeee 0%,#e2e2e2 100%); 
	background: -o-linear-gradient(top,  #eeeeee 0%,#e2e2e2 100%); 
	background: -ms-linear-gradient(top,  #eeeeee 0%,#e2e2e2 100%); 
	background: linear-gradient(top,  #eeeeee 0%,#e2e2e2 100%); 
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#e2e2e2',GradientType=0 ); 
	background-color: #E8E8E8;
}
.submit::-moz-focus-inner{border:0}
.submit:hover {
	border-top: 1px solid #C2C2C2;
	box-shadow:
		inset 0 1px #EFEFEF,
		inset 1px 0 #EDEDED,
		inset -1px 0 #EDEDED,
		inset 0 -1px #EDEDED,
		0 2px #B2B1B1,
		0 3px #A5A5A5,
		0 4px 2px rgba(0,0,0,0.4)
	;
	background: -moz-linear-gradient(top,  #e4e4e4 0%, #e9e9e9 100%); 
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e4e4e4), color-stop(100%,#e9e9e9)); 
	background: -webkit-linear-gradient(top,  #e4e4e4 0%,#e9e9e9 100%); 
	background: -o-linear-gradient(top,  #e4e4e4 0%,#e9e9e9 100%); 
	background: -ms-linear-gradient(top,  #e4e4e4 0%,#e9e9e9 100%); 
	background: linear-gradient(top,  #e4e4e4 0%,#e9e9e9 100%); 
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e4e4e4', endColorstr='#e9e9e9',GradientType=0 );
	background-color: #E8E8E8;
}
.submit:active {
	top: 3px;
	border: 1px solid #B9B9B9;
	border-top: 1px solid #959595;
	border-bottom: 1px solid #CACACA;
	background: #E3E3E3;
	box-shadow: inset 0 1px 2px #B9B9B9;
}
}
  </style>
   <div class="center" >
	<h1  align= "center"> Cвяжитесь с нами</h1>

<form action="send.php " method="POST" >  	
	<h2 align= "center" >
	<input type="text" name="login" placeholder="Введите ФИО" required ><br><br>
	<input type="text" name="pass" placeholder="Введите адрес" required ><br><br>
	<input type="email" name="email" placeholder="Введите емейл" required ><br><br>
	<input type="tel" name="tel" placeholder="Введите телефон"required ><br><br>



	<button name=".submit" type="submit" class="submit">Отправить</button>

	</span>
	</h2>

</form>
</body>
</html>