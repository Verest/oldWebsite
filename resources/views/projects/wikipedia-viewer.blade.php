<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Richie Black Homepage</title>

  <link href="https://fonts.googleapis.com/css?family=Oxygen|Oxygen+Mono" rel="stylesheet">
  <link href="../css/wikipedia-viewer.css" rel="stylesheet"
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


    <!-- Wiki View Here-->
    <div class="wiki-wrapper">
      <h2>Wikipedia Viewer</h2>
      <div class="pre-content-wrapper">
        <div id="randomRow">
          <a id="randomLink" href="https://en.wikipedia.org/wiki/Special:Random" target="_blank">Random Wikipedia Article!</a>
        </div>

        <div id="searchRow">
          <form class="searchField" id="searchForm">
            <label for="searchText">Search: </label>
            <input type="text" id="searchText" placeholder="Text Here">
            <input type="submit" class="disp-none">
          </form>
        </div>
      </div>

      <div class="results">
        <div class="result" id="one">
          <a target="_blank" id="linkOne">
            <h4></h4>
            <p></p>
          </a>
        </div>
        <div class="result" id="two">
          <a target="_blank" id="linkTwo">
            <h4></h4>
            <p></p>
          </a>
        </div>
        <div class="result" id="three">
          <a target="_blank" id="linkThree">
            <h4></h4>
            <p></p>
          </a>
        </div>
        <div class="result" id="four">
          <a target="_blank" id="linkFour">
            <h4></h4>
            <p></p>
          </a>
        </div>
        <div class="result" id="five">
          <a target="_blank" id="linkFive">
            <h4></h4>
            <p></p>
          </a>
        </div>
        <div class="result" id="six">
          <a target="_blank" id="linkSix">
            <h4></h4>
            <p></p>
          </a>
        </div>
        <div class="result" id="seven">
          <a target="_blank" id="linkSeven">
            <h4></h4>
            <p></p>
          </a>
        </div>
        <div class="result" id="eight">
          <a target="_blank" id="linkEight">
            <h4></h4>
            <p></p>
          </a>
        </div>
        <div class="result" id="nine">
          <a target="_blank" id="linkNine">
            <h4></h4>
            <p></p>
          </a>
        </div>
        <div class="result" id="ten">
          <a target="_blank" id="linkTen">
            <h4></h4>
            <p></p>
          </a>
        </div>
      </div> <!--end results -->
    </div>
<!--end wiki view -->



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
            temp@richieblack.me
          </p>
        </div>
      </div>
    </footer>
    <script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="../js/wikipedia-viewer.js"></script>
</body>
</html>