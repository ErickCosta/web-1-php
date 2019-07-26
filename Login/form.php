<html>
	<head>
    	<meta charset="UTF-8">
    	<title>Hello</title>
    	<style type="text/css">
    	
	       input{
	           margin-left: 6%;
	           height: 30px;
	           width: 220px;
	           font-size: 20px;
	       }
	       
	       textarea {
	           margin-bottom: 30px;
           }
           
           body{
                background-image: url("imagens/back-top.jpg");
                background-size: cover;
           }
           
           #form {
               border: 1px solid;
               border-radius: 5%;
               margin-left: 40%;
               margin-top: 15%;
	           width: 250px;
	           height: 250px;
	           background-color: white;
           }
           
           #submit{ 
                margin-top: 15px;
                margin-left: 35%;
                width: 70px;
                height: 30;
                border: 1px solid;
                border-radius: 5px;
                font-size: 16px;
                background-color: #4682B4;
                color: white;
                border-color: black;
           }
           
           h3{
                font-size: 24px;
                margin-left: 6%;
                font-style: normal;
                font-family: sans-serif;
                margin-bottom: 10px;
           }
           	   
	     </style>
	</head>
    <body>
    
    	<div id="form">
        	<form action="script.php" method="post">
        		
        		<h3>Login</h3>
        		<input placeholder="Insira seu email" type="email" name="email"><br>
        		
        		<h3>Senha</h3>
        		<input placeholder="Insira sua senha" type="password" name="password"><br>
        		
        		<input id="submit" type="submit" value="Envie">
        	</form>
    	</div>
    </body>
    
</html>