<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title> 
  
  </title>

  <!-- Get bootstrap -->
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">

  <link rel="stylesheet" href="Scripts/css/main.css">

  <!-- Chart Css and JScript -->
  <link rel="stylesheet" href="Scripts/css/Chart.min.css">
  <script src="Scripts/js/Chart.min.js"></script>
</head>

<body>
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right shadow" id="sidebar-wrapper">
      <div class="sidebar-heading bg-info" style="align-content: center;">

        <!-- User icon
        {% if session['username'] %}
        <a href="/account/{{ session['username'] }}">
          {% endif %}

          {% if session['username'] %}
          <img class="icon-shape-sr shadow" src="{{ url_for('static', filename=g.user_data.ImgRoute) }}" width="200px"
            height="200px">
          {% endif %}
          -->

          <!-- User name -->
          <div align="center" class="text-primary" id="username-lb" style="
                  font-weight: bold; font-size: 30px;
                  text-shadow: 2px 0 0 #fff,
                  -2px 0 0 #fff,
                  0 2px 0 #fff,
                  0 -2px 0 #fff,
                  1px 1px #fff,
                  -1px -1px 0 #fff,
                  1px -1px 0 #fff,
                  -1px 1px 0 #fff;">
            TestUser
          </div>

      </div>

      <hr class="bg-info">

      <!-- Canvas for the pie chart -->
      <div align="center"> <p class="h4 text-primary"> -Credits stats- </p> <canvas class="shadow text-dark" id="myChart" style="height: 150px; width: 150px;"></canvas> </div>

      <hr class="bg-success">

      <!-- Sidebar Buttons -->
      <div class="list-group list-group-flush">

        <!-- Entretainment -->
        <Button class="btn btn-success" style="height: 55px; margin: 5px; margin-bottom: 20px;"
          onclick="location.href = '/entertainment'">
          <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-controller" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M11.119 2.693c.904.19 1.75.495 2.235.98.407.408.779 1.05 1.094 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.815-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773a11.307 11.307 0 0 1-.739-.809c-.126-.147-.25-.291-.368-.422-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.422-.243.283-.494.576-.739.81-.398.378-.877.705-1.513.772a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772.486-.485 1.331-.79 2.235-.98.932-.196 2.03-.292 3.119-.292 1.089 0 2.187.096 3.119.292zm-6.032.979c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.505C4.861 9.97 5.978 9.026 8 9.026s3.139.943 3.965 1.855c.164.182.307.35.44.505.214.25.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z" />
            <path
              d="M11.5 6.026a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1 1a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1 1a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-7-2.5h1v3h-1v-3z" />
            <path
              d="M3.5 6.526h3v1h-3v-1zM3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .258.966l-1.932.518a.5.5 0 0 1-.612-.354zm9.976 0a.5.5 0 0 0-.353-.613l-1.932-.518a.5.5 0 1 0-.259.966l1.932.518a.5.5 0 0 0 .612-.354z" />
          </svg>
          - Entertainment
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
          </svg>
        </Button>

        <!-- Game of learn -->
        <Button class="btn btn-info" style="height: 55px; margin: 5px; margin-bottom: 20px;"
          onclick="location.href = '/learn'">
          <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-book" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869zM1 2.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V2.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 0 0 1 2.82z" />
            <path fill-rule="evenodd"
              d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z" />
          </svg>
          - Learning Games
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
          </svg>
        </Button>

        <!-- Social contribution -->
        <Button class="btn btn-danger" style="height: 55px; margin: 5px; margin-bottom: 20px;"
          onclick="location.href = '/socialcontribution'">
          <svg width="1.8em" height="1.8em" viewBox="0 0 16 16" class="bi bi-emoji-sunglasses" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path fill-rule="evenodd"
              d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM6.5 6.497V6.5h-1c0-.568.447-.947.862-1.154C6.807 5.123 7.387 5 8 5s1.193.123 1.638.346c.415.207.862.586.862 1.154h-1v-.003l-.003-.01a.213.213 0 0 0-.036-.053.86.86 0 0 0-.27-.194C8.91 6.1 8.49 6 8 6c-.491 0-.912.1-1.19.24a.86.86 0 0 0-.271.194.213.213 0 0 0-.036.054l-.003.01z" />
            <path
              d="M2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v1a2 2 0 0 1-2 2h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM9 5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-2-2V5z" />
          </svg>
          - Social Contribution
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
          </svg>
        </Button>

        <!-- Technical contribution -->
        <Button class="btn btn-dark" style="height: 55px; margin: 5px; margin-bottom: 20px;"
          onclick="location.href = '/technicalcontribution'">
          <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-hammer" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M9.812 1.952a.5.5 0 0 1-.312.89c-1.671 0-2.852.596-3.616 1.185L4.857 5.073V6.21a.5.5 0 0 1-.146.354L3.425 7.853a.5.5 0 0 1-.708 0L.146 5.274a.5.5 0 0 1 0-.706l1.286-1.29a.5.5 0 0 1 .354-.146H2.84C4.505 1.228 6.216.862 7.557 1.04a5.009 5.009 0 0 1 2.077.782l.178.129z" />
            <path fill-rule="evenodd"
              d="M6.012 3.5a.5.5 0 0 1 .359.165l9.146 8.646A.5.5 0 0 1 15.5 13L14 14.5a.5.5 0 0 1-.756-.056L4.598 5.297a.5.5 0 0 1 .048-.65l1-1a.5.5 0 0 1 .366-.147z" />
          </svg>
          - Technical Contribution
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
          </svg>
        </Button>
      </div>
    </div>


    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom shadow">
        <button class="btn btn-secondary" id="menu-toggle">
          <span class="navbar-toggler-icon"></span>
        </button>

        <span class="badge badge-warning align-bottom" style="margin-left: 10px; height: 30px;">
          <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-cash-stack" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z" />
            <path fill-rule="evenodd"
              d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z" />
            <path
              d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
          </svg>
          Credits: $$
        </span>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-primary" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <!-- Home button -->
            <li class="nav-item active text-primary">
              <a class="btn btn-secondary nav-link" onclick="location.href = '#'"
                style="margin-left: 5px; margin-top: 2px;">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house-fill text-primary" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                  <path fill-rule="evenodd"
                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg> <label class="text-primary"> Home </label>
              </a>
            </li>

            <!-- Shop button -->
            <li class="nav-item active">
              <a class="btn btn-warning nav-link" onclick="location.href = '/shop'"
                style="margin-left: 5px; margin-top: 2px;">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-shop text-primary" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zM3.12 1.175A.5.5 0 0 1 3.5 1h9a.5.5 0 0 1 .38.175l2.759 3.219A1.5 1.5 0 0 1 16 5.37v.13h-1v-.13a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.13H0v-.13a1.5 1.5 0 0 1 .361-.976l2.76-3.22z" />
                  <path
                    d="M2.375 6.875c.76 0 1.375-.616 1.375-1.375h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 1 0 2.75 0h1a2.375 2.375 0 0 1-4.25 1.458 2.371 2.371 0 0 1-1.875.917A2.37 2.37 0 0 1 8 6.958a2.37 2.37 0 0 1-1.875.917 2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.5h1c0 .76.616 1.375 1.375 1.375z" />
                  <path
                    d="M4.75 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                  <path fill-rule="evenodd"
                    d="M2 7.846V7H1v.437c.291.207.632.35 1 .409zm-1 .737c.311.14.647.232 1 .271V15H1V8.583zm13 .271a3.354 3.354 0 0 0 1-.27V15h-1V8.854zm1-1.417c-.291.207-.632.35-1 .409V7h1v.437zM3 9.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5V15H7v-5H4v5H3V9.5zm6 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4zm1 .5v3h2v-3h-2z" />
                </svg> <label class="text-primary"> Shop </label>
              </a>
            </li>

            <!-- More button -->
            <li class="nav-item dropdown active">
              <a class="btn btn-info nav-link text-primary" id="navbarDropdown" data-toggle="dropdown"
                style="margin-left: 5px; margin-top: 2px;">
                <label class="text-primary"> More </label>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill text-primary" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-primary" href="/account/TestUser">Hey soy un item :D</a>
                <a class="dropdown-item text-success" href="/account/TestUser">Yo tambien :0</a>
                <a class="dropdown-item text-danger" href="/login">Igual :3</a>
                <!--
                {% if not session['username'] %}
                <a class="dropdown-item text-primary" href="/singup">Sing Up</a>
                <a class="dropdown-item text-success" href="/login">Log In</a>

                {% else %}
                <a class="dropdown-item text-success" href="/account/TestUser">My Account</a>

                {% endif %}
                {% if session['username'] %}
                <div class="dropdown-divider bg-warning"></div>
                <a class="dropdown-item bg-danger text-light" href="/logout">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M4.354 11.354a.5.5 0 0 0 0-.708L1.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z" />
                    <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0 0 1h9a.5.5 0 0 0 .5-.5z" />
                    <path fill-rule="evenodd"
                      d="M14 13.5a1.5 1.5 0 0 0 1.5-1.5V4A1.5 1.5 0 0 0 14 2.5H7A1.5 1.5 0 0 0 5.5 4v1.5a.5.5 0 0 0 1 0V4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5v-1.5a.5.5 0 0 0-1 0V12A1.5 1.5 0 0 0 7 13.5h7z" />
                  </svg> Close session
                </a>
                {% endif %}
                -->
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <!-- Body Layout -->
        <div class="container pt-4">
          <!--
          -->
          <br>
        </div>
      </div>
    </div>
  </div>

  <!-- Self JScripts -->
  <script src="Scripts/js/main.js"></script>

  <!-- Bootstrap JScripts -->
  <script src="Scripts/js/jquery-3.5.1.min.js"></script>
  <script src="Scripts/js/popper.min.js"></script>
  <script src="Scripts/js/bootstrap.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>