<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MemHub: Videos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset("css/style.css") }}">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
  <script src="https://kit.fontawesome.com/9630de622f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="logo"><b>Mem</b><span><b>Hub</b></span></div>
        <ul class="menu">
          <a href="/" class="menu__li">
            <li><button  type="button"  class="btn btn-dark">Mems</button></li>
          </a><a href="/video" class="menu__li">
            <li><button type="button" class="btn btn-dark">Video</button></li>
          </a><a href="https://www.instagram.com/padishahh4/" class="menu__li">
            <li><button type="button" class="btn btn-dark">Dating</button></li>
          </a>
        </ul>
      </nav>
    </div>
  </header>

  <div class="menu2">
    <ul class="menusec">
      <a href="/index" class="menusec__li">
        <li><button type="button" class="btn btn-dark">Main</button></li>
      </a>
      <a href="{{ asset("css/bootstrap/bootst.html") }}" class="menusec__li">
        <li><button type="button" class="btn btn-dark">About us</button></li>
      </a>
      <a href="{{ asset("css/bootstrap/bootst.html") }}" class="menusec__li">
        <li><button type="button" class="btn btn-dark">Contacts</button></li>
      </a>
      <a href="mailto:yermukhanbetov4@gmail.com" class="menusec__li">
        <li><button type="button" class="btn btn-dark">Help</button></li>
      </a>
    </ul>
  </div>

  <div  id="filter"  onclick="show('none')"></div>
  <div id="modalForm" >
    <form action="">
      <div>
        <h1 title="for hint">List of hints:</h1>
      <div class="group">
        <label for="">1. default</label>
      </div>
      <div class="group">
        <label for="">2. sintikov</label>
      </div>
      <div class="group">
        <label for="">3. history</label>
      </div>
      </div>

    </form>
</div>


  <div class="all" id="all" style="opacity: 0;">
    <div class="container">
      <main>
        <div class="main-menu">
          <a href="#" class="main-menu__li">
            <div>Video</div>
          </a><a href="#" class="main-menu__li">
            <div  onclick ="Hint()">Hint</div>
          </a>
        </div>
        <div class="promo">
          <div class="title">videos of aitu's student</div>
          <form class="search" action="#" method="POST">
            <input class="input" id="InnerHtml" type="text"   placeholder="Search by tags" value="">
            <button onclick="Chang()" class="btn"  type="button"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="articles">
          <article>
            <iframe width="890" id="VideoInnerHtml" height="500" src="https://www.youtube.com/embed/Z4RtSSSXkoc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </article>
        </div>
      </main>

      <aside>
        <div class="aside">
          <div class="aside-title">Authorization</div>
          <div class="aside-content">
            <div class="register">
              <form class="register" action="" method="POST">
                <input class="input" name="email "type="email" placeholder="E-mail">
                <input class="input" name="password" type="password" placeholder="Password">
                <button type="button" class="btn btn-primary">Log in</button>
              </form>
              <span><a href="/registration">Registration</a></span>
            </div>
          </div>
        </div>

        <div class="aside">
          <div class="aside-title">News</div>
          <div class="aside-content">
            <article>
              JANUARY 24, 2022 <br>
                <a href="https://astanait.edu.kz/2022/01/24/vakcinaciya-protiv-koronovirusa/" >Vaccination against coronavirus infection</a>
            </article>
            <article>
              JANUARY 14, 2022 <br>
                <a href="https://astanait.edu.kz/2022/01/14/format-obucheniya-v-astana-it-university/">The format of study at Astana IT University</a>
            </article>
            <article>
              JANUARY 14, 2022 <br>
                 <a href="https://astanait.edu.kz/2022/01/14/prizery-huawei-ict-competition-2021/">Winners of Huawei ICT Competition 2021</a>
            </article>
          </div>
        </div>
    </aside>
    </div>
  </div>


  <footer>
    <div class="container">
      <ul class="footer-menu">
        <li class="footer-menu__li"><a href="#">About us</a></li>
        <li class="footer-menu__li"><a href="#">Contacts</a></li>
      </ul>
    </div>
  </footer>
  <script src="https://kit.fontawesome.com/9630de622f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  <script src="{{ asset("js/JavaScript2.WEB.js") }}"></script>
  <script type="text/javascript"></script>
</body>
</html>
