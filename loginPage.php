<html>
    <head>
        <title>Login Pls</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
    </head>
    <body>
        <!-- <nav class = "navtop">
            <div>
                <h1>hi, dis where u login</h1>
            </div>
        </nav> -->

        <div class = "loginForm">  
            <h1>Login</h1>  
            <form name = "f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
                <p>  
                    <label> Roll No.: </label>  
                    <input type = "text" id = "roll_no" name  = "roll_no" />  
                </p>  
                <p>  
                    <label> Password: </label>  
                    <input type = "password" id = "password" name  = "password" />  
                </p>  
                <p>     
                    <input type = "submit" class = "sbmt" value = "Login" />  
                </p> 
                <p>
                    <a href = "createAccount.php"><input type = "button" id = "makeAcc" value = "Create Account" /></a>
                </p>
            </form>  
        </div>  

        <script>  
            function validation()  
            {  
                var id = document.f1.user.value;  
                var ps = document.f1.pass.value;  
                if(id.length == "" || ps.length == "") {  
                    alert("Pls fill all fields");  
                    return false;  
                }  
            }
        </script>  
    </body>     
</html>  
    