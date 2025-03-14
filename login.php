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
  </section>
</body>
</html>