<?php
    include "header.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="login-page">
                
                <form action="login.php" method="post">
                    <table class="table table-responsive">
                        <tr>
                            <th>Log in</th>
                        </tr>
                        <?php
                            if(isset($_GET['error'])){ 
                        ?>
                        <p class="error" style="color:red;"> *<?php echo $_GET['error']; ?> </p>
                        <?php } ?>
                        <tr>
                            <td>
                                <label for="email">Email</label> 
                                <span>Need an account? <a href="signup.php">Sign up</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="email" id="email" name="email" require>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Password</label> 
                                <span><i id="icon" class="fas fa-eye"></i> <span id="show" onclick="showPassword()">&nbsp;Show</span></span>
                            </td>
                        </tr>
                        <td>
                            <input type="password" id="password" name="password" require>
                        </td>
                    </table>
                    <button class="btn btn-primary" name="ok">Log in</button>
                    <p><a href="#">Forgot Password?</a></p>
                </form>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function showPassword(){
        if(document.getElementById('password').type == "password"){
            document.getElementById('password').type = "text";
            document.getElementById('show').innerHTML = " Hide";
            document.getElementById('icon').className = "fas fa-eye-slash";
        }
        else if(document.getElementById('password').type == "text"){
            document.getElementById('password').type = "password";
            document.getElementById('show').innerHTML = " Show";
            document.getElementById('icon').className = "fas fa-eye";
        }
    }
</script>