<?php
    if(isset($_SESSION['message'])):
?>
    
<div class="alert alert-warning alert-dismissible fade show" role="alert" >
        <strong>Heyyyy!!</strong> <?php $_SESSION['message']; ?>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    <?php
        unset($_SESSION['message']);
        endif;
    ?>