<?php 
        require_once "../../backend/admin/conn/db.php";
       $result= $postdata->fetchpost($_GET['slug']);
        require_once "../blogfrontent/assist/header.php";
        ?>


            <?php echo $result['post'];
            
            include "../blogfrontent/assist/footer.php";
            
            
            ?>  
      
