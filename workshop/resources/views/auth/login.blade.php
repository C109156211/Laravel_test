
<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master_login
') 

<!-- 傳送資料到母模板，並指定變數為 title --> 
@section('title', $title) 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 


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




@endsection 
