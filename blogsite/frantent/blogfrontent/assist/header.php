<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $result['title']; ?></title>
    <!-- <link rel="stylesheet" href="singlepage.css"> -->
  <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a39101c90e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/blogsite/frantent/blogfrontent/assist/style.css">
    <link rel="stylesheet" href="http://localhost/blogsite/assist/headercss.css">
</head>

<body id="post-body">

    <?php
    include "../../assist/header.php"
    
    ?>

    <div class="content">
      
        <div class="post">
                
            <div class="title">
                <h2><?php echo $result['title']; ?> </h2>
            </div>
            <div style="padding-bottom:30px;" class="metadata">
           <label style="font-size: medium; color:green; padding-right: 10px; " for="">Publish At -  <?php echo $result['pdate']; ?> </label> 
           <label style="font-size:medium;" for=""> Author - <?php echo $result['writer']; ?> </label>
            </div>