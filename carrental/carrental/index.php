<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Website</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
</head>
<body>

<header>
    <a href="#" class="logo"><img src="img/jeep.png" alt=""></a>

    <div class="bx bx-menu" id="menu-icon"></div>
  
    <ul class="navbar">
       <li><a href="#home">Home</a></li> 
       <li><a href="#ride">Ride</a></li> 
       <li><a href="#services">Services</a></li> 
       <li><a href="#about">About</a></li> 
       <li><a href="#reviews">Reviews</a></li> 
    </ul>
    <div class="header-btn">
         <a href="sign up.php" class="sign-up"></a>
        <a href="sign in.php" class="sign-in">Book Now</a>
    
    </div>
</header>
<section class="home" id="home">
    <div class="text">
        <h1><span>Looking </span>to <br>rent a car</h1>
        <p>Lorem ipsum dolor sinamet consectetur adi <br> pisicing elit. Fuga,ut qui.</p>
        <div class="app-stores">
        <img src="img/ios.png" alt="">
        <img src="img/512x512.png" alt="">
    </div>
    </div>
     <div class="form-container">
        <form action="">
           <div class="input-box">
            <span>Location</span>
            <input type="search" name="" id="" placeholder="Search Places">
           </div>
           <div class="input-box">
            <span>Pick-Up Date</span>
            <input type="date" name="" id="">
           </div>
           <div class="input-box">
            <span>Return Date</span>
            <input type="date" name="" id="">
           </div>
           <input type="submit" name="" id="" class="btn">
        </form>
     </div>
</section>

      <section class="ride" id="ride">
        <div class="heading">
            <span>How Its Work</span>
            <h1>Rent With 3 Easy Steps</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class='bx bxs-map' ></i>
                <h2>Choose A Location</h2>
                <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-check'></i>
                <h2>Picup-Up Date</h2>
                <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-star'></i>
                <h2>Book A Car</h2>
                <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
            </div>
        </div>
      </section>
      <section class="services" id="services">
        <div class="heading">
            <span>Best Services</span>
            <h1>Explore Out Top Deals <br> From Top Rated Dealers</h1>
        </div>
        <div class="services-container">
            <div class="box">
                <div class="box-img">
                    <img src="/img/car1.jpg" alt="">
                </div>
                <p>2017</p>
                <h3>2017 Honda Civic</h3>
                <h2>$55500 | $300 <span>month</span></h2>
                <a href="#"  class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="/img/car2.jpg" alt="">
                </div>
                <p>2018</p>
                <h3>2018 Honda City</h3>
                <h2>$60500 | $400 <span>month</span></h2>
                <a href="#"  class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="/img/car3.jpg" alt="">
                </div>
                <p>2019</p>
                <h3>2019 Honda Civic</h3>
                <h2>$61000 | $450 <span>month</span></h2>
                <a href="#"  class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="/img/car4.jpg" alt="">
                </div>
                <p>2020</p>
                <h3>2020 Honda City</h3>
                <h2>$61500 | $500 <span>month</span></h2>
                <a href="#"  class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="/img/car5.jpg" alt="">
                </div>
                <p>2021</p>
                <h3>2021 Honda Civic</h3>
                <h2>$62000 | $550<span>month</span></h2>
                <a href="#"  class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="/img/car6.jpg" alt="">
                </div>
                <p>2022</p>
                <h3>2022 Honda City</h3>
                <h2>$62500 | $600 <span>month</span></h2>
                <a href="#"  class="btn">Rent Now</a>
            </div>
        </div>
      </section>

      <section class="about" id="about">
        <div class="heading">
            <span>About Us</span>
            <h1>Best Customer Experience</h1>
        </div>
        <div class="about-container">
            <div class="about-img">
                <img src="img/about.png" alt="">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <a href="#" class="btn">Learn More</a>

            </div>
        </div>
      </section>

      <section class="reviews" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>Whats Our Customer Say</h1>
        </div>
        <div class="reviews-container">
            <div class="box">
                <div class="rev-img">
                    <img src="img/rev1.jpg" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
            </div>
            <div class="box">
                <div class="rev-img">
                    <img src="img/rev2.jpg" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
            </div>
            <div class="box">
                <div class="rev-img">
                    <img src="img/rev3.jpg" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
            </div>
        </div>
      </section>

      <section class="newsletter">
        <h2>Subscribe To Newsletter</h2>
        <div class="box">
            <input type="text" placeholder="Enter Your Email...">
            <a href="#" class="btn">Subscribe</a>
        </div>
      </section>
      <div class="copyright">
        <p>&#169; CarpoolVenom All Right Reserved </p>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
        </div>
      </div>


      <script src="https://unpkg.com/scrollreveal"></script>
      

    <script src="main.js"></script>
    
</body>
</html>