
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> Colegio De Muntinlupa  </title> <link rel="stylesheet"
    href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:
ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,
300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="sub-header">
        <h1> Contact Us</h1>
     <nav>
       
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times"></i>
                <ul>
                    <li><a href="About Us.html">ABOUT</a></li>
                    <li><a href="contact.html">PROGRAMS</a></li>
                    <li><a href="">ADMISSION</a></li>
                    <li><a href="https://www.cdm.edu.ph/sims/user/login_student" target="_blank">STUDENT PORTAL</a></li>
                    <li><a href="blog.html">DIRECTORY</a></li>
                    <li><a href="">CAREERS</a></li>
                    <li><a href="https://www.cdm.edu.ph/sims/user/login_employee" target="_blank">EMPLOYEE PORTAL</a></li>      

                </ul>   
            </div>
            <i class="fa fa-bars" onclick="hideMenu()"></i>

     </nav> 
   
    </section>

<!-----------Contact Us----------->

<section class="location">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.4729209768025!2d121.04862347459435!3d14.457512086012034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cfb8d2a61707%3A0x55d49996caea2444!2sColegio%20de%20Muntinlupa!5e0!3m2!1sen!2sph!4v1712025737462!5m2!1sen!2sph"
        width="600"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>


<section class="contact-us">

    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>Mayor J.Posadas Ave, Sucat</h5>
                    <p>Muntinlupa City, Metro Manila, Philippines</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+63 9485281759</h5>
                    <p>Monday to Saturday, 8AM TO 9PM </p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>cdm.edu.ph</h5>
                    <p>Email us your query</p>
                </span>
            </div>
        </div>

        <div class="contact-col">
    <form action="form-handler.php" method="POST">
        <label for="Name">Your Name:</label>
        <input type="Name" name="Name" id="Name" required>
        <br>

        <label for="email">Your Email:</label>
        <input type="email" name="email" id="email" required>
        <br>

        <label for="subject">Subject:</label>
        <input type="subject" name="subject" id="subject      " required>
        <br>

        <label for="message">Your Message:</label>
        <textarea name="message" id="message" rows="5" required></textarea>
        <br>
        <button type="submit" name="send">Submit</button>
    </form>


        </div>
    </div>
</section>

<!------- Footer ----------->
<section class="footer">
    <h4>About us</h4>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos alias, fugiat adipisci reiciendis dolorem cupiditate incidunt ipsum commodi 
        eaque iste non rerum laudantium harum quod. Omnis nulla incidunt sunt dignissimos?</p>
        <div class="icons">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-phone" aria-hidden="true"></i>
           
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Easy Tutorial</p>
</section>

<!------- JavaScript for Toggle Menu ----------->
<script>
    var navLinks = document.getElementById ("navLinks");
    function showMenu() {
        navLinks.style.right = "0";
    }
    function hideMenu() {
        navLinks.style.right = "200px";
    }



</script>

</body>
</html>