@extends('common.basic-template')

@section('content')
<div class="container">

      <!--Section: Features v.4-->
      <section class="section wow fadeIn" data-wow-delay="0.3s">

        @component('components.feature-heading', $data);
        @endcomponent

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-4">

            @component('components.text-block', ['icon' => 'fas fa-pizza-slice', 'textcolor' => 'pink-text', 'title' => 'Pizza macia'])
            @endcomponent

            @component('components.text-block', ['icon' => 'fas fa-cat', 'textcolor' => 'purple-text', 'title' => 'Bem recheada'])
            @endcomponent

            @component('components.text-block', ['icon' => 'fab fa-hand-holding-heart', 'textcolor' => 'deep-purple-text', 'title' => 'Feita com carinho'])
            @endcomponent            

          </div>

          <div class="col-md-4 mb-2 text-center text-md-left flex-center">
            <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/iphone-portfolio1.png" alt="" class="z-depth-0">
          </div>

          <div class="col-md-4">

            @component('components.text-block', ['icon' => 'fas fa-pizza-slice', 'textcolor' => 'pink-text', 'title' => 'Pizza macia'])
            @endcomponent

            @component('components.text-block', ['icon' => 'fas fa-cat', 'textcolor' => 'purple-text', 'title' => 'Bem recheada'])
            @endcomponent

            @component('components.text-block', ['icon' => 'fab fa-hand-holding-heart', 'textcolor' => 'deep-purple-text', 'title' => 'Feita com carinho'])
            @endcomponent       

          </div>

        </div>
        <!--Grid row-->

      </section>
      <!--/Section: Features v.4-->

      <hr class="mb-5">

      <!--Section: Testimonials v.3-->
      <section class="section team-section text-center pb-3 wow fadeIn" data-wow-delay="0.3s">

        <!--Section heading-->
        <h1 class="font-weight-bold text-center h1 my-5">Testimonials</h1>
        <!--Section description-->
        <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
          quisquam eum porro a pariatur accusamus veniam.</p>

        <!--Grid row-->
        <div class="row text-center">

          <!--Grid column-->
          <div class="col-md-4 mb-4">

            <div class="testimonial">
              <!--Avatar-->
              <div class="avatar mx-auto">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">
              </div>

              <!--Content-->
              <h4 class="font-weight-bold mt-4 mb-3">Anna Deynah</h4>
              <h6 class="mb-3 font-weight-bold grey-text">Web Designer</h6>
              <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos
                id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>

              <!--Review-->
              <div class="orange-text">
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star-half-alt"> </i>
              </div>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 mb-4">
            <div class="testimonial">
              <!--Avatar-->
              <div class="avatar mx-auto">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded-circle z-depth-1 img-fluid">
              </div>

              <!--Content-->
              <h4 class="font-weight-bold mt-4 mb-3">John Doe</h4>
              <h6 class="mb-3 font-weight-bold grey-text">Web Developer</h6>
              <p><i class="fas fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>

              <!--Review-->
              <div class="orange-text">
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
              </div>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 mb-4">
            <div class="testimonial">
              <!--Avatar-->
              <div class="avatar mx-auto">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle z-depth-1 img-fluid">
              </div>
              <!--Content-->
              <h4 class="font-weight-bold mt-4 mb-3">Maria Kate</h4>
              <h6 class="mb-3 font-weight-bold grey-text">Photographer</h6>
              <p><i class="fas fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium voluptatum deleniti atque corrupti.</p>

              <!--Review-->
              <div class="orange-text">
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="far fa-star"> </i>
              </div>

            </div>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Testimonials v.3-->

      <hr class="mb-5">

      <!-- Section: Pricing v.3 -->
      <section class="text-center my-5 wow fadeIn" data-wow-delay="0.3s">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Our pricing plans</h2>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto mb-5 grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
          quisquam eum porro a pariatur veniam.</p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

            <!-- Card -->
            <div class="card">

              <!-- Content -->
              <div class="card-body">

                <!-- Offer -->
                <h5 class="mb-4">Basic plan</h5>
                <div class="d-flex justify-content-center">
                  <div class="card-circle d-flex justify-content-center align-items-center">
                    <i class="fas fa-home light-blue-text"></i>
                  </div>
                </div>

                <!-- Price -->
                <h2 class="font-weight-bold my-4">59$</h2>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa pariatur id nobis
                  accusamus deleniti cumque hic laborum.</p>
                <a class="btn btn-light-blue btn-rounded">Buy now</a>

              </div>
              <!-- Content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

            <!-- Card -->
            <div class="card purple-gradient">

              <!-- Content -->
              <div class="card-body white-text">

                <!-- Offer -->
                <h5 class="mb-4">Premium plan</h5>
                <div class="d-flex justify-content-center">
                  <div class="card-circle d-flex justify-content-center align-items-center">
                    <i class="fas fa-users"></i>
                  </div>
                </div>

                <!--Price -->
                <h2 class="font-weight-bold my-4">79$</h2>
                <p>Esse corporis saepe laudantium velit adipisci cumque iste ratione facere non distinctio cupiditate
                  sequi atque.</p>
                <a class="btn btn-outline-white btn-rounded">Buy now</a>

              </div>
              <!-- Content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6">

            <!-- Card -->
            <div class="card">

              <!-- Content -->
              <div class="card-body">

                <!-- Offer -->
                <h5 class="mb-4">Advanced plan</h5>
                <div class="d-flex justify-content-center">
                  <div class="card-circle d-flex justify-content-center align-items-center">
                    <i class="fas fa-chart-bar light-blue-text"></i>
                  </div>
                </div>

                <!--Price -->
                <h2 class="font-weight-bold my-4">99$</h2>
                <p class="grey-text">At ab ea a molestiae corrupti numquam quo beatae minima ratione magni accusantium
                  repellat eveniet quia vitae.</p>
                <a class="btn btn-light-blue btn-rounded">Buy now</a>

              </div>
              <!-- Content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Pricing v.3 -->

      <hr class="mb-5">

      <!--Section: Contact v.2-->
      <section class="section pb-5 wow fadeIn" data-wow-delay="0.3s">

        <!--Section heading-->
        <h2 class="font-weight-bold text-center h1 my-5">Contact us</h2>
        <!--Section description-->
        <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
          quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

        <div class="row">

          <!--Grid column-->
          <div class="col-md-8 col-xl-9">
            <form>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form">
                    <input type="text" id="contact-name" class="form-control">
                    <label for="contact-name" class="">Your name</label>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form">
                    <input type="text" id="contact-email" class="form-control">
                    <label for="contact-email" class="">Your email</label>
                  </div>
                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="md-form">
                    <input type="text" id="contact-Subject" class="form-control">
                    <label for="contact-Subject" class="">Subject</label>
                  </div>
                </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                  <div class="md-form">
                    <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                    <label for="contact-message">Your message</label>
                  </div>

                </div>
              </div>
              <!--Grid row-->

            </form>

            <div class="text-center text-md-left my-4">
              <a class="btn btn-light-blue btn-rounded">Send</a>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 col-xl-3">
            <ul class="contact-icons text-center list-unstyled">
              <li><i class="fas fa-map-marker fa-2x"></i>
                <p>San Francisco, CA 94126, USA</p>
              </li>

              <li><i class="fas fa-phone fa-2x"></i>
                <p>+ 01 234 567 89</p>
              </li>

              <li><i class="fas fa-envelope fa-2x"></i>
                <p>contact@mdbootstrap.com</p>
              </li>
            </ul>
          </div>
          <!--Grid column-->

        </div>

      </section>
      <!--Section: Contact v.2-->

    </div>