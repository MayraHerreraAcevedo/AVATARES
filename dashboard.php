<?php
session_start();
require_once ('db.php');
$checkEmailQuery = $conn->prepare("select * from tbl_registration where id = ?");
$checkEmailQuery->bind_param("i", $_SESSION['userId']);
$checkEmailQuery->execute();
$result = $checkEmailQuery->get_result();
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="login-registration.js"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
            $(function () {
                $("#logout-div").button().on("click", function () {
                    ajaxLogout();
                });
            });
        </script>


<style>
.image-source {
    border-radius: 50%;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>

    <body>
<div role="navigation" class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="https://www.baulphp.com" class="navbar-brand">BAULPHP</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="https://www.baulphp.com">Portada</a></li>
           
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
    <h2>Bienvenido al Panel de Control</h2>

    <div class="dashboard">

        <div style="height: 10px"></div>
        <div>

            <img src="<?php echo $row['avatar_path']; ?>"
                class="image-source"> <b>
                        <?php
                        echo " <br/> " . " <br/> " . " " . " " . $row['first_name'] . "  " . $row['last_name'];
                        ?>
                    </b>
                    <?php
                    echo " " . " " . " <br/> " . $row['email_id'];
                    ?>

                </div>
        <div style="height: 10px"></div>
        <div>
            <input type="button" class="btn btn-danger" value="Cerrar Sesión" id="logout-div">
        </div>
    </div>
 </div>   
</body>
</html>