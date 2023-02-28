<?php
    session_start();
    include "header.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="signup-page">
                
                <form action="signup1.php" method="post">
                    <table class="table table-responsive">
                        <tr>
                            <th>Sign up</th>
                        </tr>
                        <?php
                            if(isset($_GET['error'])){ 
                        ?>
                        <p class="error" style="color:red;"> *<?php echo $_GET['error']; ?> </p>
                        <?php } ?>
                        <tr>
                            <td>
                                <label for="email">Email</label> 
                                <span>Already have an account? <a href="index.php">Log in</a></span>
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
                            </td>
                        </tr>
                        <td>
                            <input type="text" id="password" name="password" require>
                        </td>
                        <tr>
                            <td>
                                <label for="password-r">Re-enter Password</label>  
                            </td>
                        </tr>
                        <td>
                            <input type="password" id="password-r" name="password-r" require>
                        </td>
                    </table>
                    <button class="btn btn-primary" name="ok">Sign up</button>
                    
                </form>

            </div>
        </div>
    </div>
</div>