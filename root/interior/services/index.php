<?php include('../../js/contact.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bite Sized Building Company - Bite Sized Homes. Full Course Living.</title>
    <link href="../../css/reset.css" rel="stylesheet" type="text/css" />
    <link href="../../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../../css/fonts/webfontkit.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/843ca2f650.js" crossorigin="anonymous"></script>
</head>



<body>
    <header>
        <a href="https://www.opendoor.com/w/blog/introducing-opendoor-home-loans" target="_blank"><h6>Financing your home is now easier than ever! <i class="fas fa-child"></i> <span>Learn more over at Opendoor.</span></h6></a>
        <div class="flex">
            <div class="header-wrapper">
                <a href="../../index.html"><h1>Bite Sized Building Company - Tiny Home Construction</h1></a>
            </div>
            <div class="tablet-nav">
                <h4>Have Questions?</h4>
                <h5>Open 9am - 5pm PST</h5>
                <a class="phone" href="tel:6195551234">(619) 555-1234</a>
            </div>
        </div>
        <h2>Bite Sized Homes. Full Course Living. <i class="far fa-heart"></i></h2>

        <nav class="mobile-nav">
            <i class="fas fa-bars closed"></i>
            <ul>
                <a href="../builds/index.html"><li>Builds</li></a>
                <a href="index.php" class= "current"><li>Services</li></a>
                <a href="../team/index.html"><li>Team</li></a>
                <a href="../../index.html#story"><li>Story</li></a>
                <a href="../contact/index.php"><li>Contact</li></a>
                <li><h4>Have Questions?</h4></li>
                <li><h5>Open 9am - 5pm PST</h5></li>
                <li><a class="phone" href="tel:6195551234">(619) 555-1234</a></li>
            </ul>
        </nav>
        <nav class="tablet-nav">
            <ul>
                <a href="../builds/index.html"><li>Builds</li></a>
                <a href="index.php" class= "current"><li>Services</li></a>
                <a href="../team/index.html"><li>Team</li></a>
                <a href="../../index.html#story"><li>Story</li></a>
                <a href="../contact/index.php"><li>Contact</li></a>
            </ul>
        </nav>
        <section class="bhero">
            
        </section>
    </header>

    <main>
        <hr id="design">
        <h2>Design Services</h2>
        <hr>
        <section class="design testimonials">
            <article class="section-b">
                <img src="../../img/design.webp" alt="" title="">
                <div>
                    <h4>Have something in mind?</h4>
                    <p>Handmade or computer made blueprints. Easy to build, sustainable and ecological and well thought project design customized for you! Tiny House designs are easy, very flexible and can sustain your life necessities without inconveniences. Custom interior design on each project. Feel free to inquire on your design, and we can advise you for completely free.</p>
                    <ul>
                        <li>Contact us to start your order and we’ll give you a timeline, availability and cost of your project.</li>
                        <li>Project times and costs may vary depending on the size or complexity.</li>
                        <li>Blueprints include all needed materials listed. Materials are not included.</li>
                    </ul>
                </div>
            </article>
        </section>


        <hr id="builders">
        <h2>Building Services</h2>
        <hr>
        <section class="design testimonials">
            <article class="section-b">
                <img src="../../img/builds.webp" alt="" title="">
                <div>
                    <h4>We'll build it for you!</h4>
                    <p>Our Rustic, Bare and Kipper tiny homes can come pre-built! Let us put together your home and have it shipped right to your newly cleared property. We'll ship anywhere within California, Oregon, Nevada and Washington State, shipping costs vary by region and distance.</p>
                    <ul>
                        <li>Contact us to start your order and we’ll give you a timeline, availability and cost of your project.</li>
                        <li>Cost varies between the Rustic, Bare and Kipper design kits.</li>
                        <li>Building Services are first come first serve. Shipping, Building and Kit costs all apply.</li>
                    </ul>
                </div>
            </article>
        </section>
        <hr id="contact-form">
        <h2>Have Questions?</h2>
        <hr>
        <p>We're here to help! Please fill out this form with your inquiry and a member of our team will respond within three business days.</p>
        <?php
            if($_REQUEST['did_send']==1){
              echo '<article class="'.$status.'">';
              echo $display_msg;
              echo '</article>';
            }
            ?>
        <section>
            <form action="index.php" method="post">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>

                <div>
                    <label for="email" >E-mail:</label>
                    <input type="text" id="email" name="email" pattern="([\w\-\.]+)@((\[([0-9]{1,3}\.){3}[0-9]{1,3}\])|(([\w\-]+\.)+)([a-zA-Z]{2,8}))" placeholder="yourname@domain.com" required>
                </div>

                <div>
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" placeholder="(xxx)xxx-xxxx">
                </div>

                <div>
                    <label for="inquiry">What can we help with?</label>
                    <select id="inquiry" name="inquiry" required>
                        <option value="buildkits">Build Kits</option>
                        <option value="designservices">Design Services</option>
                        <option value="pre-builtkits">Pre-built Kits</option>
                        <option value="contractors">Verified Contractors</option>
                        <option value="buildforus">Build Our Home Kits</option>
                    </select>
                </div>

                
                <label name="contact">Best way to contact you?</label>
                <ul>
                    <li>
                        <input type="radio" name="contact" id="email-tic">
                        <label id="email-tic">E-mail</label> 
                    </li>
                    <li>
                        <input type="radio" name="contact" id="call">
                        <label id="call">Phone Call</label>
                    </li>
                    <li>
                        <input type="radio" name="contact" id="text">
                        <label id="text">Text Message</label> 
                    </li>
                </ul>
                <div>
                <label for="comment">Comments:</label>
                    <textarea type="text" id="comment" name="comment" required></textarea>
                </div>
                <button type="submit" name="button">Submit</button> 
                <input type="hidden" name="did_send" value="1">
            </form>

        </section>

        <p class="sticky none"><a href="index.html#">Back to Top</a></p>
    </main>
    <footer>
        <div class="footer-wrapper">
            <section class="contact">
                <h4>Bite Sized Building Company</h4>
                <h5>2408 Northside Drive</h5>
                <h5>San Diego, CA 92108</h5>
                <h5>Open 9am - 5pm PST</h5>
                <h5><a href="tel:6195551234">(619) 555-1234</a></h5>
                <ul class="social">
                    <li><a href="http://facebook.com" target="_blank" rel="noreferrer"><img src="../../img/facebookicon.png" alt="the facebook icon"></a></li>
                    <li><a href="http://instagram.com" target="_blank" rel="noreferrer"><img src="../../img/instaicon.png" alt="the instagram icon"></a></li>
                    <li><a href="http://tiktok.com" target="_blank" rel="noreferrer"><img src="../../img/tiktokicon.png" alt="the tiktok icon"></a></li>
                    <li><a href="http://twitter.com" target="_blank" rel="noreferrer"><img src="../../img/twittericon.png" alt="the twitter icon"></a></li>
                </ul>
            </section>
            <section class="site-map">
                <ul>
                    <li class="title"><a href="../builds/index.html">Builds</a></li>
                    <li><a href="../builds/index.html#tiny-homes">Tiny Homes</a></li>
                    <li><a href="../builds/index.html#containers">Converted Container</a></li>
                    <li><a href="../builds/index.html#furniture">Furniture Gallery</a></li>
                </ul>
                <ul>
                    <li class="title"><a href="index.php">Services</a></li>
                    <li><a href="index.php#design">Design</a></li>
                    <li><a href="index.php#builders">Builders</a></li>
                </ul>
                <ul>
                    <li class="title"><a href="../team/index.html">Team</a></li>
                    <li><a href="../team/index.html#contractors">Contractors</a></li>
                    <li><a href="../../index.html#story">Our Story</a></li>
                </ul>
                <ul>
                    <li class="title"><a href="../contact/index.php">Contact Us</a></li>
                    <li><a href="../contact/index.php#faq">FAQ</a></li>
                    <li><a href="../careers/index.html">Careers</a></li>
                    <li><a href="../careers/index.html#boh">Build Our Homes</a></li>
                </ul>
            </section>

        </div>
        <small class="copyrite"><i class="far fa-copyright"></i> Bite Sized Building Company 2022</small>
        <div class="dev-info">
            <a href="http://ginnygraybill.com" target="_blank"><img src="../../img/ggdesignslogo.png" alt="the G G Designs logo"/></a>
            <small>Designed by <a href="http://ginnygraybill.com" target="_blank"><strong>Ginny Graybill Designs</strong></a> 2022
            <p>For WC300 at Platt College - San Diego</p></small>
        </div>
    </footer>
 


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.js" integrity="sha512-VRuRE7kBxU+JQr4R/7Y75cMMdeNnn5zDZRpT4qtEzAJXdMkmFPPGbS56Ch9/Lr2g5vnwN7PxtIdBvevTMVpnug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../../js/js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
$("#commentForm").validate();
</script>


</body>
</html>