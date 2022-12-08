<?php
    session_start();
    $sessionId = $_SESSION['id'] ?? '';
    $sessionRole = $_SESSION['role'] ?? '';
    if ( $sessionId && $sessionRole ) {
        header( "location:index.php" );
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>
 
    
    <title>Dashboard</title>
</head>

<body>

    <!--------------------------------- Main section -------------------------------->
    <section class="main">
        <div class="container">

            <div class="main__form">
                <div class="main__form--title text-center">Log In</div>
                <form action="login_core.php" method="GET">
                    <div class="form-row">
                        <div class="col col-12">
                            <label class="input">
                          
                                <input type="text" name="email" placeholder="Email" required>
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                             
                                <input id="pwdinput" type="password" name="password" placeholder="Password" required>
                                
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                               
                                <select name="role" id="Role">
                                    <option value="admins">Admin</option>
                                    <option value="managers">Manager</option>
                                    <option value="pharmacists">Pharmacist</option>
                                    <option value="salesmans">Salesman</option>
                                </select>
                            </label>
                        </div>
                            <input type="hidden" name="action" value="login">
                            <?php if ( isset( $_REQUEST['error'] ) ) {
                                    echo "<h5 class='text-center' style='color:white;'>Email, Password & Role Doesn't match Or Something is Wrong</h5>";
                            }?>
                        <div class="col col-12">
                        <input type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    
</body>

</html>
