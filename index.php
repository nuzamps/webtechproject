<?php
// start session so that errors can be available in this file to print
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
     <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
     <link href="css/mobiscroll.javascript.min.css" rel="stylesheet" />
    <script src="js/mobiscroll.javascript.min.js"></script>
    <style>
        #home {
            background: url('img/main.png') no-repeat center center fixed;
            height: 90vh;
            position: relative;
            width: 100%;
            background-size: cover;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container container-nav">
            <div class="site-title">
                <h1>Tresses 'n Locks</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#texture">Texture</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#product">Products</a></li>
                    <li><a href="#contact">Appointment</a></li>
                    <li><a href="./Views/Adminview.php">Admin</a></li>
                </ul>

            </nav>
        </div>
    </header>
    <main>
        <div id="home">
            <div class="overlay">
                <div class="landing-text">
                    <h3>A Hair Counsel</h3>
                    <h1>Tresses 'n Locks</h1>
                    <hr id="hr-main">
                    <a href="#contact" class="button btn-hire">Book an Appointment</a>
                </div>
            </div>
        </div>
    </main>

        
            <main id="texture" class="texture">
                <div class="texture-container">
                    <div class="texture-header">
                        <h1>Hair Type</h1>
                        <h3>Click on the text below each picture to get more info on each hair type</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="img/typea.jpeg" alt="" style="width: 100%">
                        <a href="hairtype.html"><h3>4A</h3></a>
                        <p></p>
                    </div>
                    <div class="column">
                        <img src="img/typeb.jpeg" alt="" style="width: 100%">
                        <a href="hairtype.html"><h3>4B</h3></a>
                        <p></p>
                    </div>
                    <div class="column">
                        <img src="img/typec.png" alt="" style="width: 100%">
                        <a href="hairtype.html"><h3>4C</h3></a>
                        <p></p>
                    </div>
                    </div>
                </div>
            </main>


    


 
    <main id="team" class="team">
        <div class="team-container">
            <div class="team-header">
                <h1>The Team</h1>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <img src="img/19.jpeg" alt="" style="width: 100%">
                <h3>Josephine Antwi</h3>
                <p>Advisor</p>
            </div>
            <div class="column">
                <img src="img/21.jpeg" alt="" style="width: 100%">
                <h3>Gifty Osei</h3>
                <p>Advisor</p>
                <img src="img/22.jpeg" alt="" style="width: 100%">
                <h3>Rita Fynn</h3>
                <p>Receptionist</p>
            </div>
            <div class="column">
                <img src="img/23.jpeg" alt="" style="width: 100%">
                <h3>Vivian Boateng</h3>
                <p>Advisor</p>
                <img src="img/24.jpeg" alt="" style="width: 100%">
                <h3>Gillian Poku</h3>
                <p>Receptionist</p>
            </div>
            <div class="column">
                <img src="img/25.jpeg" alt="" style="width: 100%">
                <h3>Anita Addo</h3>
                <p>Advisor</p>
            </div>
        </div>
    </main>


    <main id="product" class="product">
        <div class="product-container">
            <div class="product-header">
                <h1>Product</h1>
                <h3>View Products available and their prices!</h3>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <img src="img/p1.jpeg" alt="" style="width: 100%">
                <h3>Jamaican Black Castor Oil</h3>
                <p>Carrier Oil</p>
                <p class="price">$50.00</p>
            </div>
            <div class="column">
                <img src="img/p2.jpeg" alt="" style="width: 100%">
                <h3>Curl Love Moisture Milk</h3>
                <p>Leave-in Conditioner </p>
                <p class="price">$45.50</p>
            </div>
            <div class="column">
                <img src="img/p3.jpeg" alt="" style="width: 100%">
                <h3>aussie 3 minute miracle moist</h3>
                <p>Deep Conditioner</p>
                <p class="price">$25.50</p>
            </div>
            <div class="column">
                <img src="img/p5.jpeg" alt="" style="width: 100%">
                <h3>Pure Organic Peppermint Oil</h3>
                <p>Essential Oil</p>
                <p class="price">$45.50</p>
            </div>
            </div>
        </div>
    </main>

    <main id= "contact" class="contact">
        <h1>Appointment</h1>
        <div class="flex-container">
            <div class="flex-item-left">
                <h4>We are located at</h4>
                <p>5 University Ave</p>
                <p>Accra, Ghana</p>
                <h4>Phone</h4>
                <p>+233 50 435 6424</p>
                <h4>Email</h4>
                <p>tressesnlocks@gmail.com</p>
            </div>
            <div class="flex-item-right">
                <form method='POST' action='Functions/book_appt_func.php' enctype="multipart/form-data" onsubmit="return validateForm(event);">
                <?php
                    if(isset($_SESSION["errors"])){
                        $errors = $_SESSION["errors"];
                        // loop through errors and display them
                        foreach($errors as $error){
                            ?>
                                <small style="color: red"><?= $error."<br>"; ?></small>
                            <?php
                        }
                    }
                    // destroy session after displaying errors
                    $_SESSION["errors"] = null;
                ?>
                    <input type="text" id="fname" name='fname' placeholder="First Name">
                    <input type="text" id="lname" name='lname' placeholder="Last Name">
                    <input type="text" id="email" name='email' placeholder="Email">
                    <input type="text" id="telno" name='tel_no' placeholder="Telephone">
                    <br>
                    <span class="datepicker-toggle">
                    <span class="datepicker-toggle-button"></span>
                        <label for="dob">Dob:</label>
                        <input type="date" class="datepicker-input" name="dob">
                    </span>
                    <br>
                        <select class = "subject" name='medHistory'>
                            <option value="">Medical History</option>
                            <option value="yes">Yes, I have a Medical History</option>
                            <option value="no">No, I do not have a Medical History</option>
                         </select>
                         <select class = "subject" name='appt_time'>
                            <option value="">Appointment Time</option>
                            <option value="1pm">1pm</option>
                            <option value="2pm">2pm</option>
                            <option value="3pm">3pm</option>
                            <option value="4pm">4pm</option>
                            <option value="5pm">5pm</option>
                         </select>
                         <br>
                         <label for="dob">Appointment Date:</label>
                         <input type="date" id="apptdate" name='appt_date'  placeholder="Appointment Date"> <br>
                    <button type="submit" value="submit" name="submit">Book</button>
                </form>
            </div>
        </div>
    </main>
    <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>Tresses & Locks is a hair counsel company that helps black women solve the neglection and cluelessness revolving their natural tresses.</p>
                </div>

                <div>
                    <h2>Useful Links</h2>
                    <a href = "#home">Home</a>
                    <a href = "#texture">Texture</a>
                </div>

                <div>
                    <h2>Privacy</h2>
                    <a href = "#">About Us</a>
                    <a href = "#">Contact Us</a>
                    <a href = "#">Services</a>
                </div>

                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            Accra, Ghana
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +233 50 435 6424
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            tressesnlocks@gmail.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    <script src="js/index.js"></script>

</body>

</html>