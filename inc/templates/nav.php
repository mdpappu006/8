
<div style="float:inline-end">

    <div class="float-left">
    <p>
       <a href="index.php?task=report">All Students</a> |
       <a href="index.php?task=add">Add New Students</a> |
       <a href="index.php?task=seed">Seed</a>
    </p>
    </div>

    <div class="float-right">

     <?php
if (isset($_SESSION['loggedin']) == true):
?>

     <a href="auth.php?logout=true">Log Out (
            <?php  if(isset($_SESSION['role'])){
                echo $_SESSION['role'];
            }
         ?>) </a>


     <?php
else:
?>
         <a href="auth.php">Log In</a>

    <?php
endif;
?>

    </div>
    <p></p>
</div>