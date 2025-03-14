<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css" />
  </head>
  <body>
    <header class="main-navigation">
      <div>
        <img src="./images/logo.png" height="50px" alt="company-logo" />
      </div>
      <div class="nav-links">
        <a href="./index.php">Home</a>
        <a href="./male.php">Products</a>
        <a href="./aboutUs.html">About Us</a>
        <a href="#">Contact Us</a>
      </div>
      <div class="nav-btns" id="nav-btns">
        <input type="search" placeholder="🔍Search" id="search-btn" />
        <button popovertarget="my-popover" id="my-pop-btn">
            Log in <img src="./icons/login.svg"/>
        </button>
        <button popovertarget="signup-popover" id="signup-btn">
            Get Started
        </button>
        <a id="cart-link" href="./cc.html" class="image"><div class="emoj"><img src="./icons/shopping_cart.svg"></div>Cart</a>
        <a id="profile-link"><div class="emoj" class="image"><img src="./icons/account_circle.svg"/></div>Profile</a>
    </div>
    </header>

    <section class="popover">
      <div class="pop-container">
          <div id="my-popover" popover>
              <div class="pop-navbar">
                  <h1>Login</h1>
              </div>
              <form action="loginVerify.php" method="POST">
                  <div class="pop-inputsField">
                      <div class="pop-input">
                          <img src="./icons/person.svg" alt="person svg" />
                          <br />
                          <input type="text" placeholder="Username" id="padded-input" name="login-userName" required />
                      </div>
                      <div class="pop-input">
                          <img src="./icons/passkey.svg" alt="Password svg" />
                          <br />
                          <input type="password" placeholder="Password" id="padded-input" name="login-passcode" required />
                      </div>
                      <div class="tick">
                          <input type="checkbox" id="login-checkbox" name="login-checkbox" required />
                          <label for="login-checkbox">I'm not a Robot</label>
                      </div>
                  </div>
                  <div class="respond-btn">
                      <input type="submit" value="Login" id="login-input" name="submit" />
                      <button type="button" id="close-login-btn">
                          <img src="./icons/cancel.svg" alt="cancel svg" />
                      </button>
                  </div>
              </form>
          </div>
  
          <div id="signup-popover" popover>
              <div class="pop-navbar">
                  <h1>Sign Up</h1>
              </div>
              <form action="signup.php" method="POST">
                  <div class="pop-inputsField">
                      <div class="pop-input">
                          <img src="./icons/person.svg" alt="person svg" />
                          <br />
                          <input type="text" placeholder="Username" id="padded-input" name="username" required />
                      </div>
                      <div class="pop-input">
                          <img src="./icons/mail.svg" alt="Email svg" />
                          <br />
                          <input type="email" placeholder="Enter email" id="padded-input" name="email" required />
                      </div>
                      <div class="pop-input">
                          <img src="./icons/passkey.svg" alt="Password svg" />
                          <br />
                          <input type="password" placeholder="Enter Password" id="input-password" name="password" required />
                      </div>
                      <div class="pop-input">
                          <img src="./icons/passkey.svg" alt="Password svg" />
                          <br />
                          <input type="password" placeholder="Re-enter Password" id="input-repassword" name="re-password" required />
                      </div>
                      <div class="tick">
                          <input type="checkbox" id="signup-checkbox" name="signup-checkbox" onclick="document.getElementById('my-popover').style.display='none';" />
                          <label for="signup-checkbox">I agree to the t & c's</label>
                      </div>
                  </div>
                  <div class="respond-btn">
                      <input type="submit" value="Sign Up" id="signup-input" name="signUp" />
                      <button type="button" id="close-signup-btn">
                          <img src="./icons/cancel.svg" alt="cancel svg" />
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </section>

    <div class="assurance">
      <p>
        <strong>"Your online sneaker store!"</strong>
        <br>
        buy now & get it delivered to your doorstep👌
      </p>
      <p>
        <strong>"Get to Buy now!"</strong>
        <br>
        add your favoutites to the cart for later😊
      </p>
    </div>

<main class="container">
      <section class="grid-hero_sect">
        <div class="text-hero">
          <h1>"Step into Style"</h1>
          <p>
            Discover our latest collection designed for comfort, durability, and
            timeless style. From casual kicks to sleek dress shoes, find the
            perfect pair to elevate every look and every step. Start walking in
            confidence.
          </p>
          <div class="buttons">
            <a href="./male.php"><button>View Products➡️</button></a>
          </div>
        </div>
        <div class="carousel-container">
          <div class="slider-container">
            <div class="slider-images">
              <img id="slider1" src="./images/purple-j3.jpg" />
              <img id="slider2" src="./images/sneaker-1.jpg" />
              <img id="slider3" src="./images/sneaker-2.jpg" />
              <img id="slider4" src="./images/sneaker-3.jpg" />
              <img id="slider5" src="./images/sneaker-4.jpg" />
              <img id="slider6" src="./images/sneaker-6.jpg" />
            </div>
            <div class="slider-nav">
              <a href="#" style="--color: #fe6969"></a>
              <a href="#" style="--color: #ffa666"></a>
              <a href="#" style="--color: #ffdd66"></a>
              <a href="#" style="--color: #084d58"></a>
              <a href="#" style="--color: #eeaa44"></a>
              <a href="#" style="--color: #f2edec"></a>
            </div>
          </div>
        </div>
      </section>
      <!-- categories section -->
      <section class="categories">
        <div class="categories-head">
          <hr>
          <span><h2>Discover Exclusive Sneakers</h2>
          </span>
          <hr>
        </div>
        <div class="categories-container">
        <div class="select-cat">
          <div class="img-container">
            <h3>For Men: ⬇️</h3>
            <img src="./images/mans.jpg" alt="man wearing sneakers" height="500px" class="img-hover" id="hover-img"> 
            <a href="./male.php"><button class="img-hidden" id="hover-button">View more >>></button></a>
          </div>
        </div>
        <div class="select-cat">
          <div class="img-container">
            <h3>For Women: ⬇️</h3>
            <img src="./images/woman.jpg" alt="man wearing sneakers" height="500px" class="img-hover" id="hover-img"> 
            <a href="./female.php"><button class="img-hidden" id="hover-button">View more >>></button></a> 
          </div>
        </div>
        <div class="select-cat">
          <div class="img-container">
            <h3>For Teens: ⬇️</h3>
            <img src="./images/teen.jpg" alt="man wearing sneakers" height="500px" class="img-hover" id="hover-img">  
            <a href="./teens.php"><button class="img-hidden" id="hover-button">View more >>></button></a>
          </div>
        </div>
        <div class="select-cat">
          <div class="img-container">
            <h3>For Kids: ⬇️</h3>
            <img src="./images/kid.jpg" alt="man wearing sneakers" height="500px" class="img-hover" id="hover-img"> 
            <a href="./kids.php"><button class="img-hidden" id="hover-button">View more >>></button></a>
          </div>
        </div>
      </div>
       </section>
      <!-- popular products section -->
<section class="popular-products">
    <div class="popular-head">
          <hr>
          <span><h2>Popular Products</h2>
          </span>
          <hr>
        </div>
        <div class="my-cards">
        <article class="card" style="--isPopular: true">
          <div class="author">
            <div><img src="./icons/vecteezy_colorful-shoes_72997.svg" alt="shoes"/></div>
            <div>
              <div class="name">Kudra</div>
              Sneakers
            </div>
          </div>
          <div class="image">
            <img src="./images/jordan-1.png" alt="jordan 4 blue" />
          </div>
          <div class="info">
            <div class="name">Jordan 4 Retro</div>
            <div class="price">
              <p>$ 45</p>
            </div>
          </div>
          <div class="more">
            <div class="buttons">
              <button class="add-to-cart-btn" data-name="Jordan 4 pink" data-price="45">
                <img src="./icons/shopping_cart.svg" alt="shopping_cart" />
              </button>
              <button class="buy-now-btn">Buy Now</button>
            </div>
            <div class="options">
              <label for="">Options</label>
              <ul>
                <li style="--color: #fe6969"></li>
                <li style="--color: #ffa666"></li>
                <li style="--color: #ffdd66"></li>
              </ul>
            </div>
          </div>
      </article>
     <article class="card" style="--isNew: true">
      <div class="author">
      <div><img src="./icons/vecteezy_colorful-shoes_72997.svg" alt="shoes"/></div>
      <div>
        <div class="name">Kudra</div>
        Sneakers
      </div>
    </div>
    <div class="image">
      <img src="./images/Nike_-_Air_Force_1.png" alt="jordan 4 blue" class="j4-orange" />
    </div>
    <div class="info">
      <div class="name">Nike_-_Air_Force 1</div>
      <div class="price">
        <p>$ 55</p>
      </div>
    </div>
    <div class="more">
      <div class="buttons">
      <button class="add-to-cart-btn" data-name="Nike_-_Air_Force 1" data-price="55">
          <img src="./icons/shopping_cart.svg" alt="shopping_cart svg" />
        </button>
        <button class="buy-now-btn">Buy Now</button>
      </div>
      <div class="options">
        <label for="">Options</label>
        <ul>
          <li style="--color: #fe6969"></li>
          <li style="--color: #ffa666"></li>
          <li style="--color: #ffdd66"></li>
        </ul>
      </div>
    </div>
  </article>
 <article class="card" style="--isNew: true">
  <div class="author">
    <div><img src="./icons/vecteezy_colorful-shoes_72997.svg" alt="shoes"/></div>
    <div>
      <div class="name">Kudra</div>
      Sneakers
    </div>
  </div>
  <div class="image">
    <img src="./images/airmax.png" alt="jordan 4 blue" class="Airmax"/>
  </div>
  <div class="info">
    <div class="name">Airmax Pro</div>
    <div class="price">
      <p>$ 65</p>
    </div>
  </div>
  <div class="more">
    <div class="buttons">
    <button class="add-to-cart-btn" data-name="Airmax Pro" data-price="65">
        <img src="./icons/shopping_cart.svg" alt="shopping_cart svg" />
      </button>
      <button class="buy-now-btn">Buy Now</button>
    </div>
    <div class="options">
      <label for="">Options</label>
      <ul>
        <li style="--color: #fe6969"></li>
        <li style="--color: #ffa666"></li>
        <li style="--color: #ffdd66"></li>
      </ul>
    </div>
  </div>
      </article>
  <article class="card" style="--isPopular: true">
   <div class="author">
    <div><img src="./icons/vecteezy_colorful-shoes_72997.svg" alt="shoes"/></div>
    <div>
      <div class="name">Kudra</div>
      Sneakers
    </div>
  </div>
  <div class="image">
    <img src="./images/puma_shoes.png" alt="jordan 4 blue"/>
  </div>
  <div class="info">
    <div class="name">Puma_Shoes</div>
    <div class="price">
      <p>$ 35</p>
    </div>
  </div>
  <div class="more">
    <div class="buttons">
    <button class="add-to-cart-btn" data-name="Puma_Shoes" data-price="35">
        <img src="./icons/shopping_cart.svg" alt="shopping_cart svg" />
      </button>
      <button class="buy-now-btn">Buy Now</button>
    </div>
    <div class="options">
      <label for="">Options</label>
      <ul>
        <li style="--color: #fe6969"></li>
        <li style="--color: #ffa666"></li>
        <li style="--color: #ffdd66"></li>
      </ul>
    </div>
  </div>
      </article>
  </div>
       </section>
      <!-- Testimonials Section -->
      <section class="testimonials">
        <div class="testimonials-head">
        <hr>
        <span><h2>What Our Customers Say</h2>
        </span>
        <hr>
      </div>
        <div class="testimonials-container">
          <div class="testimonial">
            <fieldset>
              <legend><strong>— Michael Jordan.</strong></legend>
              <p>
                "I wore the dress shoes to my friend's wedding, and I received
                so many compliments! They were super comfortable too.🔥🔥"
              </p>
            </fieldset>
            <div class="reviews">
              <label>--Was this helpful:</label>
              <label id="review-checkbox">
              <input type="checkbox" id="yes" class="review-checkbox">Yes
              </label>
              <label id="review-checkbox">
              <input type="checkbox" id="no" class="review-checkbox">No
              </label>
            </div>
          </div>
          <div class="testimonial">
            <fieldset>
              <legend><strong>— Kudra D.</strong></legend>
              <p>
                "From the moment I put these on, I knew they were something
                special. The materials feel premium, and the support is
                excellent.👌🥵"
              </p>
            </fieldset>
            <div class="reviews">
              <label>--Was this helpful:</label>
              <label id="review-checkbox">
              <input type="checkbox" id="yes" class="review-checkbox">Yes
              </label>
              <label id="review-checkbox">
              <input type="checkbox" id="no" class="review-checkbox">No
              </label>
            </div>
          </div>
          <div class="testimonial">
            <fieldset>
              <legend><strong>— C Ronaldo.</strong></legend>
              <p>
                "These sneakers are a game changer! Comfortable and
                stylish—perfect for my daily routine.⭐⭐⭐⭐⭐"
              </p>
            </fieldset>
            <div class="reviews">
              <label>--Was this helpful:</label>
              <label id="review-checkbox">
              <input type="checkbox" id="yes" class="review-checkbox">Yes
              </label>
              <label id="review-checkbox">
              <input type="checkbox" id="no" class="review-checkbox">No
              </label>
            </div>
          </div>
        </div>
      </section>
      <!-- About Us Section -->
      <section class="about-us">
        <h2>About Us</h2>
        <p>
          We are passionate about bringing quality footwear to our customers.<br />
          With a focus on durability, style, and comfort, we believe in making
          every step a confident one. <br />
          Explore our collection and step into style with us.
        </p>
        <button>Learn More</button>
      </section>

      <!-- Newsletter Section -->
      <section class="newsletter">
        <h2>Stay Updated</h2>
        <p>
          Subscribe to our newsletter to receive the latest offers and updates.
        </p>
        <form action="#" method="POST" class="newsletter-form">
          <input type="email" placeholder="Enter your email" required />
          <button type="submit">Subscribe</button>
        </form>
      </section>
    </main>

    <!-- Footer Section -->
    <footer class="footer">
      <div class="footer-content">
        <div class="footer-logo">
          <img src="./images/logo.png" alt="Company Logo" height="50px" />
          <p>&copy; 2024 <a href="#">darystzw@gmail.com.</a>
            <br>All rights reserved.</p>
        </div>
        <div class="footer-links">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
          <a href="#">Contact Us</a>
        </div>
        <div class="social-media">
          <a href="#"
            ><img
              src="./icons/facebook.svg"
              alt="Facebook"
              height="20"
            />Facebook</a
          >
          <a href="#"
            ><img
              src="./icons/instagram.svg"
              alt="Instagram"
              height="20"
            />Instagram</a
          >
          <a href="#"
            ><img src="./icons/x.svg" alt="Twitter" height="20" />Twitter ®</a
          >
          <a href="#" target="_blank"
            ><img
              src="./icons/whatsapp.svg"
              alt="whatsapp"
              height="20"
            />Whatsapp</a
          >
        </div>
      </div>
    </footer>
  </body>
    <script type="text/javascript" src="./app.js"></script>
  <script type="text/javascript" src="./addtocart.js"></script>
</html>
