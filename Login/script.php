<html>
	<head>
    	<meta charset="UTF-8">
    	<title>Hello</title>
    	<style type="text/css">
	       
	       html{
    	       height: 100%;
    	       width: 100%;
    	   }
    	   
    	   body{
    	       height: 100%;
    	       width: 100%;
    	       background-color: #87CEEB;
    	       margin: 0px;	
    	   }
           
           #erro{
                margin-top: 20%;
                margin-left: 40%;
           }
           
           #submit{
                margin-left: 49%;
                width: 70px;
                height: 30;
                border: 1px solid;
                border-radius: 5px;
                font-size: 16px;
           }
           
           #topo{
                background-image: url("imagens/back-top.jpg");
                height: 10%;
                width: 100%;
           }
           
           #topo h1{
                padding-top: 15px;
                padding-left: 20px;
                font-size: 28px;
                color: white;
           }
           
           #menu{
                background-image: url("imagens/back-top.jpg");
                height: 90%;
                width: 10%;
           }
	    </style>
	</head>
    <body>		
       <?php 
	       $emails = array("joao@gmail.com",
	                   "maria@gmail.com",
	                   "jose@gmail.com");
	   
	       $passwords = array("joao123",
	       "maria123",
	       "jose123");
	       
	       $email = "";
	       $password = "";
	       
	       if(isset($_POST["email"]) && isset($_POST["password"])){
	           $email = $_POST["email"];
	           $password = $_POST["password"];
	       }
	       
	       for($i = 0; $i < count($emails); $i++){
	           if($email == $emails[$i] && $password == $passwords[$i]){
	                   echo "
                            
                            <div id='topo'>
                                
                                <h1>Seja bem vindo, $email</h1>

                            </div>
                            
                            <div id='menu'>
                                

                            </div>

                            ";
	                   break;
	           }
	           
	           if($i == count($emails)-1){
	               echo "
                    <form action='form.php'>
                        <h1 id='erro'>Erro ao realizar o login!</h1>
                        <input id='submit' type='submit' value='Voltar'>
                    </form>
                    ";
	               break;
	           }
	       }
	   ?> 	  	
    </body>
</html>