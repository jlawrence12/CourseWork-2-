<!--  Author: Jovanie Lawrence
   Date: 13/04/18    
   Description: Modals source code used thought our website -->
<?php
//Displaay the below is the session is set
if (isset($_SESSION['customerID'])) { ?>
<div id="editDetailsModal" class="modal fade" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--            Edit User Modal Header            -->                        
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class='modal-title text-center'>Edit Details</h2>
                <p class="help-block text-center">Edit the information below to update your profile.</p>
            </div>
            <!--            Edit User Modal Body            --> 
            <div class='modal-body'>
               <!-- Open a form to the body -->
               <div id="registerAlert"></div>
               <form id="registerForm" class="text-center">
                  <div id="firstName-Group" class="form-group">
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-user'></i>
                     <!-- Create a text field "firstname"  -->
                     <input type='text' onkeyup='checkIfText(this);' maxlength='15' id='firstname' name="firstname" placeholder='Firstname'> 
                  </div>
                  <div id="surName-Group" class="form-group">
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-user'></i>
                     <!-- Create a text field "surname"   -->
                     <input type='text' onkeyup='checkIfText(this);' maxlength='15' id="surname"  name='surname' placeholder='Surname'> 
                  </div>
                  <div id="email-Group" class="form-group">
                     <!--Display email icon -->
                     <i class='glyphicon glyphicon-envelope'></i>
                     <!-- Create a text field "email"  -->
                     <input type='text' id="email" name="email" data-validation='email' placeholder='Email address'>
                     <div class="status" id="status"></div>
                     <span id='error_email' class='text-danger'></span> 
                     <!--Display mobile phone icon -->
                  </div>
                  <div id="phoneNumber-Group" class="form-group">
                     <i class='glyphicon glyphicon-phone'></i>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' onkeyup='checkPhoneNumber(this)' id='number' name='number' maxlength="11" placeholder='Phone number'> 
                  </div>
                  <div id="dateOfBirth-Group" class="form-group">
                     <span class="glyphicon glyphicon-calendar"></span>
                     <!-- Create a text field "dateofbirth"   -->
                     <input type="text" id="datepicker" name="datepicker" placeholder="Choose">
                  </div>
                  <div id="address1-Group" class="form-group">
                     <span class="glyphicon glyphicon-home"></span>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='address1' name="address1" maxlength="11" placeholder='Address 1'> 
                  </div>
                  <div id="address2-Group" class="form-group">
                     <span class="glyphicon glyphicon-home"></span>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='address2' name='address2' maxlength="11" placeholder='Address 2'> 
                  </div>
                  <div id="city-Group" class="form-group">
                     <i class='glyphicon glyphicon-phone'></i>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='city' name='city' maxlength="11" placeholder='City'> 
                  </div>
                  <div id="postCode-Group" class="form-group">
                     <i class='glyphicon glyphicon-phone'></i>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='postcode' name='postcode' maxlength="11" placeholder='Postcode'> 
                  </div>
                  <div id="password-Group" class="form-group">
                     <!--Display password lock icon -->
                     <i class='glyphicon glyphicon-lock'></i>
                     <!-- Create a text field "password" -->
                     <input type='password' id="password" minlength='4' maxlength='16' name='password' placeholder='Password'> <br>
                     <span id="passstrength"></span> <br> 
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-lock'></i>
                     <!-- Create a text field "reEnterPassword" -->
                     <input type='password' id="confirmpassword" minlength='4' maxlength='16'  name='confirmpassword' placeholder='Confirm password'> 
                  </div>
                  <!-- Create a button when clicked, creates an account for the new user -->
                  <button class='btn btn-md btn-success' id="registerButton" type='submit' value="Save">Save
                     <!--Display tick icon on the button -->
                     <i class='glyphicon glyphicon-ok'></i>
                  </button>
                  <!--Display username icon -->
                  <button class='btn btn-md btn-danger' value="Reset" id="reset" type='reset'>
                     Reset
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-remove'></i>
                  </button>
                  <!-- Close form -->
               </form>
               <!-- Close modal body -->
            </div>
    </div>
</div>
</div>
<?php } else {  //Otherwise display the following modal ?> 
<!--                 Log in modal                        -->
<div class='modal fade' id='loginModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' id="close" title='Close modal'  aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'>Login</h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>
               <div id="loginAlert"></div>
               <form id="logIn-form" class="text-center">
                  <div id="logIn-Group" class="form-group">
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-user'></i>
                     <!-- Create a text field  "username"   -->
                     <input type='text' id="customerEmail" name="email" placeholder='Email'> <br> <br>
                     <!-- Display password icon -->
                     <i class='glyphicon glyphicon-lock'></i> 
                     <!-- Create a text field "password"  -->
                     <input type='password' id="customerPassword" name="password" placeholder='Password'> <br> <br>
                     <!-- Link the register modal to the text  -->
                     <p> No account? <a href='#' data-toggle='modal' data-target='#registerModal'>Join us</a></p>
                  </div>
                  <!-- Create a button for the user to click to log in -->
                  <button class='btn btn-md btn-success' name ="loginButton" id="logInButton" onclick="customerLogin()" type='submit'>Login<i class='glyphicon glyphicon-log-in'></i></button>
               </form>
               <!-- Close modal body -->
            </div>
            <!-- Close the modal-content -->
         </div>
         <!-- Close the modal-content dialog modal -->
      </div>
      <!-- Close the modal-content dialog modal --> 
   </div>
   <!-- Close entire modal -->
</div>
<!--                  Register modal                        -->
<div id='registerModal' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
   <!-- Open div classes to establish the register modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' id="close" title='Close modal' aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'>Register</h2>
               <!-- Close modal-header  -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>
               <!-- Open a form to the body -->
               <div id="registerAlert"></div>
               <form action="register.php" method="post" id="registerForm" class="text-center">
                  <div id="firstName-Group" class="form-group">
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-user'></i>
                     <!-- Create a text field "firstname"  -->
                     <input type='text' onkeyup='checkIfText(this);' maxlength='15' id='firstname' name="firstname" placeholder='Firstname'> 
                  </div>
                  <div id="surName-Group" class="form-group">
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-user'></i>
                     <!-- Create a text field "surname"   -->
                     <input type='text' onkeyup='checkIfText(this);' maxlength='15' id="surname"  name='surname' placeholder='Surname'> 
                  </div>
                  <div id="email-Group" class="form-group">
                     <!--Display email icon -->
                     <i class='glyphicon glyphicon-envelope'></i>
                     <!-- Create a text field "email"  -->
                     <input type='text' id="email" name="email" data-validation='email' placeholder='Email address'>
                     <div class="status" id="status"></div>
                     <span id='error_email' class='text-danger'></span> 
                     <!--Display mobile phone icon -->
                  </div>
                  <div id="phoneNumber-Group" class="form-group">
                     <i class='glyphicon glyphicon-phone'></i>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' onkeyup='checkPhoneNumber(this)' id='number' name='number' maxlength="11" placeholder='Phone number'> 
                  </div>
                  <div id="dateOfBirth-Group" class="form-group">
                     <span class="glyphicon glyphicon-calendar"></span>
                     <!-- Create a text field "dateofbirth"   -->
                     <input type="text" id="datepicker" name="datepicker" placeholder="Choose">
                  </div>
                  <div id="address1-Group" class="form-group">
                     <span class="glyphicon glyphicon-home"></span>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='address1' name="address1" maxlength="11" placeholder='Address 1'> 
                  </div>
                  <div id="address2-Group" class="form-group">
                     <span class="glyphicon glyphicon-home"></span>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='address2' name='address2' maxlength="11" placeholder='Address 2'> 
                  </div>
                  <div id="city-Group" class="form-group">
                     <i class='glyphicon glyphicon-phone'></i>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='city' name='city' maxlength="11" placeholder='City'> 
                  </div>
                  <div id="postCode-Group" class="form-group">
                     <i class='glyphicon glyphicon-phone'></i>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='postcode' name='postcode' maxlength="11" placeholder='Postcode'> 
                  </div>
                  <div id="password-Group" class="form-group">
                     <!--Display password lock icon -->
                     <i class='glyphicon glyphicon-lock'></i>
                     <!-- Create a text field "password" -->
                     <input type='password' id="password" minlength='4' maxlength='16' name='password' placeholder='Password'> <br>
                     <span id="passstrength"></span> <br> 
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-lock'></i>
                     <!-- Create a text field "reEnterPassword" -->
                     <input type='password' id="confirmpassword" minlength='4' maxlength='16'  name='confirmpassword' placeholder='Confirm password'> 
                     <p> Already a member? <a href='#' data-toggle='modal' data-target='#registerModal'> Log in </a></p>
                  </div>
                  <!-- Create a button when clicked, creates an account for the new user -->
                  <button class='btn btn-md btn-success' id="registerButton" onclick="return showModal();" type='submit'>
                     Sign up
                     <!--Display tick icon on the button -->
                     <i class='glyphicon glyphicon-ok'></i>
                  </button>
                  <!--Display username icon -->
                  <button class='btn btn-md btn-danger' value="Reset" id="reset" type='reset'>
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
         <!-- Close the modal-content dialog modal -->
      </div>
      <!-- Close the modal-content dialog modal --> 
   </div>
   <!-- Close entire modal -->
</div>
<?php } ?>

<?php 
      require 'vendor/autoload.php';
         $client = new MongoDB\Client("mongodb://localhost:27017");

         $collection = $client->peach->headphones;

         $result = $collection->find([], ['sort' => ['details.brand' => 1]]); 
         foreach ($result as $entry) {

      echo 

"<div class='modal fade' id='beatsInfoModal' tabindex='-1' id='close' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' id='close' title='Close modal'  aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'> Beats </h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>
               <div id='content' class='container'>
                  <div class='container'>
                     <div class='row' style='margin-top: 10px;'>
                        <div class='col-md-2'>
                           <img src='./". $entry['artwork'] ."' width='200px'>
                           <p class='text-center'> <strong> Rating: <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9733;</small> </strong> </p>
                        </div>
                        <div class='col-md-3'>
                           <h2> Beats Studio wireless Over-Ear</h2>
                           <strong>". $entry['price'] ."</strong><br>
                           <br>
                           <!-- Button to activate Trailer in a lightbox -->
                           <a class='btn btn-danger venobox venoboxvid vbox-item btn-sm' data-gall='gall-video' data-type='youtube' onclick='window.open('https://www.youtube.com/watch?v=ERuONiY5Gz0')'><i class='fa fa-youtube'></i> Watch product video</a><br><br>
                           <p class='text-success'><strong>". $entry['stock'] ."</strong> in stock</p>
                           <a class='btn btn-success' href='' data-toggle='modal' data-target='#beatsCartModal'>Add to basket</a> <br>
                           <br>
                           <div class='row'>
                              <div class='col-md-20 col-md-offset-2' id='productDescDetailTabs'>
                                 <!-- Tab Navigator -->
                                 <ul class='nav nav-tabs' role='tablist'>
                                    <li role='presentation' class='active'><a href='#description' aria-controls='description' role='tab' data-toggle='tab'>Description</a></li>
                                    <li role='presentation'><a href='#review' aria-controls='details' role='tab' data-toggle='tab'>Reviews</a></li>
                                 </ul>
                                 <br>
                                 <!-- Tab panes -->
                                 <div class='tab-content'>
                                    <!-- Description -->
                                    <div role='tabpanel' class='tab-pane active' id='description'>
                                      <p> With Beats by Dr. Dre Studio Wireless Headphones, you can go without wires and enjoy adaptive noise cancellation. With a 9 metre Bluetooth limit, you can enjoy free roam and take calls, skip songs and change the volume using just the headphones.
                                      </p>
                                    </div>
                                    <div role='tabpanel' class='tab-pane' id='review'>
                                       <table class='table table-striped'>
                                          <tr>
                                             <th> James</th>
                                             <td> Great sounds <small class='text-muted'>&#9733; &#9733; &#9733; &#9733;&#9734;</small></td>
                                          </tr>
                                          <tr>
                                             <th>Karen</th>
                                             <td> Very Comfortable <small class='text-muted'>&#9733; &#9733; &#9733; &#9733;&#9733;</small></td>
                                          </tr>
                                          <tr>
                                             <th>Jordan</th>
                                             <td> Sound quality is good but too expensive! <small class='text-muted'>&#9733; &#9733; &#9733; &#9734;&#9734;</small></td>
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
<!--                  Product bowse information modal                        -->
<div class='modal fade' id='bowseInfoModal' tabindex='-1' id='close' role='dialog' aria-labelledby='myModalLabel'      aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' id='close' title='Close modal'  aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'> Bowse & Wilkins</h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>
               <div id='content' class='container>
                  <div class='container'>
                     <div class='row' style='margin-top: 10px;''>
                        <div class='col-md-2'>
                           <img src='./". $entry['artwork'] ."'width='200px'>
                           <p class='text-center'><strong> Rating: <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9733;</small></strong></p>
                        </div>
                        <div class='col-md-3'>
                           <h2> Bowers & Wilkins P9 Signature Over-Ear </h2>
                           <strong>". $entry['price'] ."</strong><br>
                           <br>
                           <a class='btn btn-danger venobox venoboxvid vbox-item btn-sm' data-gall='gall-video' data-type='youtube' onclick='window.open('https://www.youtube.com/watch?v=ecyIVx8Y4ZM')''><i class='fa fa-youtube'></i> Watch product video</a><br><br>
                           <p class='text-danger'><strong>". $entry['stock'] ."</strong> in stock</p>
                           <a class='btn btn-success' href='' data-toggle='modal' data-target='#bowseCartModal'>Add to basket</a><br>
                           <br>
                           <div class='row'>
                              <div class='col-md-20 col-md-offset-2' id='productDescDetailTabs'>
                                 <!-- Tab Navigator -->
                                 <ul class='nav nav-tabs' role='tablist'>
                                    <li role='presentation' class='active'><a href='#description' aria-controls='description' role='tab' data-toggle='tab'>Description</a></li>
                                    <li role='presentation'><a href='#review' aria-controls='details' role='tab' data-toggle='tab'>Reviews</a></li>
                                 </ul>
                                 <br>
                                 <!-- Tab panes -->
                                 <div class='tab-content'>
                                    <!-- Description -->
                                    <div role='tabpanel' class='tab-pane active' id='description'>
                                       <p> P9 Signature, Bowers & Wilkins’ largest over-ear headphone, exemplifies all of the acoustic and design innovation skills they have amassed in their fifty year journey. They raise the bar of sound performance with the latest technological developments. 
                                       </p>
                                    </div>
                                    <div role='tabpanel' class='tab-pane' id='review'>
                                       <table class='table table-striped'>
                                          <tr>
                                             <th> James</th>
                                             <td> Great sounds <small class='text-muted'>&#9733; &#9733; &#9733; &#9733;&#9734;</small></td>
                                          </tr>
                                          <tr>
                                             <th>Karen</th>
                                             <td> Very Comfortable <small class='text-muted'>&#9733; &#9733; &#9733; &#9733;&#9733;</small></td>
                                          </tr>
                                          <tr>
                                             <th>Jordan</th>
                                             <td> Sound quality is good but too expensive! <small class='text-muted'>&#9733; &#9733; &#9733; &#9734;&#9734;</small></td>
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
<!--                  Product bose information modal                        -->
<div class='modal fade' id='boseInfoModal' tabindex='-1' id='close' role='dialog' aria-labelledby='myModalLabel'      aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' id='close' title='Close modal'  aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'> Bose </h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>
               <div id='content' class='container'>
                  <div class='container'>
                     <div class='row' style='margin-top: 10px;'>
                        <div class='col-md-2'>
                           <img src='./". $entry['artwork'] ."'width='200px>
                           <p class='text-center'> <strong> Rating: <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9733;</small> </strong> </p>
                        </div>
                        <div class='col-md-3'>
                           <h2> Bose QuietComfort QC35 II Over-Ear</h2>
                           <strong>". $entry['price'] ."</strong><br>
                           <br>
                           <!-- Button to activate Trailer in a lightbox -->
                           <a class='btn btn-danger venobox venoboxvid vbox-item btn-sm' data-gall='gall-video' data-type='youtube' onclick='window.open('https://www.youtube.com/watch?v=jhkbbLpKL8g')''><i class='fa fa-youtube'></i> Watch product video</a><br><br>
                           <p class='text-success'><strong>". $entry['stock'] ."</strong> in stock</p>
                           <a class='btn btn-success' href='' data-toggle='modal' data-target='#boseCartModal'>Add to basket</a><br> 
                           <br>
                           <div class='row'>
                              <div class='col-md-20 col-md-offset-2' id='productDescDetailTabs'>
                                 <!-- Tab Navigator -->
                                 <ul class='nav nav-tabs' role='tablist'>
                                    <li role='presentation' class='active'><a href='#description' aria-controls='description' role='tab' data-toggle='tab'>Description</a></li>
                                    <li role='presentation'><a href='#review' aria-controls='details' role='tab' data-toggle='tab'>Reviews</a></li>
                                 </ul>
                                 <br>
                                 <!-- Tab panes -->
                                 <div class='tab-content'>
                                    <!-- Description -->
                                    <div role='tabpanel' class='tab-pane active' id='description'>
                                       <p>QuietComfort 35 Wireless Headphones II are engineered with world-class noise cancellation. And now they're even better. With your Google Assistant built in, you can control music, send & receive texts, and get answers using just your voice. </p>
                                    </div>
                                    <div role='tabpanel' class='tab-pane' id='review'>
                                       <table class='table table-striped'>
                                          <tr>
                                             <th> James</th>
                                             <td> Great sounds <small class='text-muted'>&#9733; &#9733; &#9733; &#9733;&#9734;</small></td>
                                          </tr>
                                          <tr>
                                             <th>Karen</th>
                                             <td> Very Comfortable <small class='text-muted'>&#9733; &#9733; &#9733; &#9733;&#9733;</small></td>
                                          </tr>
                                          <tr>
                                             <th>Jordan</th>
                                             <td> Sound quality is good but too expensive! <small class='text-muted'>&#9733; &#9733; &#9733; &#9734;&#9734;</small></td>
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
<!--                  Product sony information modal                        -->
<div class='modal fade' id='sonyInfoModal' tabindex='-1' id='close' role='dialog' aria-labelledby='myModalLabel'      aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' id='close' title='Close modal'  aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'> Sony </h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>
               <div id='content' class='container'>
                  <div class='container'>
                     <div class='row' style='margin-top: 10px;'>
                        <div class='col-md-2'>
                           <img src='./". $entry['artwork'] ."'width='200px'>
                           <p class='text-center'><strong> Rating: <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9733;</small> </strong> </p>
                        </div>
                        <div class='col-md-3'>
                           <h2> Sony MDR100ABN Wireless Over-Ear </h2>
                           <strong>". $entry['price'] ."</strong><br>
                           <br>
                           <a class='btn btn-danger venobox venoboxvid vbox-item btn-sm' data-gall='gall-video' data-type='youtube' onclick='window.open('https://www.youtube.com/watch?v=nfg5psqaqMo')'><i class='fa fa-youtube'></i> Watch product video</a><br><br>
                           <p class='text-success'><strong>". $entry['stock'] ."</strong> in stock</p>
                           <a class='btn btn-success' href='' data-toggle='modal' data-target='#sonyCartModal'>Add to basket</a> <br>
                           <br>
                           <div class='row'>
                              <div class='col-md-20 col-md-offset-2'>
                                 <!-- Tab Navigator -->
                                 <ul class='nav nav-tabs' role='tablist'>
                                    <li role='presentation' class='active'><a href='#description' aria-controls='description' role='tab' data-toggle='tab'>Description</a></li>
                                    <li role='presentation'><a href='#review' aria-controls='details' role='tab' data-toggle='tab'>Reviews</a></li>
                                 </ul>
                                 <br>
                                 <!-- Tab panes -->
                                 <div class='tab-content'>
                                    <!-- Description -->
                                    <div role='tabpanel' class='tab-pane active' id='description'>
                                       <p>Experience digital music to the fullest with high-resolution audio. Near field communication (nfc) and Bluetooth technology remove the need for wired connections and complex set-up sequences. Digital noise cancelling reduces a variety of ambient noise when listening to music.
                                       </p>
                                    </div>
                                    <div role='tabpanel' class='tab-pane' id='review'>
                                       <table class='table table-striped'>
                                          <tr>
                                             <th> James</th>
                                             <td> Great sounds <small class='text-muted'>&#9733; &#9733; &#9733; &#9733;&#9734;</small></td>
                                          </tr>
                                          <tr>
                                             <th>Karen</th>
                                             <td> Very Comfortable <small class='text-muted'>&#9733; &#9733; &#9733; &#9733;&#9733;</small></td>
                                          </tr>
                                          <tr>
                                             <th>Jordan</th>
                                             <td> Sound quality is good but too expensive! <small class='text-muted'>&#9733; &#9733; &#9733; &#9734;&#9734;</small></td>
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
<!--                  Product phillips information modal                        -->
<div class='modal fade' id='philInfoModal' tabindex='-1' id='close' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' id='close' title='Close modal'  aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'> Phillips </h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>
               <div id='content' class='container'>
                  <div class='container'>
                     <div class='row' style='margin-top: 10px;''>
                        <div class='col-md-2'>
                           <img src='./". $entry['artwork'] ."'width='200px'>
                           <p class='text-center'> <strong> Rating: <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9733;</small> </strong> </p>
                        </div>
                        <div class='col-md-3'>
                           <h2> Philips Freshtones In-Ear Wireless </h2>
                           <strong>". $entry['price'] ."</strong><br>
                           <br>
                           <!-- Button to activate Trailer in a lightbox -->
                           <a class='btn btn-danger venobox venoboxvid vbox-item btn-s' data-gall='gall-video' data-type='youtube' onclick='window.open('https://www.youtube.com/watch?v=QUr5vE0_hkE')'><i class='fa fa-youtube'></i> Watch product video</a><br><br>
                           <p class='text-success'><strong>". $entry['artwork'] ."</strong> in stock</p>
                           <a class='btn btn-success' href='' data-toggle='modal' data-target='#philipsCartModal'>Add to basket</a> <br> <br>
                           <div class='row'>
                              <div class='col-md-20 col-md-offset-2' id='productDescDetailTabs'>
                                 <!-- Tab Navigator -->
                                 <ul class='nav nav-tabs' role='tablist'>
                                    <li role='presentation' class='active'><a href='#description' aria-controls='description' role='tab' data-toggle='tab'>Description</a></li>
                                    <li role='presentation'><a href='#review' aria-controls='details' role='tab' data-toggle='tab'>Reviews</a></li>
                                 </ul>
                                 <br>
                                 <!-- Tab panes -->
                                 <div class='tab-content'>
                                    <!-- Description -->
                                    <div role='tabpanel' class='tab-pane active' id='description'>
                                       <p> Designed for wireless freedom on the go, Fresh Tones BT earphones feature 14.2mm drivers for big bass and optimal fit designed around geometry. Powerful magnets enhannce bass performance with 14.2mm speaker driver for powerful sound and rich bass.
                                       </p>
                                    </div>
                                    <div role='tabpanel' class='tab-pane' id='review'>
                                       <table class='table table-striped'>
                                          <tr>
                                             <th> James</th>
                                             <td> Great sounds <small class='text-muted'>&#9733; &#9733; &#9733; &#9733;&#9734;</small></td>
                                          </tr>
                                          <tr>
                                             <th>Karen</th>
                                             <td> Very Comfortable <small class='text-muted'>&#9733; &#9733; &#9733; &#9733;&#9733;</small></td>
                                          </tr>
                                          <tr>
                                             <th>Jordan</th>
                                             <td> Sound quality is good but too expensive! <small class='text-muted'>&#9733; &#9733; &#9733; &#9734;&#9734;</small></td>
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
<!--                  Product jbl information modal                        -->
<div class='modal fade' id='jblInfoModal' tabindex='-1' id='close' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
   <!-- Open div classes to establish the login modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-md'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' id='close data-dismiss='modal' title='Close modal'aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'> JBL</h2>
               <!-- Close modal header -->
            </div>
            <!-- Open the body of the modal -->
            <div class='modal-body'>
               <div id='content' class='container'>
                  <div class='container'>
                     <div class='row' style='margin-top: 10px;'>
                        <div class='col-md-2'>
                           <img src='./". $entry['artwork'] ."'width='200px'>
                           <p class='text-center'> <strong> Rating: <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9733;</small> </strong> </p>
                        </div>
                        <div class='col-md-3'>
                           <h2> JBL E55BT Wireless Over-Ear </h2>
                           <strong>". $entry['artwork'] ."</strong><br>
                           <br>
                           <!-- Button to activate Trailer in a lightbox -->
                           <a class='btn btn-danger venobox venoboxvid vbox-item btn-sm' data-gall='gall-video' data-type='youtube' onclick='window.open('https://www.youtube.com/watch?v=C93pVoECkmM')''><i class='fa fa-youtube'></i> Watch product video</a><br><br>
                           <p class='text-success'><strong>". $entry['stock'] ."</strong> in stock</p>
                           <a class='btn btn-succes' href='' data-toggle='modal' data-target='#jblCartModal'>Add to basket</a> <br> <br>
                           <div class='row'>
                              <div class='col-md-20 col-md-offset-2' id='productDescDetailTabs'>
                                 <!-- Tab Navigator -->
                                 <ul class='nav nav-tabs' role='tablist'>
                                    <li role='presentation' class='active'><a href='#description' aria-controls='description' role='tab' data-toggle='tab'>Description</a></li>
                                    <li role='presentation'><a href='#review' aria-controls='details' role='tab' data-toggle='tab'>Reviews</a></li>
                                 </ul>
                                 <br>
                                 <!-- Tab panes -->
                                 <div class='tab-content'>
                                    <!-- Description -->
                                    <div role='tabpanel' class='tab-pane active' id='description'>
                                       <p>The JBL E65BTNC headphones combine eye catching design and premium materials to deliver the world-renowned JBL Signature Sound with wireless convenience and superior active noise cancelling capabilities. 
                                       </p>
                                    </div>
                                    <div role='tabpanel' class='tab-pane' id='review'>
                                       <table class='table table-striped'>
                                          <tr>
                                             <th> James</th>
                                             <td> Great sounds <small class='text-muted'>&#9733; &#9733; &#9733; &#9733;&#9734;</small></td>
                                          </tr>
                                          <tr>
                                             <th>Karen</th>
                                             <td> Very Comfortable <small class='text-muted'>&#9733; &#9733; &#9733; &#9733;&#9733;</small></td>
                                          </tr>
                                          <tr>
                                             <th>Jordan</th>
                                             <td> Sound quality is good but too expensive! <small class='text-muted'>&#9733; &#9733; &#9733; &#9734;&#9734;</small></td>
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
</div>";} ?>
<!--                  Product beats cart modal                        -->
<div id="beatsCartModal" class="modal fade" data-keyboard="false">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" id="close" data-dismiss="modal">×</button>
            <h3 class="modal-title text-center"> Added to Basket </h3>
         </div>
         <div class="modal-body">
            <img src="Media/beats.png" width="100px">
            <h4 class="text-success"> <strong> 1x Added <br> Beats Studio wireless </strong> </h4>
            <div class="settingsButtons">
               <a href="main.php"><button type="button" class="btn btn-success settings">Continue Shopping</button> </a>
               <a href="checkout.php"><button type="button" class="btn btn-danger settings"> Go to basket</button> </a>
            </div>
         </div>
      </div>
   </div>
</div>
<!--                  Product bose cart modal                        -->
<div id="boseCartModal" class="modal fade" data-keyboard="false">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" id="close" data-dismiss="modal">×</button>
            <h3 class="modal-title text-center"> Added to Basket </h3>
         </div>
         <div class="modal-body">
            <img src="Media/bose.png" width="100px">
            <h4 class="text-success"> <strong> 1x Added <br> Bose QuietComfort QC35 II Over-Ear</strong> </h4>
            <div class="settingsButtons">
               <a href="products.php"><button type="button" class="btn btn-success settings">Continue Shopping</button> </a>
               <a href="checkout.php"><button type="button" class="btn btn-danger settings"> Go to basket</button> </a>
            </div>
         </div>
      </div>
   </div>
</div>
<!--                  Product bowse cart modal                        -->
<div id="bowseCartModal" class="modal fade" data-keyboard="false">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" id="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title text-center"> Added to Basket </h3>
         </div>
         <div class="modal-body">
            <img src="Media/bowse.png" width="100px">
            <h4 class="text-success"> <strong> 1x Added <br> Bowers & Wilkins P9 Signature Over-Ear </strong> </h4>
            <div class="settingsButtons">
               <a href="products.php"><button type="button" class="btn btn-success settings">Continue Shopping</button> </a>
               <a href="checkout.php"><button type="button" class="btn btn-danger settings"> Go to basket</button> </a>
            </div>
         </div>
      </div>
   </div>
</div>
<!--                  Product jbl cart modal                        -->
<div id="jblCartModal" class="modal fade" data-keyboard="false">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" id="close" data-dismiss="modal">×</button>
            <h3 class="modal-title text-center"> Added to Basket </h3>
         </div>
         <div class="modal-body">
            <img src="Media/jbl.png" width="100px">
            <h4 class="text-success"> <strong> 1x Added <br> JBL E55BT Wireless Over-Ear </strong> </h4>
            <div class="settingsButtons">
               <a href="products.php"><button type="button" class="btn btn-success settings">Continue Shopping</button> </a>
               <a href="checkout.php"><button type="button" class="btn btn-danger settings"> Go to basket</button> </a>
            </div>
         </div>
      </div>
   </div>
</div>
<!--                  Product phillips cart modal                        -->
<div id="philipsCartModal" class="modal fade" data-keyboard="false">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" id="close" data-dismiss="modal">×</button>
            <h3 class="modal-title text-center"> Added to Basket </h3>
         </div>
         <div class="modal-body">
            <img src="Media/phil.png" width="100px">
            <h4 class="text-success"> <strong> 1x Added <br> Philips Freshtones In-Ear Wireless </strong> </h4>
            <div class="settingsButtons">
               <a href="products.php"><button type="button" class="btn btn-success settings">Continue Shopping</button> </a>
               <a href="checkout.php"><button type="button" class="btn btn-danger settings"> Go to basket</button> </a>
            </div>
         </div>
      </div>
   </div>
</div>
<!--                  Product sony cart modal                        -->
<div id='sonyCartModal' class='modal fade' data-keyboard='false'>
   <div class='modal-dialog modal-sm'>
      <div class="modal-content">
         <div class='modal-header'>
            <button type='button' class='close' id='close' data-dismiss='modal'>×</button>
            <h3 class='modal-title text-center'> Added to Basket </h3>
         </div>
         <div class='modal-body'>
            <img src='./". $entry['artwork'] ."' width='100px'>
            <h4 class="text-success"> <strong> 1x Added <br> Sony MDR100ABN Wireless Over-Ear </strong> </h4>
            <div class='settingsButtons'>
               <a href='products.php'><button type='button' class='btn btn-success settings'>Continue Shopping</button> </a>
               <a href='"checkout.php"'><button type='button' class='btn btn-danger settings'> Go to basket</button> </a>
            </div>
         </div>
      </div>
   </div>
</div>

<!--                  Product delete modal                        -->
<div id="deleteModal" class="modal fade" data-keyboard="false">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" id="close" data-dismiss="modal">×</button>
            <h3 class="modal-title">Are you sure you want to remove this product?</h3>
         </div>
         <div class="modal-body">
            <div class="settingsButtons">
               <button type="button" class="btn btn-success settings" >Yes</button>
               <button type="button" class="btn btn-danger settings" data-dismiss="modal">No</button>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Modal for the user to edit their details -->
<div id="editModal" class="modal fade"  data-keyboard="false">
   <div class="modal-dialog">
      <div class="modal-content">
         <!--            Edit User Modal Header            -->                        
         <div class="modal-header">
            <button type="button" class="close" id="close" data-dismiss="modal">×</button>
            <h2 class="login_title text-center">Edit Details</h2>
         </div>
         <!--            Edit User Modal Body            --> 
         <div class="modal-body">
            <div id="editUserAlert"></div>
            <!--              Register Main Form              -->                           
            <form id="editUserForm" class="form-horizontal" method="post">
               <div class="form-group">
                  <label class="col-md-4 control-label" for="firstNameEditUser">First Name</label>  
                  <div class="col-md-6">
                     <input id="firstNameEditUser" name="firstNameEditUser" type="text" placeholder="first name" class="form-control input-md" value="John">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label" for="lastNameEditUser">Last Name</label>  
                  <div class="col-md-6">
                     <input id="lastNameEditUser" name="lastNameEditUser" type="text" placeholder="last name" class="form-control input-md" value="Smith">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label" for="emailEditUser">Email Address</label>  
                  <div class="col-md-6">
                     <input id="emailEditUser" name="emailEditUser" type="text" placeholder="email address" class="form-control input-md" value="john@johnsmith.com">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label" for="passwordEditUser">Password</label>  
                  <div class="col-md-6">
                     <input id="passwordEditUser" name="passwordEditUser" type="password" placeholder="password" class="form-control input-md">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label" for="passwordEditUser">Confirm Password</label>  
                  <div class="col-md-6">
                     <input id="confirmPasswordEditUser" name="confirmPasswordEditUser" type="password" placeholder="confirm password" class="form-control input-md">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label" for="addressLine1EditUser">Address Line 1</label>  
                  <div class="col-md-6">
                     <input id="addressLine1EditUser" name="addressLine1EditUser" type="text" placeholder="address line 1" class="form-control input-md" value="Middlesex University">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label" for="addressLine2EditUser">Address Line 2</label>  
                  <div class="col-md-6">
                     <input id="addressLine2EditUser" name="addressLine2EditUser" type="text" placeholder="email address" class="form-control input-md" value="The Burroughs">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label" for="cityEditUser">City</label>  
                  <div class="col-md-6">
                     <input id="cityEditUser" name="cityEditUser" type="text" placeholder="city" class="form-control input-md" value="London">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-4 control-label" for="postcodeEditUser">UK Postcode</label>  
                  <div class="col-md-6">
                     <input id="postcodeEditUser" name="postcodeEditUser" type="text" placeholder="uk postcode" class="form-control input-md" value="NW4 4BT">
                  </div>
               </div>
               <button id="editUserButton'type="submit" class="btn btn-success center-block">Save Changes</button>
            </form>
         </div>
      </div>
   </div>
</div>
<!-- Modal for the users to view data on their orders -->
<div id="viewOrderModal" class="modal fade" id="close" data-keyboard="false">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" id="close" data-dismiss="modal">×</button>
            <h2 class="login_title text-center"> Order Details</h2>
         </div>
         <div class="modal-body">
            <!--            Form to display the data            -->
            <form id="existingOrderForm" class="form-horizontal" method="post">
               <!--             Display each field with data               -->
               <div class="form-group">
                  <label class="col-md-4 control-label" for="orderNumber">Order No</label>  
                  <div class="col-md-4">
                     <input id='orderNumber' name='orderNumber' type='number' class='form-control input-md' value='1000' disabled>
                  </div>
               </div>
               <div class='form-group'>
                  <label class='col-md-4 control-label" for='orderCreated'>Order Created</label>  
                  <div class='col-md-4'>
                     <input id='orderCreated' name='orderCreated' type='datetime' class='form-control input-md' value='28/01/2018 00:09' disabled>
                  </div>
               </div>
               <div class='form-group'>
                  <label class='col-md-4 control-label' for='lastModified'>Last Modified</label>  
                  <div class='col-md-4'>
                     <input id='lastModified' name='lastModified' type='datetime' class='form-control input-md' value='28/01/2018 21:50' disabled>
                  </div>
               </div>
               <div class='form-group'>
                  <label class='col-md-4 control-label' for='status'>Status</label>  
                  <div class='col-md-4'>
                     <input id='status' name='status' type='text' class='form-control input-md'value='Dispatched' disabled>
                  </div>
               </div>
               <div class='form-group'>
                  <label class='col-md-4 control-label' for='address'>Delivery Address</label>
                  <div class='col-md-4'>                     
                     <textarea rows='5' cols='1000' class='form-control' id='address' name='address' disabled>Middlesex University&#13;&#10The Burroughs&#13;&#10London&#13;&#10NW4 4BT&#13;&#10United Kingdom</textarea>
                  </div>
               </div>
               <!--    Table to display Products Purchased    -->
               <div class='container-fluid'>
                  <table class='table table-striped'>
                     <!--        Table Column Headings        -->
                     <thead>
                        <tr>
                           <th></th>
                           <th>Brand</th>
                           <th>Qty</th>
                           <th>Unit Price</th>
                        </tr>
                     </thead>
                     <!--       Table Data         -->
                     <tbody>
                        <tr>
                           <td><img src='./". $entry['artwork'] ."'width="50px"></td>
                           <td>". $entry['brand'] ."</td>
                           <td>". $entry['stock'] ."</td>
                           <td>". $entry['price'] ."</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class='form-group'>
                  <label class='col-md-4 control-label' for='orderTotal'>Order Total</label>
                  <div class='col-md-4'>
                     <div class='input-group'>
                        <span class='input-group-addon'>£</span>
                        <input id='orderTotal' name='orderTotal' class='form-control' type='text' value='251.00' disabled>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<div class='modal fade' id='feedbackModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
   <!-- Open div classes to establish the register modal -->
   <div class='modal-dialog'>
      <div class='modal-dialog modal-sm'>
         <div class='modal-content'>
            <!-- Open a div that acts as the header of the modal -->
            <div class='modal-header'>
               <!-- Add a button to the modal that will close the modal when clicked -->
               <button type='button' class='close' data-dismiss='modal' id='close' title='Close modal' aria-hidden='true'>×</button>
               <!-- Display a header at the top of the modal -->
               <h2 class='login_title text-center'> Contact us </h2>
               <!-- Close modal-header  -->
            </div>
            <!-- Open modal body  -->
            <div class='modal-body'>
               <!-- Open paragraph -->
               <p> Please contact head developer Jay Lawrence : jl1119@live.mdx.ac.uk </p>
               <form role='form' id='contact-form' class='contact-form'>
               <i class='glyphicon glyphicon-user'></i>
                     <!-- Create a text field 'firstname'  -->
                     <input type='text' maxlength='15'id='firstNameRegister' placeholder='Enter Name'> <br><br>
               <i class='glyphicon glyphicon-envelope'></i>
               <!-- Create a text field 'reEnterPassword' -->
               <input type='text' id='email' name='password' placeholder='Enter email'> <br><br>
               <!-- Create a text area div where the user can write website feedback -->
               <div class='form-group'>
                  <textarea class='form-control' type='textarea' id='message' placeholder='Message' maxlength='100' rows='7'></textarea>
                  <span class='help-block'>
                     <p id='characterLeft' class='help-block'>You have reached the limit</p>
                  </span>
                  <button class='btn btn-md btn-success' id='submit' type='submit'>
                     Send
                     <li class= 'glyphicon glyphicon-send'> </li>
                  </button>
               </form>
                  <!-- Close form -->
               </div>
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