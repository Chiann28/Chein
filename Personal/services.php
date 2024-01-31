<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>_services</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>

<div class="services-content">
        <div class="auto-type">
            <span class="fixed-text">{"</span>
            <span class="typing"></span>
            <span class="fixed-text">"}</span>
        </div>
        <div class="second-text-services">
            <p> Explore the range of services I offer, tailored to meet your needs and exceed expectations. 
                With a commitment to excellence and a passion for innovation, I aim to deliver solutions that make a significant impact. 
                Discover how we can collaborate to achieve your goals.
            </p>
        </div>

        <div class="grid-services">
        <div class="services-items1">
                <span class="logo-about">{01}</span>
                    <div class="services-type1">
                        <span class="fixed-text-services">< </span>
                        <span class="typingservices1"></span>
                        <span class="fixed-text-services"> ></span>
                    </div>
        </div>
            
        <div class="services-items2">
                <div class="p-about">
                    <p>As a web designer, I specialize in crafting visually stunning and user-friendly websites. 
                        My focus is on creating unique designs that resonate with your brand identity and leave a lasting impression on visitors.
                    </p>
                </div>
        </div>
        <div class="services-items3">
            <span class="logo-about">{02}</span>

                    <div class="services-type1">
                        <span class="fixed-text-services"><</span>
                        <span class="typingservices2"></span>
                        <span class="fixed-text-services"> ></span>
                    </div>
        </div>
        <div class="services-items4">
            <div class="p-about">
                <p>As a front-end developer, I bring designs to life with code. My expertise lies in building responsive and interactive user interfaces. 
                    I am dedicated to delivering seamless and engaging web experiences through the latest front-end technologies.
                </p>
            </div>
        </div>

        <div class="services-items5">
            <span class="logo-about">{03}</span>

                    <div class="services-type1">
                        <span class="fixed-text-services"><</span>
                        <span class="typingservices3"></span>
                        <span class="fixed-text-services"> ></span>
                    </div>
        </div>
        <div class="services-items6">
            <div class="p-about">
                <p>Specializing in mobile app development, I create innovative and user-centric applications for various platforms. 
                    From concept to deployment, I focus on delivering apps that provide a smooth and delightful user experience.
                </p>
            </div>
        </div>
        <div class="services-items7">
            <span class="logo-about">{04}</span>

                    <div class="services-type1">
                        <span class="fixed-text-services"><</span>
                        <span class="typingservices4"></span>
                        <span class="fixed-text-services"> ></span>
                    </div>
        </div>
        <div class="services-items8">
            <div class="p-about">
                <p>In the realm of game development, I immerse myself in creating captivating and immersive gaming experiences. 
                    From concept design to coding, I am passionate about bringing unique and entertaining games to life for diverse audiences.
                </p>
            </div>
        </div>
    </div>

    <div class="contact">
    <div class="contact-text">
        <p class="logo-footer">
            {*}
        </p>
        <p class="about-text"> < contact_me > </p>
        <p class="yellow">Let's connect and explore how we can work together to achieve great things!</p>

        <input type="text" name="name" placeholder="_name" class="input-name"> 
        <input type="email" name="email" placeholder="_email" class="input-email">
        <input type="textarea" name="message" placeholder="_message" class="input-message">
    </div>
    <div class="submit">
    <button class="button">{send}</button>
    </div>
    </div>
</div>
<?php
    include 'footer.php';
?>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed(".typing",{
            strings : ["_services"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: false
        })

        var typed1 = new Typed(".typingservices1",{
            strings : ["_web designer"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: false
        })

        var typed2 = new Typed(".typingservices2",{
            strings : ["_front end developer"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: false
        })

        var typed3 = new Typed(".typingservices3",{
            strings : ["_mobile apps"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: false
        })

        var typed3 = new Typed(".typingservices4",{
            strings : ["_game development"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: false
        })
        
        
    </script>
</body>
</html>