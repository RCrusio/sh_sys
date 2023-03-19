<?php
    if(isset($_SESSION['success_message'])) :
?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong></strong> <?= $_SESSION['success_message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    unset($_SESSION['success_message']);
    endif;
?>




<?php
    if(isset($_SESSION['warning_message'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong></strong> <?= $_SESSION['warning_message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    unset($_SESSION['warning_message']);
    endif;
?>



<?php
    if(isset($_SESSION['danger_message'])) :
?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong></strong> <?= $_SESSION['danger_message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    unset($_SESSION['danger_message']);
    endif;
?>