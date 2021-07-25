@extends('newSite.body')
@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
              <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
            </div>

            <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
              <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
              <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

              <div class="icon-box">
                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>

              <div class="icon-box">
                <div class="icon"><i class="bx bx-gift"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>

              <div class="icon-box">
                <div class="icon"><i class="bx bx-atom"></i></div>
                <h4 class="title"><a href="">Dine Pad</a></h4>
                <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
              </div>

            </div>
          </div>
              <!-- ======= Testimonials Section ======= -->

          <section id="testimonials" class="testimonials section-bg">
              <div class="container-fluid">

                <div class="section-title">
                  <h2>Testimonials</h2>
                  <h3>What They <span>Are Saying</span> About Us</h3>
                  <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
                </div>

                <div class="row justify-content-center">
                  <div class="col-xl-10">

                    <div class="row">

                      <div class="col-lg-6">
                        <div class="testimonial-item">
                          <img src="{{asset('newSitePublic/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                          <h3>Saul Goodman</h3>
                          <h4>Ceo &amp; Founder</h4>
                          <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                        </div>
                      </div><!-- End testimonial-item -->

                      <div class="col-lg-6">
                        <div class="testimonial-item mt-4 mt-lg-0">
                          <img src="{{asset('newSitePublic/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                          <h3>Sara Wilsson</h3>
                          <h4>Designer</h4>
                          <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                        </div>
                      </div><!-- End testimonial-item -->

                      <div class="col-lg-6">
                        <div class="testimonial-item mt-4">
                          <img src="{{asset('newSitePublic/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                          <h3>Jena Karlis</h3>
                          <h4>Store Owner</h4>
                          <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                        </div>
                      </div><!-- End testimonial-item -->

                      <div class="col-lg-6">
                        <div class="testimonial-item mt-4">
                          <img src="{{asset('newSitePublic/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                          <h3>Matt Brandon</h3>
                          <h4>Freelancer</h4>
                          <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                        </div>
                      </div><!-- End testimonial-item -->

                      <div class="col-lg-6">
                        <div class="testimonial-item mt-4">
                          <img src="{{asset('newSitePublic/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                          <h3>John Larson</h3>
                          <h4>Entrepreneur</h4>
                          <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                        </div>
                      </div><!-- End testimonial-item -->

                      <div class="col-lg-6">
                        <div class="testimonial-item mt-4">
                          <img src="{{asset('newSitePublic/assets/img/testimonials/testimonials-6.jpg')}}" class="testimonial-img" alt="">
                          <h3>Emily Harison</h3>
                          <h4>Store Owner</h4>
                          <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea et quia quidem.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                        </div>
                      </div><!-- End testimonial-item -->

                    </div>
                  </div>
                </div>

              </div>
            </section>
            <!-- End Testimonials Section -->

        </div>
      </section><!-- End About Section -->
          <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container-fluid">

          <div class="row justify-content-center skills-content">

            <div class="col-xl-5 col-lg-6">

              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

            <div class="col-xl-5 col-lg-6">

              <div class="progress">
                <span class="skill">PHP <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>

        </div>
      </section><!-- End Skills Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts section-bg">
        <div class="container-fluid">

          <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>

          </div>

        </div>
      </section><!-- End Counts Section -->
      @stop
