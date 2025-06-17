<!DOCTYPE html>
<html>
    <head>
        <title>Login Page </title>
        
    <link rel="stylesheet" href="login.css">
    </head>
    <body>

    <nav class="navbar">
		<a  class="navbar-logo">Wiki<span>Dish</span>.</a>

	</nav>	

        <br><br>
        <h3 align="center"> Create New Account</h3>
        
        <form action="action.php"  method="POST" name="form_input">
          
             

            <table style=""  id="formlogin" align="center">
                <tr><td>NAME :</td></tr>
                    
                   <tr> <td><input type="text" name="NAME" id="NAME"></td></tr>

                <tr><td>EMAIL :</td></tr>
                    
                    <tr><td><input type="text" name="EMAIL" id="EMAIL"></td></tr>
                
                <tr><td>PASSWORD : </td></tr>
                    
                   <tr> <td><input type="text" name="PASSWORD" id="PASSWORD"></td></tr>
              
          
                <tr><td>DATE OF BIRTH :</td> </tr>
                    
                    <tr><td><input type="date" name="DATE" id="DATE"></td></tr> <br>
               
                
                <tr>
                    <td ><button type="submit"  id="simpan" name="simpan" value="simpan">SIGN UP</button></td>
                </tr>
                
            </table>
            <script>
                function viewInput(){
                    var status = document.getElementById("formInput").style.display;
                            if (!status) {
                                document.getElementById("formInput").style.display = "none";
                            } else if (status == 'block') {
                                document.getElementById("formInput").style.display = "none";
                            } else {
                                document.getElementById("formInput").style.display = "";
                            }
                }
            </script>
        </form>
    </body>
</html>

          
