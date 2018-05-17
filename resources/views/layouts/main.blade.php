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
    <?php $home="http://www.richieblack.me"?>
    <div class="stickyFooter">
      <header id="top">
        <nav>
          <div class='nav__row-one'>
            <div class="wrapper-row-one">
              <a class="home-link" href="<?php echo $home; ?>">
                <svg id="logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="8.485185451185714 6.674214553520983 291.167 291.16700000000003" width="266.67" height="266.67">
                  <defs>
                    <path d="M282.65 290.34L15.99 290.34L15.99 23.67L272.78 23.67L272.78 223.67L188.04 223.67L143.47 157.01L188.04 157.01L188.04 90.34L102.44 90.34L102.44 234.83" id="d18dkHyrW6"></path>
                  </defs>
                  <g><g><g><use xlink:href="#d18dkHyrW6" opacity="1" fill-opacity="0" stroke="#ccdcff" stroke-width="15" stroke-opacity="1"></use></g></g></g>
                </svg>
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
                <li class='nav__list__item'><a href="<?php echo $home."#projects"; ?>">Projects</a></li> <!-- Categories might switch -->
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
