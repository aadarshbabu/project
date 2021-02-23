<?php
  include "/header.php";
  include "/db.php";
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src=""></script> -->

</head>
<body>
<div class="btn">
    <a href="./insertdata.php"><button type="submit"> Insert New Record</button></a>   
</div>
 <?php

   if(isset($_GET['insert']))
  {
    ?>

    <div id="message">
        <p> Data insert successfully</p>
    </div>
    <?php
  }


?>
 
   <section id="table-data">    
       <table>
           <tr>
           <th> Id</th>
           <th> Name</th>
           <th> Email</th>
           <th> delete</th>
           <th> Update</th>
        </tr>
        <?php
        $noofrecord=5; 
       
             $crud->getdata($noofrecord);
             $noofpages=$crud->getpageno($noofrecord);

        ?>
        
       </table>
       <div class="btn recordbrn">
           <?php
           for($i=1; $i<$noofpages; $i++)
           {
            ?>
       <a href="/PDOCRUD/?pageno=<?php echo $i?>"><button class="page"> <?php echo $i; ?> </button> </a>
            <?php
        }
           ?>
       </div>
        
   </section>


</div>


<!-- 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->
</body>
</html>