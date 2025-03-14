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
    <link rel="stylesheet" href="./styles/productstyles.css"/>
    <script type="text/javascript" src="./addtocart.js" defer></script>
    <style>
      
    </style>
  </head>
  <body>
    <header class="main-navigation">
      <div>
        <img src="./images/logo.png" height="50px" alt="company-logo" />
      </div>
      <div class="nav-links">
        <a href="./index.php">Home</a>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
      </div>
      <div class="nav-btns">
        <input type="search" placeholder="🔍Search" id="search-btn"/>
        <a id="cart-link" href="./cc.html"><div class="emoj"><img src="./icons/shopping_cart.svg"></div>Cart</a>
        <a id="profile-link"><div class="emoj"><img src="./icons/account_circle.svg"/></div>Profile</a>
      </div>
    </header>
    <div class="groups">
        <a href="./male.php"><button>Male</button></a>
        <a href="./female.php"><button>Kids</button></a>
        <a href="./teens.php"><button>Teens</button></a>
      </div>
    <section class="popular-products">
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
              <button>
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
        <p>$ 45</p>
      </div>
    </div>
    <div class="more">
      <div class="buttons">
        <button>
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
  </div>
    </section>
    <section class="popular-products">
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
              <button>
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
        <p>$ 45</p>
      </div>
    </div>
    <div class="more">
      <div class="buttons">
        <button>
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
  </div>
    </section>
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
  <script>
    const isLoggedIn = <?php echo json_encode(isset($_SESSION['user_id'])); ?>; // Check if user is logged in
    const cart = [];

    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.add-to-cart');

        buttons.forEach(button => {
            button.addEventListener('click', (event) => {
                const productId = event.target.closest('button').getAttribute('data-id');
                const productName = event.target.closest('button').getAttribute('data-name');
                const productPrice = parseFloat(event.target.closest('button').getAttribute('data-price'));

                if (isLoggedIn) {
                    addToCart(productId, productName, productPrice);
                } else {
                    alert("You must log in or register to add items to your cart.");
                    // Optionally, redirect to the login page
                    // window.location.href = "login.php"; // Uncomment to redirect
                }
            });
        });
    });

    function addToCart(id, name, price) {
        const item = { id, name, price };
        cart.push(item);
        localStorage.setItem('cart', JSON.stringify(cart)); // Save to localStorage
        alert(`${name} has been added to your cart!`);
        console.log(cart); // Log the cart for debugging
    }
    </script>
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
              <a href="#"><img src="./icons/facebook.svg" alt="Facebook" height="20"/>Facebook</a>
              <a href="#"><img src="./icons/instagram.svg" alt="Instagram"height="20"/>Instagram</a>
              <a href="#"
                ><img src="./icons/x.svg" alt="Twitter" height="20" />Twitter ®</a>
              <a href="#" target="_blank"
                ><img src="./icons/whatsapp.svg" alt="whatsapp" height="20" />Whatsapp</a>
            </div>
          </div>
        </footer>
      </body>
    </html>
  </body>
</html>
