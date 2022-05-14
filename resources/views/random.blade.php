<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MemHub</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset("css/style.css") }}">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
  <script src="https://kit.fontawesome.com/9630de622f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="{{ asset("js/JavaScript.WEB.js") }}"></script>

</head>

<body>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="logo"><b>Mem</b><span><b>Hub</b></span></div>
        <ul class="menu">
          <a href="/" class="menu__li">
            <li><button type="button" class="btn btn-dark">Mems</button></li>
          </a><a href="/video" class="menu__li">
            <li><button type="button" class="btn btn-dark">Video</button></li>
          </a><a href="#" class="menu__li">
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
        <li><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal">About us</button></li>
      </a>
      <a href="{{ asset("css/bootstrap/bootst.html") }}" class="menusec__li">
        <li><button type="button" class="btn btn-dark ">Contacts</button></li>
      </a>
      <a href="mailto:yermukhanbetov4@gmail.com" class="menusec__li">
        <li><button type="button" class="btn btn-dark">Help</button></li>
      </a>
    </ul>
  </div>


  <div class="all">
    <div class="container">
      <main>
        <div class="main-menu">
          <a href="/index" class="main-menu__li">
            <div>Mems</div>
          </a><a href="/random" class="main-menu__li">
            <div>Random</div>
          </a>
        </div>
        <div class="promo">
          <div class="title">mems of aitu's students</div>
          <form class="search" action="#" method="POST">
            <input class="input" type="text" name="search" placeholder="Search by tags">
            <button class="btn"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="articles">
          <article>
            <img class="imge" id="ChangeImg" src="https://sun9-5.userapi.com/impg/oPvi-U7PvnTDZhiz8YPCTAlFa24x7iibDoidHA/dJzHzGzi2yw.jpg?size=1024x1188&quality=96&sign=241c7f7ad4ac48fefb716e7f390438b0&type=album" alt="Изображение" title="Изображение">
            <button onclick="LikeCount()" class="fa fa-thumbs-up" type="button">
              <span id="like">0</span>
            </button>
            <button onclick="showx()" class="commentary">coment</button>
            <button onclick="randomMeme()" class="randomMeme">Random</button>
            <div class="row" style="display: none;">
              <div class="col-lg-12">
                <div id="comment-field"></div>
              </div>
              <div class="col-lg-6">
                <form >
                <div class="form-group">
                    <label for="comment-name">Name:</label>
                    <input type="name" class="form-control" id="comment-name" placeholder="Your name">
                </div>
                <div class="form-group">
                  <label for="comment-body">Comment:</label>
                    <input type="name" class="form-control" id="comment-body" placeholder="Your comment">
                </div>
                <div class="form-group text-right">
                  <button onclick="submitComment()" type="button" id="comment-add" class="btn btn-warning">add Comment</button>
                </div>
                <div>
                  <button onclick="hideComment()" type="button" id="comment-add" class="btn btn-warning">hide</button>
                </div>
                </form>
              </div>
            </div>
          </article>
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

    </aside>
    </div>
  </div>


  <footer>
    <div class="container">
      <ul class="footer-menu">
        <li class="footer-menu__li"><a href="css/bootstrap/bootst.html">About us</a></li>
        <li class="footer-menu__li"><a href="css/bootstrap/bootst.html">Contacts</a></li>
      </ul>
    </div>
  </footer>

</body>
</html>
