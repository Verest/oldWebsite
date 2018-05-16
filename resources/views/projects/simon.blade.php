<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Richie Black Homepage</title>

  <link href="https://fonts.googleapis.com/css?family=Oxygen|Oxygen+Mono" rel="stylesheet">
  <link href="../css/simon.css" rel="stylesheet">
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
      <!--Simon Start -->

      <div class='simon-container'>
        <div class='content' id='click'>
          <div class='box tl dark-green' id='tl'>
            <audio loop id='tLAudio'><source src='../audio/sound1.ogg' type='audio/mpeg'></audio>
          </div>
          <div class='box tr dark-red' id='tr'>
            <audio loop id='tRAudio'><source src='../audio/sound2.ogg' type='audio/mpeg'></audio>
          </div>
          <div class='box bl dark-yellow' id='bl'>
            <audio loop id='bLAudio'><source src='../audio/sound3.ogg' type='audio/mpeg'></audio>
          </div>
          <div class='box br dark-blue' id='br'>
            <audio loop id='bRAudio'><source src='../audio/sound4.ogg' type='audio/mpeg'></audio>
          </div>

        </div> <!-- added -->

        <div class='box mid'>
          <div class="on-off-container float col-3">
            <div class="onOffIndicator" id="powerLight"></div>
            <button type="button" class="power" id='powerButton'>on/off</button><br>
          </div>

          <div class="start-container float col-3">
            <!-- <div class="invisibleIndicator"></div><br> -->
            <button type="button" class="start" id='startButton'>start</button><br>
          </div>

          <div class="strict-container float col-3">
            <div class="onOffIndicator" id="strictLight"></div>
            <button type="button" class="strict" id='strictButton'>strict</button><br>
          </div>
          <!-- </div> -->
          <div class='score-container center '>
            <p id="display">00</p>
          </div>
        </div> <!-- end box mid -->

      </div>
      <!--Simon End -->

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
    <script src="../js/simon.js"></script>
</body>
</html>