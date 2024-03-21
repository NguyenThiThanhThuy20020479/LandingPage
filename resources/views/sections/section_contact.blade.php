<section id="contact" class="section">
    <!-- Container Starts -->
    <div class="container">
      <!-- Start Row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-text section-header text-center">  
            <div>   
              <h2 class="section-title">Contact us</h2>
              <div class="desc-text">
                <p>Leave some information and we will get back to you as soon as possible.</p> 
              </div>
            </div> 
          </div>
        </div>

      </div>
      <!-- End Row -->
      <!-- Start Row -->
      <div class="row">
        <!-- Start Col -->
        <div class="col-lg-6 col-md-12">
        <form id="contactForm" method="POST" action="{{route('contact')}}">
            @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required data-error="Please enter your first name">
                <div class="help-block with-errors"></div>
              </div>                                 
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" placeholder="Last name" id="last_name" class="form-control" name="last_name" required data-error="Please enter your last name">
                <div class="help-block with-errors"></div>
              </div> 
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email">
                <div class="help-block with-errors"></div>
              </div>                                 
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" placeholder="Phone number" id="phone_number" class="form-control" name="phone_number"
                pattern="[0]{1}[8-9]{1}[0-9]{8}"
                required data-error="Please enter your phone number">
                <div class="help-block with-errors"></div>
              </div> 
            </div>
            <div class="col-md-12">
              <div class="form-group"> 
                <input type="text" placeholder="Address" id="address" class="form-control" name="address" required data-error="Please enter your address">
                <div class="help-block with-errors"></div>
              </div>
              <div class="submit-button" style="text-align: center">
                <button class="btn btn-common" id="submit" type="submit">Submit</button>
                <div id="msgSubmit" class="h3 hidden"></div> 
                <div class="clearfix"></div> 
              </div>
            </div>
          </div>            
        </form>
        </div>
        <!-- End Col -->
        <!-- Start Col -->
        <div class="col-lg-1">
          
        </div>
        <!-- End Col -->
        <!-- Start Col -->
        <div class="col-lg-4 col-md-12">
          <div class="contact-img">
            <img src="assets/img/contact/01.png" class="img-fluid" alt="">
          </div>
        </div>
        <!-- End Col -->
        <!-- Start Col -->
        <div class="col-lg-1">
        </div>
        <!-- End Col -->

      </div>
      <!-- End Row -->
    </div>
  </section>