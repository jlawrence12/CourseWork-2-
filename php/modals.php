<div class='modal fade' id='loginModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'      aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' title='Close modal'  aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'>Login</h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>
               <div id="signInAlert"></div>
                <form id="logIn-form" >
                  <div id="logIn-Group" class="form-group">
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-user'></i>
                     <!-- Create a text field  "username"   -->
                     <input type='text' id="emailLog" placeholder='Enter email'> <br> <br>
                     <!-- Display password icon -->
                     <i class='glyphicon glyphicon-lock'></i> 
                     <!-- Create a text field "password"  -->
                     <input type='password' id="passwordLoginIn" id="passwordLogIn" placeholder='Enter Password'> <br> <br>
                     
                     <!-- Link the register modal to the text  -->
                     <p> No account? <a href='#' data-toggle='modal' data-target='#registerModal'> Join us </a></p>
                  </div>
                     <!-- Create a button for the user to click to log in -->
                  <button class='btn btn-md btn-primary' id="logInButton" type='submit'>Login <i class='glyphicon glyphicon-log-in'> </i></button>
               </form>
               <!-- Close modal body -->
            </div>
            <!-- Close the modal-content -->
         </div>
         <!-- Close the modal-content dialog modal sm -->
      </div>
      <!-- Close the modal-content dialog modal sm --> 
   </div>
   <!-- Close entire modal -->
</div>
<!-- The below code will display the register Modal -->
<div id='registerModal' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
   <!-- Open div classes to establish the register modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' title='Close modal' aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'>Register</h2>
               <!-- Close modal-header  -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>
               <!-- Open a form to the body -->
               <div id="registerAlert"></div>
               <form id="registerForm" >
                  <div id="firstName-Group" class="form-group">
                        <!--Display username icon -->
                     <i class='glyphicon glyphicon-user'></i>
                     <!-- Create a text field "firstname"  -->
                     <input type='text' onkeyup='checkIfText(this);' maxlength='15' id='firstName' placeholder='Firstname'> 
                  </div>
                  <div id="surName-Group" class="form-group">
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-user'></i>
                     <!-- Create a text field "surname"   -->
                     <input type='text' onkeyup='checkIfText(this);' maxlength='15' id="surName"  name='surname' placeholder='Surname'> 
                  </div>
                  <div id="email-Group" class="form-group">
                     <!--Display email icon -->
                     <i class='glyphicon glyphicon-envelope'></i>
                     <!-- Create a text field "email"  -->
                     <input type='text' id="emailReg" data-validation='email' placeholder='Email address'><div class="status" id="status"></div> <span id='error_email' class='text-danger'></span> 
                     <!--Display mobile phone icon -->
                  </div>
                  <div id="phoneNumber-Group" class="form-group">
                     <i class='glyphicon glyphicon-phone'></i>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' onkeyup='checkPhoneNumber(this)' id='phoneNumber' name='number' maxlength="11" placeholder='Phone number'> 
                  </div>
                    <div id="dateOfBirth-Group" class="form-group">
                      <span class="glyphicon glyphicon-calendar"></span>
                     <!-- Create a text field "phonenumber"   -->
                     <input type="text" id="datepicker" placeholder="Choose">
                  </div>
                    <div id="address1-Group" class="form-group">
                     <span class="glyphicon glyphicon-home"></span>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='phoneNumber' maxlength="11" placeholder='Address 1'> 
                  </div>
                    <div id="address2-Group" class="form-group">
                     <span class="glyphicon glyphicon-home"></span>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='phoneNumber' name='number' maxlength="11" placeholder='Address 2'> 
                  </div>
                    <div id="city-Group" class="form-group">
                     <i class='glyphicon glyphicon-phone'></i>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='phoneNumber' name='number' maxlength="11" placeholder='City'> 
                  </div>
                   <div id="postCode-Group" class="form-group">
                     <i class='glyphicon glyphicon-phone'></i>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='phoneNumber' name='number' maxlength="11" placeholder='Postcode'> 
                   </div>
                  <div id="password-Group" class="form-group">
                     <!--Display password lock icon -->
                     <i class='glyphicon glyphicon-lock'></i>
                     <!-- Create a text field "password" -->
                     <input type='password' id="password" minlength='4' maxlength='16' name='password' placeholder='Password'> <br><span id="passstrength"></span> <br> 
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-lock'></i>
                     <!-- Create a text field "reEnterPassword" -->
                     <input type='password' id="confirmPassword" minlength='4' maxlength='16'  name='confirmPassword' placeholder='Confirm password'> 

                     <p> Already a member? <a href='#' data-toggle='modal' data-target='#registerModal'> Log in </a></p>
                  </div>
                 
                  <!-- Create a button when clicked, creates an account for the new user -->
                  <button class='btn btn-md btn-primary' id="registerButton" type='submit'>
                     Sign up
                     <!--Display tick icon on the button -->
                     <i class='glyphicon glyphicon-ok'></i>
                  </button>
                  <!--Display username icon -->
                  <button class='btn btn-md btn-primary' value="Reset" id="reset" type='reset'>
                     Reset
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-remove'></i>
                  </button>

                  <!-- Close form -->
               </form>
               <!-- Close modal body -->
            </div>
            <!-- Close the modal-content -->
         </div>
         <!-- Close the modal-content dialog modal sm -->
      </div>
      <!-- Close the modal-content dialog modal sm --> 
   </div>
   <!-- Close entire modal -->
</div>

<div class='modal fade' id='beatsInfoModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' title='Close modal'  aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'> Beats </h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>
              <div id="content" class="container">
                <div class="container">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-2">
                            <img src="beats.png" width="110px">
                        </div>
                        <div class="col-md-3">
                            <h2> Beats Studio wireless Over-Ear</h2>
                            <strong>£199.99</strong><br>
                            <br>
                            <!-- Button to activate Trailer in a lightbox -->
                            <a class="btn btn-danger venobox venoboxvid vbox-item btn-sm" data-gall="gall-video" data-type="youtube" onclick="window.open('https://www.youtube.com/watch?v=ERuONiY5Gz0')"><i class="fa fa-youtube"></i> Watch product video</a><br><br>
                            <p class="text-success"><strong>5</strong> in stock</p>
                            <a class="btn btn-success" href="">Add to basket</a> <br> <br>

                            <div class="row">

                    <div class="col-md-20 col-md-offset-2" id="productDescDetailTabs">

                      <!-- Tab Navigator -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                        <li role="presentation"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Reviews</a></li>
                    </ul>

                    <br>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <!-- Description -->
                      <div role="tabpanel" class="tab-pane active" id="description">

                          <p> With Beats by Dr. Dre Studio Wireless Headphones, you can go without wires and enjoy adaptive noise cancellation. With a 9 metre Bluetooth limit, you can enjoy free roam and take calls, skip songs and change the volume using just the headphones.</p>
  
                      </div>
                     
                      <div role="tabpanel" class="tab-pane">
                       <table class="table table-striped">
                           <tr>
                               <th> James</th>
                               <td> Great sounds <small class="text-muted">&#9733; &#9733; &#9733; &#9733;&#9734;</small></td>
                           </tr>
                           <tr>
                               <th>Karen</th>
                               <td> Very Comfortable <small class="text-muted">&#9733; &#9733; &#9733; &#9733;&#9733;</small></td>
                           </tr>
                           <tr>
                               <th>Jordan</th>
                               <td> Sound quality is good but too expensive! <small class="text-muted">&#9733; &#9733; &#9733; &#9734;&#9734;</small></td>
                           </tr>
                       </table>
                   </div>
               </div>
           </div>
       </div>
     </div>
                           
               <!-- Close modal body -->
            </div>
            <!-- Close the modal-content -->
         </div>
         <!-- Close the modal-content dialog modal sm -->
      </div>
      <!-- Close the modal-content dialog modal sm --> 
   </div>
 </div>
   <!-- Close entire modal -->
</div>
</div>
</div>


<div class='modal fade' id='bowseInfoModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'      aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' title='Close modal'  aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'> Bowse & Wilkins</h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>

              <div id="content" class="container">
                <div class="container">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-2">
                            <img src="bowse.png" width="110px">
                        </div>
              
                        <div class="col-md-3">
                            <h2> Bowers & Wilkins P9 Signature Over-Ear </h2>
                            <strong>£699.99</strong><br>
                            <br>
                            <!-- Button to activate Trailer in a lightbox -->
                            <a class="btn btn-danger venobox venoboxvid vbox-item btn-sm" data-gall="gall-video" data-type="youtube" onclick="window.open('https://www.youtube.com/watch?v=ecyIVx8Y4ZM')"><i class="fa fa-youtube"></i> Watch product video</a><br><br>
                            <p class="text-danger"><strong>1</strong> in stock</p>
                            <a class="btn btn-success" href="">Add to basket</a> <br> <br>

                            <div class="row">

                    <div class="col-md-20 col-md-offset-2" id="productDescDetailTabs">
                      <!-- Tab Navigator -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                        <li role="presentation"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Reviews</a></li>
                    </ul>

                    <br>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <!-- Description -->
                      <div role="tabpanel" class="tab-pane active" id="description">
                       <p> P9 Signature, Bowers & Wilkins’ largest over-ear headphone, exemplifies all of the acoustic and design innovation skills they have amassed in their fifty year journey. They raise the bar of sound performance with the latest technological developments. </p>
                      </div>
                     
                      <div role="tabpanel" class="tab-pane" id="details">
                       <table class="table table-striped">
                           <tr>
                               <th> James</th>
                               <td> Great sounds <small class="text-muted">&#9733; &#9733; &#9733; &#9733;&#9734;</small></td>
                           </tr>
                           <tr>
                               <th>Karen</th>
                               <td> Very Comfortable <small class="text-muted">&#9733; &#9733; &#9733; &#9733;&#9733;</small></td>
                           </tr>
                           <tr>
                               <th>Jordan</th>
                               <td> Sound quality is good but too expensive! <small class="text-muted">&#9733; &#9733; &#9733; &#9734;&#9734;</small></td>
                           </tr>
                       </table>
                   </div>
               </div>
           </div>
       </div>
     </div>
                           
               <!-- Close modal body -->
            </div>
            <!-- Close the modal-content -->
         </div>
         <!-- Close the modal-content dialog modal sm -->
      </div>
      <!-- Close the modal-content dialog modal sm --> 
   </div>
 </div>
   <!-- Close entire modal -->
</div>
</div>
</div>

<div class='modal fade' id='boseInfoModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'      aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' title='Close modal'  aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'> Bose </h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>
              <div id="content" class="container">
                <div class="container">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-2">
                            <img src="bose.png" width="110px">
                        </div>
                        <div class="col-md-3">
                            <h2> Bose QuietComfort QC35 II Over-Ear</h2>
                            <strong>£329.95</strong><br>
                            <br>
                            <!-- Button to activate Trailer in a lightbox -->
                            <a class="btn btn-danger venobox venoboxvid vbox-item btn-sm" data-gall="gall-video" data-type="youtube" onclick="window.open('https://www.youtube.com/watch?v=jhkbbLpKL8g')"><i class="fa fa-youtube"></i> Watch product video</a><br><br>
                            <p class="text-success"><strong>5</strong> in stock</p>
                            <a class="btn btn-success" href="">Add to basket</a> <br> <br>
                  <div class="row">
                    <div class="col-md-20 col-md-offset-2" id="productDescDetailTabs">
                      <!-- Tab Navigator -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                        <li role="presentation"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Reviews</a></li>
                    </ul>

                    <br>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <!-- Description -->
                      <div role="tabpanel" class="tab-pane active" id="description">

                        <p>QuietComfort 35 Wireless Headphones II are engineered with world-class noise cancellation. And now they're even better. With your Google Assistant built in, you can control music, send & receive texts, and get answers using just your voice. </p>
                      </div>
                     
                      <div role="tabpanel" class="tab-pane" id="details">
                       <table class="table table-striped">
                           <tr>
                               <th> James</th>
                               <td> Great sounds <small class="text-muted">&#9733; &#9733; &#9733; &#9733;&#9734;</small></td>
                           </tr>
                           <tr>
                               <th>Karen</th>
                               <td> Very Comfortable <small class="text-muted">&#9733; &#9733; &#9733; &#9733;&#9733;</small></td>
                           </tr>
                           <tr>
                               <th>Jordan</th>
                               <td> Sound quality is good but too expensive! <small class="text-muted">&#9733; &#9733; &#9733; &#9734;&#9734;</small></td>
                           </tr>
                       </table>
                   </div>
               </div>
           </div>
       </div>
     </div>          
               <!-- Close modal body -->
            </div>
            <!-- Close the modal-content -->
         </div>
         <!-- Close the modal-content dialog modal sm -->
      </div>
      <!-- Close the modal-content dialog modal sm --> 
   </div>
 </div>
   <!-- Close entire modal -->
</div>
</div>
</div>

<div class='modal fade' id='sonyInfoModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'      aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' title='Close modal'  aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'> Sony </h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>
              <div id="content" class="container">
                <div class="container">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-2">
                            <img src="sony.png" width="110px">
                        </div>
                        <div class="col-md-3">
                            <h2> Sony MDR100ABN Wireless Over-Ear </h2>
                            <strong>£249.99</strong><br>
                           <br>
                           
                            <a class="btn btn-danger venobox venoboxvid vbox-item btn-sm" data-gall="gall-video" data-type="youtube" onclick="window.open('https://www.youtube.com/watch?v=nfg5psqaqMo')"><i class="fa fa-youtube"></i> Watch product video</a><br><br>
                            <p class="text-success"><strong>5</strong> in stock</p>
                            <a class="btn btn-success" href="">Add to basket</a> <br> <br>

                            <div class="row">
                    <div class="col-md-20 col-md-offset-2" id="productDescDetailTabs">
                      <!-- Tab Navigator -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                        <li role="presentation"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Reviews</a></li>
                    </ul>
                    <br>
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <!-- Description -->
                      <div role="tabpanel" class="tab-pane active" id="description">
                        <p>Experience digital music to the fullest with high-resolution audio. Near field communication (nfc) and Bluetooth technology remove the need for wired connections and complex set-up sequences. Digital noise cancelling reduces a variety of ambient noise when listening to music.</p>
                      </div>
                     
                      <div role="tabpanel" class="tab-pane" id="details">
                       <table class="table table-striped">
                           <tr>
                               <th> James</th>
                               <td> Great sounds <small class="text-muted">&#9733; &#9733; &#9733; &#9733;&#9734;</small></td>
                           </tr>
                           <tr>
                               <th>Karen</th>
                               <td> Very Comfortable <small class="text-muted">&#9733; &#9733; &#9733; &#9733;&#9733;</small></td>
                           </tr>
                           <tr>
                               <th>Jordan</th>
                               <td> Sound quality is good but too expensive! <small class="text-muted">&#9733; &#9733; &#9733; &#9734;&#9734;</small></td>
                           </tr>
                       </table>
                   </div>
               </div>
           </div>
       </div>
     </div>
                           
               <!-- Close modal body -->
            </div>
            <!-- Close the modal-content -->
         </div>
         <!-- Close the modal-content dialog modal sm -->
      </div>
      <!-- Close the modal-content dialog modal sm --> 
   </div>
 </div>
   <!-- Close entire modal -->
</div>
</div>
</div>

<div class='modal fade' id='philInfoModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'      aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' title='Close modal'  aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'> Phillips </h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>

              <div id="content" class="container">
                <div class="container">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-2">
                            <img src="phil.png" width="110px">
                        </div>
                        <div class="col-md-3">
                            <h2> Philips Freshtones In-Ear Wireless </h2>
                            <strong>£49.99</strong><br>
                            <br>
                            <!-- Button to activate Trailer in a lightbox -->
                            <a class="btn btn-danger venobox venoboxvid vbox-item btn-sm" data-gall="gall-video" data-type="youtube" onclick="window.open('https://www.youtube.com/watch?v=QUr5vE0_hkE')"><i class="fa fa-youtube"></i> Watch product video</a><br><br>
                            <p class="text-success"><strong>5</strong> in stock</p>
                            <a class="btn btn-success" href="">Add to basket</a> <br> <br>

                            <div class="row">

                    <div class="col-md-20 col-md-offset-2" id="productDescDetailTabs">

                      <!-- Tab Navigator -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                        <li role="presentation"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Reviews</a></li>
                    </ul>
                    <br>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <!-- Description -->
                      <div role="tabpanel" class="tab-pane active" id="description">
                        <p> Designed for wireless freedom on the go, Fresh Tones BT earphones feature 14.2mm drivers for big bass and optimal fit designed around geometry. Powerful magnets enhannce bass performance with 14.2mm speaker driver for powerful sound and rich bass.</p>
                      </div>
                     
                      <div role="tabpanel" class="tab-pane" id="details">
                       <table class="table table-striped">
                           <tr>
                               <th> James</th>
                               <td> Great sounds <small class="text-muted">&#9733; &#9733; &#9733; &#9733;&#9734;</small></td>
                           </tr>
                           <tr>
                               <th>Karen</th>
                               <td> Very Comfortable <small class="text-muted">&#9733; &#9733; &#9733; &#9733;&#9733;</small></td>
                           </tr>
                           <tr>
                               <th>Jordan</th>
                               <td> Sound quality is good but too expensive! <small class="text-muted">&#9733; &#9733; &#9733; &#9734;&#9734;</small></td>
                           </tr>
                       </table>
                   </div>
               </div>
           </div>
       </div>
     </div>
                           
               <!-- Close modal body -->
            </div>
            <!-- Close the modal-content -->
         </div>
         <!-- Close the modal-content dialog modal sm -->
      </div>
      <!-- Close the modal-content dialog modal sm --> 
   </div>
 </div>
   <!-- Close entire modal -->
</div>
</div>
</div>

<div class='modal fade' id='jblInfoModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'      aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' title='Close modal'  aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'> JBL</h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>

              <div id="content" class="container">
                <div class="container">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-2">
                            <img src="jbl.png" width="110px">
                        </div>
              
                        <div class="col-md-3">
                            <h2> JBL E55BT Wireless Over-Ear </h2>
                            <strong>£204.99</strong><br>
                            <br>
                            <!-- Button to activate Trailer in a lightbox -->
                            <a class="btn btn-danger venobox venoboxvid vbox-item btn-sm" data-gall="gall-video" data-type="youtube" onclick="window.open('https://www.youtube.com/watch?v=C93pVoECkmM')"><i class="fa fa-youtube"></i> Watch product video</a><br><br>
                            <p class="text-success"><strong>5</strong> in stock</p>
                            <a class="btn btn-success" href="">Add to basket</a> <br> <br>

                            <div class="row">

                    <div class="col-md-20 col-md-offset-2" id="productDescDetailTabs">

                      <!-- Tab Navigator -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                        <li role="presentation"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Reviews</a></li>
                    </ul>

                    <br>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <!-- Description -->
                      <div role="tabpanel" class="tab-pane active" id="description"> 
                        <p>The JBL E65BTNC headphones combine eye catching design and premium materials to deliver the world-renowned JBL Signature Sound with wireless convenience and superior active noise cancelling capabilities. </p>

  

                      </div>
                     
                      <div role="tabpanel" class="tab-pane" id="details">
                       <table class="table table-striped">
                           <tr>
                               <th> James</th>
                               <td> Great sounds <small class="text-muted">&#9733; &#9733; &#9733; &#9733;&#9734;</small></td>
                           </tr>
                           <tr>
                               <th>Karen</th>
                               <td> Very Comfortable <small class="text-muted">&#9733; &#9733; &#9733; &#9733;&#9733;</small></td>
                           </tr>
                           <tr>
                               <th>Jordan</th>
                               <td> Sound quality is good but too expensive! <small class="text-muted">&#9733; &#9733; &#9733; &#9734;&#9734;</small></td>
                           </tr>
                       </table>
                   </div>
               </div>
           </div>
       </div>
     </div>
                           
               <!-- Close modal body -->
            </div>
            <!-- Close the modal-content -->
         </div>
         <!-- Close the modal-content dialog modal sm -->
      </div>
      <!-- Close the modal-content dialog modal sm --> 
   </div>
 </div>
   <!-- Close entire modal -->
</div>
</div>
</div>

    <div id="beatsCartModal" class="modal fade" data-keyboard="false">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-center"> Added to Basket </h3>
                </div>
                <div class="modal-body">
                  <img src="beats.png" width="100px">
                    <h4 class="text-success"> <strong> 1x Added <br> Beats Studio wireless </strong> </h4>
                    <div class="settingsButtons">
                        <a href="index.html"><button type="button" class="btn btn-success settings">Continue Shopping</button> </a>
                        <a href="products.html"><button type="button" class="btn btn-danger settings"> Go to basket</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="boseCartModal" class="modal fade" data-keyboard="false">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-center"> Added to Basket </h3>
                </div>
                <div class="modal-body">
                  <img src="bose.png" width="100px">
                    <h4 class="text-success"> <strong> 1x Added <br> Bose QuietComfort QC35 II Over-Ear</strong> </h4>
                    <div class="settingsButtons">
                        <a href="index.html"><button type="button" class="btn btn-success settings">Continue Shopping</button> </a>
                        <a href="products.html"><button type="button" class="btn btn-danger settings"> Go to basket</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="bowseCartModal" class="modal fade" data-keyboard="false">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-center"> Added to Basket </h3>
                </div>
                <div class="modal-body">
                  <img src="bowse.png" width="100px">
                    <h4 class="text-success"> <strong> 1x Added <br> Bowers & Wilkins P9 Signature Over-Ear </strong> </h4>
                    <div class="settingsButtons">
                        <a href="index.html"><button type="button" class="btn btn-success settings">Continue Shopping</button> </a>
                        <a href="products.html"><button type="button" class="btn btn-danger settings"> Go to basket</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="jblCartModal" class="modal fade" data-keyboard="false">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-center"> Added to Basket </h3>
                </div>
                <div class="modal-body">
                  <img src="jbl.png" width="100px">
                    <h4 class="text-success"> <strong> 1x Added <br> JBL E55BT Wireless Over-Ear </strong> </h4>
                    <div class="settingsButtons">
                        <a href="index.html"><button type="button" class="btn btn-success settings">Continue Shopping</button> </a>
                        <a href="products.html"><button type="button" class="btn btn-danger settings"> Go to basket</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="philipsCartModal" class="modal fade" data-keyboard="false">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-center"> Added to Basket </h3>
                </div>
                <div class="modal-body">
                  <img src="phil.png" width="100px">
                    <h4 class="text-success"> <strong> 1x Added <br> Philips Freshtones In-Ear Wireless </strong> </h4>
                    <div class="settingsButtons">
                        <a href="index.html"><button type="button" class="btn btn-success settings">Continue Shopping</button> </a>
                        <a href="products.html"><button type="button" class="btn btn-danger settings"> Go to basket</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sonyCartModal" class="modal fade" data-keyboard="false">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-center"> Added to Basket </h3>
                </div>
                <div class="modal-body">
                  <img src="sony.png" width="100px">
                    <h4 class="text-success"> <strong> 1x Added <br> Sony MDR100ABN Wireless Over-Ear </strong> </h4>
                    <div class="settingsButtons">
                        <a href="index.html"><button type="button" class="btn btn-success settings">Continue Shopping</button> </a>
                        <a href="products.html"><button type="button" class="btn btn-danger settings"> Go to basket</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>