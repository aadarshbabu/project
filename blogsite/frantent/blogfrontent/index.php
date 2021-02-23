<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeVsProgram</title>
 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="singalpage.css">
    <script src="../../assist/header.js"></script>
    <link rel="stylesheet" href="../../assist/headercss.css">
    <script src="https://kit.fontawesome.com/a39101c90e.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
include "../../assist/header.php";
?>
 
    <section id="containar">
        <div class="containar">
            <div class="headingtext">
                <h1>CodeVsProgram</h1>
                <br>
                <p class="small">Learn Coding Free Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto
                    nobis molestiae ab? </p>

            </div>


        </div>

    </section>

    <section id="feature">
        <div class="cource-txt">
            <h2>We Provide Lot of Cources For better Learning</h2>
            <p>We Provide Lot of Cources For better Learning</p>

        </div>
        <div class="containar-cource">
            <div class="feature-row">
                <div class="feature-col">
                    <img src="../../assist/images/c.png" alt=" c language">
                    <h4>C language</h4>
                    <p>Learn C language is very easy way You learn c langauag east </p>
                    <button class="common-btn">Learn Now</button>
                </div>
                <div class="feature-col">
                    <img src="../../assist/images/cpp.jpg" alt="">
                    <h4>C Plus Plus</h4>
                    <p>Learn c plus plus language is very easy way Lorem, lorem ipsum dolor. </p>
                    <button class="common-btn">Learn Now</button>
                </div>
                <div class="feature-col">
                    <img src="../../assist/images/java.jpg" alt="">
                    <h4>Java</h4>
                    <p>Learn java language Lorem ipsum dolor sit amet consectetur.is very easy way </p>
                    <button class="common-btn">Learn Now</button>
                </div>

            </div>
        </div>
    </section>
    <!-- About section  -->


    <section id="about">

        <div class="about-info">
            <h1>About Us</h1>
            <p>This is all about us</p>
        </div>

        <div class="container-about">
            <div class="about-row">

                <div class="about-left-col">
                    <h2>About info</h2>
                    <br>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum nostrum voluptatibus
                        pariatur aliquam corrupti iusto, placeat odit veritatis maxime illum? Alias nobis nesciunt
                        beatae expedita quos laudantium fuga, iste consectetur, a ullam laboriosam pariatur similique
                        quaerat error odit, quasi quo aperiam sapiente ipsum unde!</p>

                </div>

                <div class="about-right-col">
                    <img src="../../assist/images/admin.png" alt="About Info">
                </div>

            </div>

        </div>
    </section>


    <section id="contect">

        <div class="contect-txt">
            <h2>Contect Me For Any Query</h2>
        </div>

        <div class="container-form">
            <form action="" method="post">
                <div class="form-head">
                    <h4>Your Name (* Required)</h4>
                    <input type="text" placeholder="Enter The name" required>
                    <h4>Your Email (* Required)</h4>
                    <input type="email" placeholder="Enter The email" required>
                    <h4>Your Subject (* Required)</h4>
                    <input type="text" placeholder="Subject" required>
                    <h4>Your massage (* Required)</h4>
                    <textarea placeholder="Enter Your Subject" name="massage" id="text-area" cols="2" rows="3"></textarea>
                    <div class="form-btn">
                        <button class="submit-btn" type="submit"> Submit</button>
                        <button class="submit-btn" type="reset"> Reset</button>
                    </div>
                </div>
            </form>
        </div>


    </section>


 <?php
include "../../assist/footer.php"
?>


</body>

</html>