<!DOCTYPE html>
<html lang="en">
<head>
  <title>BTS Solutions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="HTML5 website template">
  <meta name="keywords" content="BTS Solutions, encryption, steganography">
  <meta name="author" content="Nigussu Sima">
  <link rel="shortcut icon" type="image/png" href="assets/img/logo.png"/>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- notification for small viewports and landscape oriented smartphones -->
<div class="device-notification">
  <a class="device-notification--logo" href="#" onclick="return false">
    <img src="assets/img/logo.png" alt="BTS Solutions">
    <p>BTS Solutions</p>
  </a>
  <p class="device-notification--message">BTS Solutions has so much to offer that we must request you orient your device to portrait or find a larger screen. You won't be disappointed.</p>
</div>

<div class="perspective effect-rotate-left">
  <div class="container-m"><div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
        <header class="header">
          <a class="header--logo" href="#" onclick="return false">
            <img src="assets/img/logo.png" alt="BTS Solutions">
            <p>BTS Solutions</p>
          </a>
          <button class="header--cta cta">Work With US</button>
          <div class="header--nav-toggle">
            <span></span>
          </div>
        </header>
        <nav class="l-side-nav">
          <ul class="side-nav">
            <li class="is-active"><span>Home</span></li>
            <li><span>Platform</span></li>
            <li><span>Works</span></li>
            <li><span>Contact</span></li>
            <li><span>Work With US</span></li>
          </ul>
        </nav>
        <ul class="l-main-content main-content">
          <li class="l-section section section--is-active">
            <div class="intro">
              <div class="intro--banner">
                <h1>Our latest<br>Steganography<br>Project</h1>
                <button class="cta">Work With US
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                  <span class="btn-background"></span>
                </button>
                <img src="assets/img/front.png" alt="Welcome">
              </div>
              <div class="intro--options">
                <a href="#" onclick="return false">
                  <h3>Our platform</h3>
                  <p>Our platform executes Steganography along with bit encryption simultaneously.</p>
                </a>
                <a href="#" onclick="return false">
                  <h3>Message Encryption</h3>
                  <p>Our application allows you to encrypt message inside an image efficiently.</p>
                </a>
                <a href="#" onclick="return false">
                  <h3>Message Decryption</h3>
                  <p>Message decryption is performed by uploading the secret embedded image and analyzing it.</p>
                </a>
              </div>
            </div>
          </li>
          <li class="l-section section">
            <div class="about">
              <div class="about--banner">
                <h2>We<br>believe in<br>consistant<br>upgrade</h2>
                <a href="#" onclick="return false">Contact Us
                  <span>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                    </g>
                    </svg>
                  </span>
                </a>
                <img src="assets/img/about-visual.png" alt="About Us">
              </div>
              <div class="about--options">
                <a href="#" data-target="work1">
                  <h3>Encrypt</h3>
                </a>
                <a href="#" data-target="work">
                  <h3>Decrypt</h3>
                </a>
              </div>
            </div>
          </li>
          <li class="l-section section">
            <div class="work">
              <div class="row">
                <form id="work" class="col-md-12">
                  <h2>Decrypt Message</h2>
                  <div class="pt-2">
                      <div class="form-group">
                        <input type="file" id="file" name="file" class="form-control bg-transparent text-white border-0" required="required">
                      </div>
                      <div class="form-group d-none">
                        <textarea id="decrypted" rows="10" cols="100%" class="form-control" disabled="disabled"></textarea>
                      </div>
                      <div class="form-group text-center mt-2">
                        <input type="button" id="work_id" class="btn btn-main mr-2" value="Submit">
                        <input type="button" id="reset_id" class="btn btn-main ml-2" value="Reset">
                      </div>
                  </div>
                </form>
                <form id="work1" class="col-md-12" method="POST" action="encrypt.php">
                  <h2>Encrypt Message</h2>
                  <div class="tab work--lockup mb-5">
                    <div class="form-group">
                      <textarea id="encrypted" name="encrypted" rows="10" cols="100%" class="form-control" required="required"></textarea>
                    </div>
                  </div>
                  <div class="tab work--lockup">
                    <ul class="slider">
                      <li class="slider--item slider--item-left">
                        <a href="#" onclick="return false">
                          <div class="slider--item-image">
                            <img src="assets/img/work-victory.jpg" alt="Victory">
                          </div>
                        </a>
                      </li>
                      <li class="slider--item slider--item-center">
                        <a href="#" onclick="return false">
                          <div class="slider--item-image">
                            <img src="assets/img/work-metiew-smith.jpg" alt="Structure">
                          </div>
                        </a>
                      </li>
                      <li class="slider--item slider--item-right">
                        <a href="#" onclick="return false">
                          <div class="slider--item-image">
                            <img src="assets/img/ddd.png" alt="Abstract">
                          </div>
                        </a>
                      </li>
                      <li class="slider--item">
                        <a href="#" onclick="return false">
                          <div class="slider--item-image">
                            <img src="assets/img/about-history.jpg" alt="History">
                          </div>
                        </a>
                      </li>
                      <li class="slider--item">
                        <a href="#" onclick="return false">
                          <div class="slider--item-image">
                            <img src="assets/img/about-winners.jpg" alt="Winners">
                          </div>
                        </a>
                      </li>
                      <li class="slider--item">
                        <a href="#" onclick="return false">
                          <div class="slider--item-image">
                            <img src="assets/img/about-philosophy.jpg" alt="Philosophy">
                          </div>
                        </a>
                      </li>
                    </ul>
                    <div class="slider--prev">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                      <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                        <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                        c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                        c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z"/>
                      </g>
                      </svg>
                    </div>
                    <div class="slider--next">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                      <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                        <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                      </g>
                      </svg>
                    </div>
                  </div>
                  <div class="text-center mt-5 pt-3">
                    <button type="button" class="btn btn-md btn-danger" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" class="btn btn-md btn-main" id="nextBtn" onclick="nextPrev(1)">Next</button>
                  </div>
                  <div class="text-center" style="margin-top:30px;">
                    <span class="step"></span>
                    <span class="step"></span>
                  </div>
                </form>
              </div>
            </div>
          </li>
          <li class="l-section section">
            <div class="contact">
              <div class="contact--lockup">
                <div class="modal-m">
                  <div class="modal--information">
                    <p>Addis Ababa, Ethiopia</p>
                    <a href="mailto:info@btssolutions.com.et">info@btssolutions.com.et</a>
                    <a href="tel:+251911870418">+251 967 303605</a>
                  </div>
                  <ul class="modal--options">
                    <li><a href="https://btssolutions.com.et" target="_blank">Our Website</a></li>
                    <li><a href="#" onclick="return false">Our Partners</a></li>
                    <li><a href="mailto:info@btssolutions.com.et">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="l-section section">
            <div class="hire">
              <h2>You want us to do</h2>
              <!-- checkout formspree.io for easy form setup -->
              <form class="work-request">
                <div class="work-request--options">
                  <span class="options-a">
                    <input id="opt-1" type="checkbox" value="app design">
                    <label for="opt-1">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Graphic Design
                    </label>
                    <input id="opt-2" type="checkbox" value="graphic design">
                    <label for="opt-2">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      UX Design
                    </label>
                    <input id="opt-3" type="checkbox" value="motion design">
                    <label for="opt-3">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Web design
                    </label>
                  </span>
                  <span class="options-b">
                    <input id="opt-4" type="checkbox" value="ux design">
                    <label for="opt-4">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Website development
                    </label>
                    <input id="opt-5" type="checkbox" value="webdesign">
                    <label for="opt-5">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Web Application
                    </label>
                    <input id="opt-6" type="checkbox" value="marketing">
                    <label for="opt-6">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Software Development
                    </label>
                  </span>
                </div>
                <div class="work-request--information">
                  <div class="information-name">
                    <input id="name" type="text" spellcheck="false">
                    <label for="name">Name</label>
                  </div>
                  <div class="information-email">
                    <input id="email" type="email" spellcheck="false">
                    <label for="email">Email</label>
                  </div>
                </div>
                <input type="submit" value="Send Request">
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <ul class="outer-nav">
    <li class="is-active">Home</li>
    <li>Platform</li>
    <li>Works</li>
    <li>Contact</li>
    <li>Work With US</li>
  </ul>
</div>

<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/functions-min.js"></script>
<script src="assets/js/functions.js"></script>
<script type="text/javascript">
$('#work').css('display','none');
$('#work1').css('display','none');

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    img_attr = $('.slider .slider--item-center').find('img').attr('src');
    encrypted = $('#encrypted').val();
    $.ajax({
         type: "POST",
         url: "encrypt.php",
         data: {img_attr:img_attr,encrypted:encrypted},
         success: function (response) {
             alert(response);
         }
     });
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("textarea");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

$('#work_id').click(function () {

  var fd = new FormData();
  var files = $('#file')[0].files;
  
  // Check file selected or not
  if(files.length > 0 ){
     fd.append('file',files[0]);

     $.ajax({
        url: 'decrypt.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
          //alert(response);
          $('#work .form-group').removeClass('d-none');
          $('#work #decrypted').val(response);
        },
     });
  }

});

$('#reset_id').click(function () {

  $('#work #file').val('');
  $('#work #decrypted').val('');
  $('#work .form-group').eq(1).addClass('d-none');

});
</script>
</body>
</html>
