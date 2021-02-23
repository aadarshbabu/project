<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artical</title>
    <link rel="stylesheet" href="style.css">
    <script src="ckeditor/ckeditor.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/inline/ckeditor.js"></script> -->
    <!-- <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script> -->
</head>
<body>
     <?php
     include "../../assist/admin-header.php";
     include "sidebar.php";
      ?>
    
             <div class="mainsection">
                
                <form action="" method="post">
                   <h4>Title</h4>
                    <input type="text" placeholder="Title" required>
                  <h4>Slug</h4>
                    <input type="text" placeholder="Slug">
                    <h4>Body</h4>
                    <div id="editor">
                        <textarea name="editor1" id="" cols="30" rows="20" required > </textarea>
                    </div>
                    <div class="category">
                        <select name="category" id="">
                        <option value="blog">Blog </option>
                        <option value="blog">aritcal </option>
                        <option value="blog">Blog </option>
                    </select>
                    </div>
                   <div class="btn">
                    <input type="submit" id="submit-btn" value="Submit">
                   </div>


                </form>

             </div>
                
    
    
        </div>
    
    

        <script>
/// ClassicEditor
//     .create( document.querySelector( '#editor' ) )
//     .then( editor => {
//         console.log( editor );
//     } )
//     .catch( error => {
//         console.error( error );
//     } ); -->


    // InlineEditor
    //     .create( document.querySelector( '#editor' ) )
    //     .catch( error => {
    //         console.error( error );
    //     } );


 CKEDITOR.replace( 'editor1' );

</script>

</body>
</html>