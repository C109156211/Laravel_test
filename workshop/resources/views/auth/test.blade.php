<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

 <meta http-equiv="content-type" content="text/html; charset=utf-8">
 <meta http-equiv="x-ua-compatible" content="IE=edge">
 <meta name="author" content="SemiColonWeb">
 <meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

 <!-- Font Imports -->
 <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=PT+Serif:ital@0;1&display=swap" rel="stylesheet">
     -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=PT+Serif:ital@0;1&display=swap" rel="stylesheet">

 <!-- Core Style -->
 <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

 <!-- Font Icons -->
 <!-- <link rel="stylesheet" href="css/font-icons.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}">

 <!-- Custom CSS -->
 <!-- <link rel="stylesheet" href="css/custom.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Document Title
 ============================================= -->
 <title>Login - Layout 2 | Canvas</title>

</head>

<body class="stretched">

 <!-- Document Wrapper
 ============================================= -->
 <div id="wrapper">

  <!-- Page Title
  ============================================= -->
  <section class="page-title bg-transparent">
   <div class="container">
    <div class="page-title-row">

     <div class="page-title-content">
      <h1>My Account</h1>
     </div>

     <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item"><a href="#">Templates</a></li>
       <li class="breadcrumb-item active" aria-current="page">Login &amp; Register 2</li>
      </ol>
     </nav>

    </div>
   </div>
  </section><!-- .page-title end -->

  <!-- Content
  ============================================= -->
  <section id="content">
   <div class="content-wrap">
    <div class="container">

     <div class="mx-auto mb-0" id="tab-login-register" style="max-width: 500px;">

      <ul class="nav canvas-alt-tabs2 tabs nav-pills justify-content-center mb-3" id="canvas-tab-nav2" role="tablist">
       <li class="nav-item" role="presentation">
        <button class="nav-link active" id="tab-login-tab" data-bs-toggle="pill" data-bs-target="#tab-login"
         type="button" role="tab" aria-controls="tab-login" aria-selected="true">Login</button>
       </li>
       <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab-register-tab" data-bs-toggle="pill" data-bs-target="#tab-register" type="button"
         role="tab" aria-controls="tab-register" aria-selected="false">Register</button>
       </li>
      </ul>

      <div class="tab-content">
       <div class="tab-pane show active" id="tab-login" role="tabpanel" aria-labelledby="canvas-tab-login-tab"
        tabindex="0">
        <div class="card mb-0">
         <div class="card-body" style="padding: 40px;">
          <form id="login-form" name="login-form" class="mb-0" action="#" method="post">

           <h3>Login to your Account</h3>

           <div class="row">
            <div class="col-12 form-group">
             <label for="login-form-username">Username:</label>
             <input type="text" id="login-form-username" name="login-form-username" value="" class="form-control">
            </div>

            <div class="col-12 form-group">
             <label for="login-form-password">Password:</label>
             <input type="password" id="login-form-password" name="login-form-password" value="" class="form-control">
            </div>

            <div class="col-12 form-group">
             <div class="d-flex justify-content-between">
              <button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
              <a href="#">Forgot Password?</a>
             </div>
            </div>
           </div>

          </form>
         </div>
        </div>
       </div>

       <div class="tab-pane" id="tab-register" role="tabpanel" aria-labelledby="canvas-tab-register-tab"
        tabindex="0">
        <div class="card mb-0">
         <div class="card-body" style="padding: 40px;">
          <h3>Register for an Account</h3>

          <form id="register-form" name="register-form" class="row mb-0" action="#" method="post">

           <div class="col-12 form-group">
            <label for="register-form-name">Name:</label>
            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control">
           </div>

           <div class="col-12 form-group">
            <label for="register-form-email">Email Address:</label>
            <input type="text" id="register-form-email" name="register-form-email" value="" class="form-control">
           </div>

           <div class="col-12 form-group">
            <label for="register-form-username">Choose a Username:</label>
            <input type="text" id="register-form-username" name="register-form-username" value="" class="form-control">
           </div>

           <div class="col-12 form-group">
            <label for="register-form-phone">Phone:</label>
            <input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control">
           </div>

           <div class="col-12 form-group">
            <label for="register-form-password">Choose Password:</label>
            <input type="password" id="register-form-password" name="register-form-password" value="" class="form-control">
           </div>

           <div class="col-12 form-group">
            <label for="register-form-repassword">Re-enter Password:</label>
            <input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control">
           </div>

           <div class="col-12 form-group">
            <button class="button button-3d button-black m-0" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
           </div>

          </form>
         </div>
        </div>
       </div>

      </div>

     </div>

    </div>
   </div>
  </section><!-- #content end -->


 </div><!-- #wrapper end -->

 <!-- Go To Top
 ============================================= -->
 <div id="gotoTop" class="uil uil-angle-up"></div>

 <!-- JavaScripts
 ============================================= -->
 <script src="{{asset('assets/js/functions.js')}}"></script>

</body>
</html>