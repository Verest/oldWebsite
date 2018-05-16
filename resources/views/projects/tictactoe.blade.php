<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Richie Black Homepage</title>

  <link href="https://fonts.googleapis.com/css?family=Oxygen|Oxygen+Mono" rel="stylesheet">
  <link href="../css/tictactoe.css" rel="stylesheet">
</head>
<body>
    <div class="stickyFooter">
      <header id="top">
        <nav>
          <div class='nav__row-one'>
            <div class="wrapper-row-one">
              <a class="home-link" href='../../'>
                <img src="../img/logo.svg" alt="Website Logo" id="logo" />
                <div class="title">
                  <h1 class="title__text"><span class="hidden">R</span>ichie Black</h1>
                </div>
              </a>
              <button id="hamburger" type="button">
                <div class="bar-top"></div>
                <div class="bar-mid"></div>
                <div class="bar-bot"></div>
              </button>
            </div>
          </div>

          <div class='nav__row-two' id="nav-ham">
            <div class="wrapper-row-two">
              <ul class='nav__list'>
                <li class='nav__list__item'><a href='../../#projects'>Projects</a></li> <!-- Categories might switch -->
                <li class='nav__list__item'><a href='http://blog.richieblack.me'>Blog</a></li>
              </ul>
            </div> <!-- end wrapper -->
          </div>
        </nav>
      </header>

      <!-- start tic tac toe -->
      <div class='tictactoe-container'>
        <button type='submit' class='button' id='resetButton'>Reset Game</button>
        <canvas id='ticTacToeCanvas'></canvas>
      </div>
      <!-- end tic tac toe-->

    </div> <!--end stick footer -->

    <footer>
      <div class="to-top"><a href="#top">Back to Top</a></div>
      <div class="wrapper">
        <div class="purpose">
          <p class="purpose__content">This website serves as a host for projects made by Richie Black</p>
        </div>

        <div class="contact">
          <p class="contact__content">
            Contact: <br>
            richie@richieblack.me
          </p>
        </div>
      </div>
    </footer>
    <script src="../js/tictactoe.js"></script>
</body>
</html>
