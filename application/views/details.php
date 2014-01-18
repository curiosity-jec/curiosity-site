<!DOCTYPE html>
<html lang="en">
<head>
  <title>Notices: Curiosity Club, Jabalpur Engineering College</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootswatch.min.css">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="assets/bower_components/html5shiv/dist/html5shiv.js"></script>
<script src="assets/bower_components/respond/dest/respond.min.js"></script>
<![endif]-->
</head>
<body>
  <script src="assets/js/bsa.js"></script>

  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="assets/" class="navbar-brand">Curiosity</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Home</a>
            <ul class="dropdown-menu" aria-labelledby="themes">
              <li><a tabindex="-1" href="#">About</a></li>
              <li><a tabindex="-1" href="#">Vision</a></li>
              <li><a tabindex="-1" href="#">Workshops</a></li>
            </ul>
          </li>
          <li>
            <a href="assets/notice.php">Notices</a>
          </li>
          <li>
            <a href="#">Workshops</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Member Login</a></li>
        </ul>
      </div>
    </div>
  </div>


  <!-- Breadcrumbs -->
  <div class="container">
    <div class="row">
      <ul class="breadcrumb" style="margin-top: 3%;">
        <li><a href="assets/">Home</a><span class="divider"></span></li>
        <li><a href="assets/workshop.php">Workshops</a><span class="divider"></span></li>
        <li class="active">Workshop Title</li>
      </ul>
    </div>
  </div> 

  <!-- Main Info and regitration -->
  <div class="container">
    <div class="row section-tout" style="padding-left: 1%;">
      <div class="col-md-7">
        <h1 style="margin-top: -3%;">Workshop Title</h1>
        <p>Introduction to the workshop</p>
      </div>

      <!-- Registration Form -->
      <div class="col-md-5" style="background-color: #fff; margin-top:-5.3%;">
              <form class="bs-example form-horizontal">
                <fieldset>
                  <legend>Are You Interested?</legend>
                   <div class="form-group">
                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                      <input type="name" class="form-control" id="inputName" placeholder="Mayank Kumar">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Gender</label>
                    <div class="col-lg-10">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Male" checked="">
                          Male
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="Female">
                          Female
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEnroll" class="col-lg-2 control-label">Enrollment Number</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEnroll" placeholder="0201CS111047">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPhone" class="col-lg-2 control-label">Mobile</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputPhone" placeholder="9424000111">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Select Branch</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="select">
                        <option>Computer Science and Engineering</option>
                        <option>Information Technology</option>
                        <option>Mechanical Engineering</option>
                        <option>Industrial Production</option>
                        <option>Electrical Engineering</option>
                        <option>Mechanical Engineering</option>
                        <option>Electronics and Communication Engineering</option>
                      </select>
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Why are you interested</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" rows="3" id="textArea"></textarea>
                      <span class="help-block">A short description about why you wish to take this workshop.</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button class="btn btn-default">Cancel</button> 
                      <button type="submit" class="btn btn-primary">Submit</button> 
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
    <!--Info Table-->
    <div class="row">
      <div class="span8">
        <table class="table table-bordered">
          <tbody>
          <tr style="background-color:#B0C4DE">
            <th> Start Date </th>
            <th> Location </th>
            <th> Batch </th>
            <th> Instructor </th>
            <th> Register </th>
          </tr>
          <tr style="background-color: #95a5a6;">
            <td> 18-01-2014 at 11:00 AM </td>
            <td> JEC IT Conference Hall </td>
            <td> MHC03 </td>
            <td> Sandeep Karanth </td>
            <td> <a href="#myModal" role="button"> <button class="btn-small btn-success" >Enroll now </button></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div> 
     
      </div>
    </div>
  </div>

  <!-- Instructor Details --> 
    <div class="container" style="padding-top: 2%;">
        <div class="row section-tout" style="padding-left: 1%;">
            <h2 style=" margin-top: -3%;">Instructor</h2>
            <p>About the intructor</p>
        </div>
      </div>

  <!-- Curriculum --> 
    <div class="container" style="padding-top: 2%;">
        <div class="row section-tout" style="padding-left: 1%;">
            <h2 style=" margin-top: -3%;">Curriculum for the workshop</h2>
            <p>About the intructor</p>
        </div>
      </div>    
  
 
    <!-- Footer -->
    <div class="container">
      <footer>
        <div class="row">
          <div class="col-lg-12">            
            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
              <li><a href="">Home</a></li>
              <li><a href="">Notices</a></li>
              <li><a href="">Worksops</a></li>
              <li><a href="">Facebook</a></li>
              <li><a href="">Twitter</a></li>
            </ul>
            <p>Managed by <a href="http://jec-jabalpur.org/curiosity/">The Curiosity Club</a>. Contact us at <a href="mailto:curiosity@jec-jabalpur.org">hello@thomaspark.me</a>.</p>
            <p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a>.</p>
            <p>Based on <a href="http://getbootstrap.com">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts">Google</a>. Favicon by <a href="https://twitter.com/geraldhiller">Gerald Hiller</a>.</p>
          </div>
        </div>
      </footer>
    </div>

    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootswatch.js"></script>
    <script type="text/javascript">
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script>
  </body>
  </html>
