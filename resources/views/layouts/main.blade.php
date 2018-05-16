<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Richie Black Homepage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxygen|Oxygen+Mono">
  @yield('css')
</head>
<body>
    <div class="stickyFooter">
      <header id="top">
        <nav>
          <div class='nav__row-one'>
            <div class="wrapper-row-one">
              <a class="home-link" href='#'>
                <img src="img/logo.svg" alt="Website Logo" id="logo" />
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
                <li class='nav__list__item'><a href='#projects'>Projects</a></li> <!-- Categories might switch -->
                <li class='nav__list__item'><a href='http://blog.richieblack.me'>Blog</a></li>
              </ul>
            </div> <!-- end wrapper -->
          </div>
        </nav>
      </header>

      <div class="wrapper">
        <main>

          <!--MAIN CONTENT -->
          @yield('content')
          <!--MAIN CONTENT -->

        </main>
      </div> <!-- wrapper -->
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
    @yield('js')
</body>
</html>
