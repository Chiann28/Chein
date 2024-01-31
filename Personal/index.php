<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Website</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
</head>
<body>
<div class="container">
        <?php 
        include 'header.php';
        ?>

        <div class="main-content">
                <p class="hi">// HI, I AM CHEIN, A...</p>
                

                <div class="auto-type">
                    <span class="fixed-text">{"</span>
                    <span class="typing"></span>
                    <span class="fixed-text">"}</span>
                </div>
        </div>
</div>

<div class="picture">
    <img src="assets/Images/profile-image.jpeg" alt="MyImage" class="img-me" width="1000px" height="700px">
</div>

<div class="about">
    <span class="logo-code">
    {/}
    </span>
    <p class="about-text"> < about_me > </p>
    <span class="about-bottom">
    Hello there! I'm passionate about exploring new ideas and turning them into reality. <br> With a background in Information Technology,<br>
    I thrive on challenges and enjoy finding innovative solutions. <br> Let's connect and explore how my education and enthusiasm can contribute to your team!
</about_me>
    </span>
</div>
<div class="grid-container">
    <div class="grid-item1">
        <p>I studied at STI College Batangas with the degree of BSIT.
            I have some basic knowledge in front end and back end development</p>
    </div>
    <div class="grid-item2">My educational journey has equipped me with a solid foundation in IT, and I'm excited to dive into the world of technology.
    I have a knack for both front-end and back-end development, with hands-on experience in turning ideas into interactive and functional websites.</div>
</div>
<div class="read-more">
    <button class="button"><a href="about.php">{read more}</a></button>
</div>

<div class="contact">
    <div class="contact-text">
        <p class="logo-footer">
            {*}
        </p>
        <p class="about-text"> < contact_me > </p>
        <p class="yellow">Let's connect and explore how we can work together to achieve great things!</p>
        <form action="send.php" method="post">               
        <input type="text" name="name" placeholder="_name" class="input-name"> 
        <input type="email" name="email" placeholder="_email" class="input-email">
        <input type="textarea" name="message" placeholder="_message" class="input-message">
        <div class="submit">
            <button class="button" type="submit" name="send">{send}</button>
        </div>
        </form>
    </div>
    
</div>

<?php 
include 'footer.php';
?>




    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed(".typing",{
            strings : ["_front end developer", "_back end developer", "_web designer"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true
        })
        
        
    </script>
</body>
</html>
