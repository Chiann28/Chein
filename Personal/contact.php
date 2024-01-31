<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>_contact</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <div class="contact-content">
        <div class="auto-type">
            <span class="fixed-text">{"</span>
            <span class="typing"></span>
            <span class="fixed-text">"}</span>
        </div>
        <div class="second-text-services">
            <p>Let's connect and explore how we can work together to achieve great things!</p>
        </div>
        <div class="contact">
        <div class="contact-text">
            <input type="text" name="name" placeholder="_name" class="input-name"> 
            <input type="email" name="email" placeholder="_email" class="input-email">
            <input type="textarea" name="message" placeholder="_message" class="input-message">
        </div>
        <div class="submit">
        <button class="button">{send}</button>
        </div>

        <div class="grid-contact">
            <div class="contact-items1">
                    <span class="logo-about">{PHONE}</span>
                    <div class="text-contact">
                        <p>09662686777</p>
                    </div>
            </div>
                
            <div class="contact-items2">
                    <span class="logo-about">{EMAIL}</span>
                    <div class="text-contact">
                        <p>parascheinian@gmail.com</p>
                    </div>
            </div>
            <div class="contact-items3">
                <span class="logo-about">{ADDRESS}</span>
                
                <div class="text-contact">
                    <p>Batangas City, Batangas</p>
                </div>
            </div>
        </div>
        <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1331.1495769730527!2d121.12156987400193!3d13.755688709536466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1706502633235!5m2!1sen!2sph" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="iframe"></iframe>
        </div>

        <?php
            include 'footer.php';
        ?>
    </div>
    </div>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed(".typing",{
            strings : ["_contact"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: false
        })
    </script>
</body>
</html>