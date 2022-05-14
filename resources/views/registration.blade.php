<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MemHub: Registration</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset("css/style.css") }}">
  <link rel="icon" type="image/x-icon" href="{{ asset("img/favicon.ico") }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="logo"><b>Mem</b><span><b>Hub</b></span></div>
        <ul class="menu">
          <a href="/" class="menu__li">
            <li><button type="button" id="menu_btn" class="btn btn-dark" >Mems</button></li>
          </a><a href="/video" class="menu__li">
            <li><button type="button" id="video_btn" class="btn btn-dark">Video</button></li>
          </a><a href="#" class="menu__li">
            <li><button id="datingBtn" type="button" class="btn btn-dark">Dating</button></li>
          </a>
        </ul>
      </nav>
    </div>
  </header>
  <script>
    document.getElementById("datingBtn").addEventListener("click", datingBtn);
    function datingBtn() {
      alert("Soon!");
    }
  </script>

  <div class="menu2">
    <ul class="menusec">
      <a href="#" class="menusec__li">
        <li><button type="button" class="btn btn-dark">Main</button></li>
      </a>
      <a href="#" class="menusec__li">
        <li><button type="button" class="btn btn-dark">About us</button></li>
      </a>
      <a href="{{ asset("css/bootstrap/bootst.html") }}" class="menusec__li">
        <li><button type="button" class="btn btn-dark">Contacts</button></li>
      </a>
      <a href="#" class="menusec__li">
        <li><button type="button" class="btn btn-dark">Help</button></li>
      </a>
    </ul>
  </div>


  <div class="all">
    <div class="container">
      <main>
        <div class="main-title">
            Registration
        </div>
        <div class="promo">
          <form class="registration" action="index.html" method="POST">
              <div class="registration__block">
                <label for="name">Name</label>
                <input class="input" id="nameInp" type="text" maxlength="15" name="name" placeholder="Name" required>
              </div>
              <div class="registration__block">
                <label for="name">Second name</label>
                <input class="input" type="text" maxlength="15" name="secondname" placeholder="Second name" required>
              </div>
              <div class="registration__block">
                <label for="name">Phone</label>
                <input class="input" id="phone" type="text" maxlength="15" name="phone" placeholder="Phone" required>
              </div>
              <div class="registration__block">
                <label for="name">E-mail</label>
                <input class="input" id="email" type="email" maxlength="15" name="email" placeholder="E-mail" required>
              </div>
              <div class="registration__block">
                <label for="name">Password</label>
                <input class="input" type="password" maxlength="15" id="passwordInp" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required>
              </div>
              <div class="registration__block">
                <label for="name">Confirm password</label>
                <input class="input" type="password" maxlength="15" id="confPassword" name="confirm" placeholder="Confirm your password" required>
              </div>
              <label  class="container">Show password
                <input type="checkbox" id="checkPass">
                <span class="checkmark"></span>
              </label>
              <div class="registration__block">
                <label for="name"></label>
                <button type="submit" id="regSub" class="btn btn-primary">Submit</button>
              </div>

              <div id="message">
                <h6>Password must contain the following:</h6>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">At least <b>8 characters</b></p>
              </div>
          </form>
        </div>
      </main>

      <script>
        var myInput = document.getElementById("passwordInp");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        myInput.onfocus = function() {
          document.getElementById("message").style.display = "block";
        }

        myInput.onblur = function() {
          document.getElementById("message").style.display = "none";
        }

        myInput.onkeyup = function() {
          var lowerCaseLetters = /[a-z]/g;
          if(myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
          } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
          }

          var upperCaseLetters = /[A-Z]/g;
          if(myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
          } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
          }

          var numbers = /[0-9]/g;
          if(myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
          } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
          }

          if(myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
          } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
          }
        }
        </script>

        <script>
          document.getElementById("regSub").onclick = function(){
            if(password.value != confirmPass.value){
              alert("Password didn't match! Try again.");
              return false;
            } else{
              alert("Succes!")
              return true;
            }
          }
        </script>

      <aside>
        <div class="aside">
          <div class="aside-title">Authorization</div>
          <div class="aside-content">
            <div class="register">
              <form class="register" action="" method="POST">
                <input class="input" name="email "type="email" placeholder="E-mail" required>
                <input class="input" name="password" type="password" placeholder="Password" required>
                <button type="submit" class="btn btn-primary">Log in</button>
              </form>
              <span><a href="registration.html">Registration</a></span>
            </div>
          </div>
        </div>
    </aside>
    </div>
  </div>


  <footer>
    <div class="container">
      <ul class="footer-menu">
        <li class="footer-menu__li"><a href="{{ asset("css/bootstrap/bootst.html") }}">About us</a></li>
        <li class="footer-menu__li"><a href="{{ asset("css/bootstrap/bootst.html") }}">Contacts</a></li>
      </ul>
    </div>
  </footer>

  <script src="{{ asset("js/javscr.js") }}"></script>
  <script src="{{ asset("css/jquery.maskedinput.js") }}"></script>
</body>
</html>
