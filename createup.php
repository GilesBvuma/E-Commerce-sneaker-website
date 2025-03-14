<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css" />
    <script type="text/javascript" src="./app.js" defer></script>
</head>
<body>
<section class="popover">
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
</body>
</html>