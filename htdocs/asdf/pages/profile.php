<?php
require_once('../scripts/connection.php');
include('../parts/header.php');
include('../scripts/profile_script.php');

?>
  
<main class="container">
    <h1 class="m-4 text-uppercase">Profil</h1>
   
   <?php foreach ($users as $user) : ?>

        <div class="row">
        <div class="col-4"><img src="../images/<?php echo $user["avatar"]?>" alt="<?php echo $user["username"]?>" style="width: 300px"></div>
        <div class="col-4 align-items-centre ">
        <div class="row ">
            <div class="col-3 list-group-item active">
            ID: 
            </div>
            <div class=" col ist-group-item">
            <span class=""> <?php echo $user["id"] ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-3 list-group-item active">
            Meno: 
            </div>
            <div class="col list-group-item">
            <?php echo $user["username"] ?></span>
            </div>
        </div>
        <div class="row ">
            <div class="col-3 list-group-item active">
            Priezvisko:
            </div>
            <div class="col list-group-item">
            <span class=""> <?php echo $user["surname"] ?></span>
            </div>
        </div>
        <div class="row ">
            <div class="col-3 list-group-item active">
            Email:
            </div>
            <div class="col list-group-item">
            <span class=""> <?php echo $user["email"] ?></span>
            </div>
        </div>
            
         </div>

        <?php endforeach ?>


        <div class="position-relative ">
            <button a href="../pages/password_change.php" type="button" class="position-absolute top-50 end-50 btn btn-outline-dark">Zmenit heslo</button>
        
        </div>
</main>


<?php include('../parts/footer.php'); ?>