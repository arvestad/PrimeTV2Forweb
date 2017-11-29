      <html xmlns="http://www.w3.org/1999/xhtml" lang="en">
      <head>

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">

          <title>PrimeTV2ForWeb</title>

          <!-- Bootstrap core CSS -->
          <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

          <!-- Custom fonts for this template -->
          <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
          <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
          <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
          <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

          <!-- Custom styles for this template -->
          <link href="css/agency.min.css" rel="stylesheet">

          <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
          <!-- Show/hide file input -->
          <script src="inputToPrime.js" type="text/javascript"></script>
          <!-- Run the program -->
           <script src="runProgram.js" type="text/javascript"></script> 
          <!-- Run the program with example guesttree and hosttree -->
          <script src="runExampleProgram.js" type="text/javascript"></script>
        </head>

        <body id="page-top"> 

          <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="#page-top">PrimeTV2ForWeb</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#uploadFile">Upload files</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- Header -->
          <header class="masthead">
            <div class="container">
              <div class="intro-text">
                <div class="intro-lead-in">Reconcilation of trees</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#uploadFile">START</a>
              </div>
            </div>
          </header>

           <script type="text/javascript">

    //Direct to output side
      function render() {
        window.location.href="render.php";
      }
      //Show options
      function showOption() {
        var option = document.getElementById("optionButton");
        if(option.innerHTML == "Select options") {
          option.innerHTML = "Close options";
          $('.options').show();
          $('#options').css("display", "inline-block");
        }
        else {
          option.innerHTML = "Select options";
          $('.options').hide();
        }

        }
      //Show time options
      function showTime() {
        var time = document.getElementById("timeButton");
        if(time.innerHTML == "Time options") {
          time.innerHTML = "Close time options";
          $('#timeOption').show();
        } else {
          time.innerHTML = "Time options";
          $('#timeOption').hide();
        }
      }

          //Show font options
      function showFont() {
        var font = document.getElementById("fontButton");
        if(font.innerHTML == "Font options") {
          font.innerHTML = "Close font options";
          $('#fontOption').show();
        } else {
          font.innerHTML = "Font options";
          $('#fontOption').hide();
        }
      }


          //Show activate options
      function showActivate() {
        var activate = document.getElementById("activateButton");
        if(activate.innerHTML == "Activate options") {
          activate.innerHTML = "Close activate options";
          $('#activateOption').show();
        } else {
          activate.innerHTML = "Activate options";
          $('#activateOption').hide();
        }
  }

          //Show text input if textOnTop is selected
      function showTextInput() {
        var time = document.getElementById("activateButton");
        if(time.innerHTML == "Activate options") {
          time.innerHTML = "Close activate options";
          $('#activateOption').show();
        } else {
          time.innerHTML = "Activate options";
          $('#activateOption').hide();
        }
      }

        //Show text input if textOnTop is selected
        function showTextInput() {
        var checked = document.getElementById("textOnTop").checked;
        //alert("checked=" + checked);
        if(checked) {
          $('#textInput').show();
      }
    }

    // For reloading the page so the Example button works after going back with browser back button
    window.onpageshow = function(event) {
      if (event.persisted) {
        window.location.reload(); 
      }
    }
        </script>

          <section id="uploadFile">
                <div style="display: inline-block; margin: 100px;">
                <div style="padding: 0px 100px ">
                  <h2 class="section-heading text-uppercase">Upload files</h2>
                  <h3 class="section-subheading text-muted">Upload files in Newick format or test the program with example data.</h3>
                  
              <form action="" method="post" enctype="multipart/form-data">
                <input type="radio" name="inputRb" id="rbDef" checked="checked" value="def"/> With reconciliation<br/>
                <input type="radio" name="inputRb" id="rbAlt" value="alt" /> Without reconciliation<br/>
      </form>
      <button type="button" name="optionButton" id="optionButton" onclick="showOption();">Select options</button>
      </div>
      

      <!-- Används för att form inte ska redirecta till filePath.php -->
      <iframe name="formSending" id="formIframe" style="display: none;"></iframe>

      <form action="filePath.php" method="post" enctype="multipart/form-data" id="uploadFilesID" target="formSending">
      <div id="divDef" style="padding:16px 16px;">
        <div style="display: inline-block; padding:100px 100px; " id="uploads" >
          <h5>Select your guest tree file </h5>
          <input name="guesttree" type="file" id="guest"/>

          <h5>Select your host tree file </h5>
          <input name="arttree" type="file" id="art"/>
        

      <div id="divAlt" style="padding:0 16px;">
        <h5>Select your map file</h5>
        <input name="mapfile" type="file" id="mapfile"/>
      </div>
      <div>
      <input type="submit" name="uploadFiles" value="Upload files" style="padding: 10 10px; margin: 16 16px; background: white"/>

      <button type="button" name="btnRunProgram" style="padding: 10 10px; margin: 16 16px; background: white;" 
            onclick="runProgram();">Run program!</button> 
      </div>
      </form>
      <h6> Or try the program with example data: </h6>
      <button type="button" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" name="exampleButton" onclick="runExampleProgram();">Example data</button>
      </div>
       <div style="display: none;" class="options" id="options";>
      <h6>Select color: </h6>
        <select name="color" id="color" class="colorSelect";>
          <option value="blue">Blue</option>
          <option value="kth">KTH</option>
          <option value="su">SU</option>
          <option value="grey">Grey</option>
           <option value="mono">Mono</option>
            <option value="yellow">Yellow</option>
        </select><br/><br/>
          <fieldset>
          <div>
          <input type="checkbox" name="LGTcost" id="LGTcost" value="LGT cost">
          <label for="coding">Number of duplications and transfers used</label>
          </div>
        </fieldset>
         <button type="button" name="timeButton" id="timeButton" onclick="showTime();">Time options</button>
        <div id="timeOption" style="display: none;">
        <h6>Time options: (hold down cmd/shift for multiple chose) </h6>
        <select name="time" id="time" multiple>
          <option value="noTimeScale">No time scale</option>
          <option value="hostedgesByTime">Annotate host edges by their time</option>
          <option value="noTime">No time at all</option>
        </select>
        </div>
        <br/><br/>
         <button type="button" name="fontButton" id="fontButton" onclick="showFont();">Font options</button>
         <div id="fontOption" style="display: none;">
        <h6>Select guest tree font:</h6>
        <select name="guestFont" id="GuestFont">
          <option value="serif">Serif</option>
          <option value="sansSerif">Sans-serif</option>
          <option value="Purisa">Purisa</option>
          <option value="Sans">Sans</option>
          <option value="monospace">Monospace</option>
        </select>
          <h6>Select host tree font:</h6>
        <select name="hostFont" id="hostFont">
          <option value="serif">Serif</option>
          <option value="sansSerif">Sans-serif</option>
          <option value="Purisa">Purisa</option>
          <option value="Sans">Sans</option>
          <option value="monospace">Monospace</option>
        </select>
          <h6>Select all fonts:</h6>
        <select name="allFont" id="allFont">
          <option value="serif">Serif</option>
          <option value="sansSerif">Sans-serif</option>
          <option value="Purisa">Purisa</option>
          <option value="Sans">Sans</option>
          <option value="monospace">Monospace</option>
        </select>
        </div>
         <br/><br/>
         <button type="button" name="activateButton" id="activateButton" onclick="showActivate();">Activate options</button>
         <div id="activateOption" style="display: none;">
        <fieldset>
          <legend>Activate options:</legend>
          <div>
          <input type="checkbox" name="activateLegend" id="activateLegend" value="legend">
          <label for="coding">Activate the legend</label>
          </div>
          <div>
          <input type="checkbox" name="activateHeader" id="activateHeader" value="header">
          <label for="coding">Activate the header</label>
          </div>
          <div id="textOnTopDiv">
          <input type="checkbox" name="textOnTop" id="textOnTop" value="textOnTop" onclick="showTextInput();">
          <label for="coding">Include the text on top of the image</label>
          <div style="display: none;" id="textInput">
           <input type="text" name="textOnTopInput" id="textOnTopInput" value="Write text that will appear on top of the image">
           </div>
          </div>
        </fieldset>
          </div>

          </section>


      </div>
            </div>
          </section>


          <!-- test about -->
             <!-- Page Header -->
        <section id="about">
        <header class="masthead" style="background-image: url('img/about-bg.jpg')">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                  <h1 style="padding: 100px 100px 100px 100px;">About primeTV2ForWeb</h1>
                </div>
              </div>
            </div>
          </div>
        </header>

        <!-- Main Content -->
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <p>This program is created by Alexandra Onegård as a degree project, along with Lars Arvestad as supervisior and who is the one that created the original program primeTV.</p>
            </div>
          </div>
        </div>
        </section>

          <!-- Contact -->
          <section id="contact">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase" style="color: #000">Contact Us</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <form id="contactForm" name="sentMessage" novalidate>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                          <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                          <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                          <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                          <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>

          <!-- Footer -->
              <footer>
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <span class="copyright">Copyright &copy; PrimeTV2ForWeb 2017</span>
                    </div>
                    <div class="col-md-4">
                      <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                          <a href="https://github.com/alexandraone/PrimeTV2Forweb">
                            <i class="fa fa-github"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </footer>

          <!-- Bootstrap core JavaScript -->
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

          <!-- Plugin JavaScript -->
          <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

          <!-- Contact form JavaScript -->
          <script src="js/jqBootstrapValidation.js"></script>
          <script src="js/contact_me.js"></script>

          <!-- Custom scripts for this template -->
          <script src="js/agency.min.js"></script>
        </body>
      </html>
