<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bon Hotel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&family=Ubuntu:wght@300;500;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-flex">
                <img src="./logo.svg" alt="logo">
                <a href="#first-section" class="nav-link"> Our Hotel</a>
                <a href="#second-section" class="nav-link">Rooms & Rates</a>
                <a href="#third-section" class="nav-link">Facilities</a>
                <a href="newspage.html" class="nav-link">Contact Us</a>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="first-section">
            <div class="first-section-content ">
                <h1 class="main-title">WELCOME TO BON HOTEL</h1>
                <p class="description">Good People. Good Thinking. Good Feeling</p>
                <a href="#" class="button">
                    EXPLORE
                </a>
            </div>

        </section>
        <section class="second-section">
            <div class="container">
                <h2 class="secondary-title">
                    Rooms & Rates
                </h2>
                <div class="rooms-gallery">
                    <div class="rooms-card">
                        <img src="./img1.svg" alt="img1">
                        <div class="overlay"></div>
                        <div class="cards-content">
                            <h3 class="card-title">Standard Twin Room</h3>
                            <a href="#" class="button button-small">
                                Check Rates
                            </a>
                        </div>
                    </div>


                    <div class="rooms-card">
                        <img src="./img2.svg" alt="img1">
                        <div class="overlay"> </div>
                        <div class="cards-content">
                            <h3 class="card-title">Standard Room</h3>
                            <a href="#" class="button button-small">
                                Check Rates
                            </a>
                        </div>
                    </div>


                    <div class="rooms-card">
                        <img src="./img3.svg" alt="img1">
                        <div class="overlay"></div>
                        <div class="cards-content">
                            <h3 class="card-title">Standard View Room</h3>
                            <a href="#" class="button button-small">
                                Check Rates
                            </a>
                        </div>
                    </div>


                    <div class="rooms-card">
                        <img src="./img4.png" alt="img1">
                        <div class="overlay"></div>
                        <div class="cards-content">
                            <h3 class="card-title">Deluxe Room</h3>
                            <a href="#" class="button button-small">
                                Check Rates
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="third-section">
            <div class="container">
                <div class="contact-us">
                    <h2 class="secondary-title">
                        Get a room already!
                    </h2>
                    <a href="#" class="button">
                        Book Now
                    </a>
                    <form action="./contact.php"
                        method="POST">
                        <label for="fname">Name:</label><br>
                        <input type="text" id="fname" name="fname"><br>
                        <label for="password">Password:</label><br/>
                        <input type="password" id="password" name="password"><br/>
                        <label for="password_confirmation">Password confirmation:</label><br>
                        <input type="password" id="cpassword" name="cpassword"><br/>
                        <input type="submit" value="submit">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="footer-content">
                <img src="./footer logo.svg" alt="footer logo">
                <nav class="footer-navigation">
                    <a href="#" class="footer-nav-links">
                        Our Hotels
                    </a>
                    <a href="#" class="footer-nav-links">
                        Our Conferencing
                    </a>
                    <a href="#" class="footer-nav-links">
                        Our Company
                    </a>
                    <a href="#" class="footer-nav-links">
                        Hotel Design
                    </a>
                    <a href="#" class="footer-nav-links">
                        Careers
                    </a>
                </nav>
                <div class="footer-text">
                    <p>Bon Hotels Head Office</p>
                    <a href="tell:+27 434 344 432">+27 434 344 432</a>
                    <a href="mailto:info@bonhotels.com">info@bonhotels.com</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>