<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" class="ui" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.0.8/semantic.css">

    <title>Hospital Demo - BackEnd</title>

  <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        /* margin-top: 1.5em; */
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }


  </style>

  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.0.8/semantic.js"></script>

  <script>
    $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
        once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
              },
              onBottomPassedReverse: function() {
                $('.fixed.menu').transition('fade out');
              }
            })
            ;

          // create sidebar and attach to menu open
          $('.ui.sidebar')
            .sidebar('attach events', '.toc.item')
            ;

        });
  </script>
</head>


<body class="pushable">

  <div class="pusher">
    <div class="ui inverted vertical masthead aligned segment">
      @section('menu-logout')
        <div class="ui container center">
          <div class="ui large secondary inverted pointing menu">
            <a class="toc item">
              <i class="sidebar icon"></i>
            </a>
            <a class="active item">Home</a>
            <div class="right item">
              <a class="ui inverted button">Log in</a>
              <a class="ui inverted button">Close Session</a>
            </div>
          </div>
        </div>
      @show

      @yield('presentation')

      @yield('content')

    </div>


    @section('footer')
      <div class="ui inverted vertical footer segment">
        <div class="ui container">
          <div class="ui stackable inverted divided equal height stackable grid">
            <div class="three wide column">
              <h4 class="ui inverted header">About</h4>
              <div class="ui inverted link list">
                <a href="http://semantic-ui.com/examples/homepage.html#" class="item">About this app</a>
                <a href="http://semantic-ui.com/examples/homepage.html#" class="item">Hire me</a>
              </div>
            </div>
            <div class="three wide column">
              <h4 class="ui inverted header">More</h4>
              <div class="ui inverted link list">
                <a href="/home/cloneit" class="item">How to clone it</a>
              </div>
            </div>
            <div class="seven wide column">
              <h4 class="ui inverted header">DoctorTck</h4>
              <p>Welcome to the DoctorTck Administration Demo App. This app show how to use PHP, Laravel5, NodeJS, AngularJS, Express, Semantic UI and MongoDB. 
                <a href="/home/cloneit">Click here for more information</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    @show
  </div>

</body>
</html>
