@extends('layout')
<head>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">

</head>
@section('title')
Home
@endsection
@section('content')
<section>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('slideshow-1.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('slideshow-2.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('slideshow-3.jpg')}}" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
</section>
<!-- end Home -->

<!-- start about -->
<section id="about">
<div class="container title d-flex align-items-center justify-content-center position-relative">
    <h2>A</h2>
    <h3 class="position-absolute fw-bold">About Us</h3>


</div>
<p class="text-center text-muted">Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim <br> auctor, fringilla risus at, imperdiet turpis. Pellentesque elementum libero enim.</p>
<div class="container">
    <div class="row py-5">
        <div class="col-md-7">
            <div>
                <p>Pellentesque vel elit egestas, pretium est ac, convallis orci. Vivamus sem nisl, tristique vel fringilla vitae, efficitur at eros. Duis aliquet aliquet pharetra. Suspendisse bibendum erat quis gravida pulvinar. Phasellus vel eros porta, blandit dui ac, viverra felis.</p>
                <p>Nunc placerat iaculis pulvinar. Nullam auctor mauris sed urna posuere volutpat. Mauris ut dui sit amet elit fermentum fermentum. Fusce tincidunt diam at bibendum porta.</p>
                <p>Aliquam nunc felis, sagittis eu purus non, interdum vehicula urna. Vivamus congue diam sapien, eu pellentesque ipsum ultricies quis.</p>

            </div>
        </div>
        <div class="col-md-5">
            <div>
                <div class=" prog_content d-flex justify-content-between">
                    <p>Branding</p>
                    <p>80%</p>

                </div>
                <div class="progress">
                    <div class="progress-bar prog1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
            </div>
            <div class="py-1">
                <div class=" prog_content2 d-flex justify-content-between">
                    <p>Web Design</p>
                    <p>95%</p>

                </div>
                <div class="progress">
                    <div class="progress-bar prog2" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
            </div>
            <div class="py-1">
                <div class=" prog_content3 d-flex justify-content-between">
                    <p>Graphic Design</p>
                    <p>85%</p>

                </div>
                <div class="progress">
                    <div class="progress-bar prog3" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
            </div>
            <div class="py-1">
                <div class=" prog_content4 d-flex justify-content-between">
                    <p>Development</p>
                    <p>70%</p>

                </div>
                <div class="progress">
                    <div class="progress-bar prog4" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
            </div>
        </div>
    </div>

</div>
</section>
<!-- end about -->
<!-- start team -->
<section id="team" class="my-5">
<div class="container title d-flex align-items-center justify-content-center position-relative">
    <h2>O</h2>
    <h3 class="position-absolute fw-bold">Our Team</h3>
</div>
<p class="text-center text-muted">Vestibulum ante ipsum primis in faucibus orci. Morbi tincidunt urna imperdiet tincidunt <br> rhoncus. Sed mollis ligula non massa aliquam faucibus.</p>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="text-center team_caption">
                <div class="position-relative overflow-hidden ">
                    <img class="img-fluid border rounded-3 team_img" src="{{asset('member-4.jpg')}}" alt="">

                </div>

                <h4>Michael Broad</h4>
                <p>Web Designer</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="text-center team_caption">
                <div class="position-relative overflow-hidden ">
                    <img class="img-fluid border rounded-3 team_img" src="{{asset('member-2.jpg')}}" alt="">

                </div>

                <h4>Jeannette Crow</h4>
                <p>CEO Founder</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="text-center team_caption">
                <div class="position-relative overflow-hidden ">
                    <img class="img-fluid border rounded-3 team_img" src="{{asset('member-3.jpg')}}" alt="">

                </div>

                <h4>Martin Lawrence</h4>
                <p>App Developer</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="text-center team_caption">
                <div class="position-relative overflow-hidden ">
                    <img class="img-fluid border rounded-3 team_img" src="{{asset('member-1.jpg')}}" alt="">

                </div>

                <h4>Isabella Dowson</h4>
                <p>Creative Director</p>
            </div>
        </div>

    </div>
</div>
</section>
<!-- end team -->
<!-- start idea -->
<section id="idea">
<div class="container">
    <div class="row justify-content-between py-5 text-center">
        <div class="col-md-6  ">
        <div>
            <h2>Do you have any ideas?</h2>
        </div>
    </div>
    <div class="col-md-3 ">
        <div>
            <button class="btn btn-defult idea_button"> <a href="#fourm">Contact Us</a> </button>
        </div>
    </div>
</div>
</div>
</section>
<!-- end idea -->
<!-- start services -->
<section id="services">
<div class="container title d-flex align-items-center justify-content-center position-relative">
    <h2>S</h2>
    <h3 class="position-absolute fw-bold">Services</h3>
</div>
<p class="text-center text-muted">Nullam ac enim auctor, fringilla risus at, imperdiet turpis. Pellentesque elementum libero <br> rhoncus. Sed mollis ligula non massa aliquam faucibus.</p>
<div class="container">
    <div class="row gy-3 py-5">
        <div class="col-md-4">
            <div class="d-flex serv_caption">
                <div class="px-4 serv_icon"><i class="fa-solid fa-laptop fa-2x"></i></div>
                <div>
                    <h3>Responsive Layout</h3>
                    <p class="text-muted">Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex serv_caption">
                <div class="px-4 serv_icon"><i class="fa-solid fa-pen-ruler fa-2x"></i></div>
                <div>
                    <h3>Responsive Layout</h3>
                    <p class="text-muted">Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex serv_caption">
                <div class="px-4 serv_icon"><i class="fa-solid fa-flag fa-2x"></i></div>
                <div>
                    <h3>Responsive Layout</h3>
                    <p class="text-muted">Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex serv_caption">
                <div class="px-4 serv_icon"><i class="fa-solid fa-address-card fa-2x"></i></div>
                <div>
                    <h3>Ajax Portfolio</h3>
                    <p class="text-muted">Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex serv_caption">
                <div class="px-4 serv_icon"><i class="fa-solid fa-gear fa-2x"></i></div>
                <div>
                    <h3>Color Options</h3>
                    <p class="text-muted">Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex serv_caption">
                <div class="px-4 serv_icon"><i class="fa-solid fa-user"></i></i></div>
                <div>
                    <h3>Audio Support</h3>
                    <p class="text-muted">Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex serv_caption">
                <div class="px-4 serv_icon"><i class="fa-solid fa-clipboard-list fa-2x"></i></div>
                <div>
                    <h3>Well Documented</h3>
                    <p class="text-muted">Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex serv_caption">
                <div class="px-4 serv_icon"><i class="fa-brands fa-facebook"></i></div>
                <div>
                    <h3>Background Videos</h3>
                    <p class="text-muted">Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex serv_caption">
                <div class="px-4 serv_icon"><i class="fa-solid fa-sliders fa-2x"></i></div>
                <div>
                    <h3>Intro Slider</h3>
                    <p class="text-muted">Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut.</p>
                </div>
            </div>
        </div>

    </div>
</div>
</section>
<!-- end services -->
<!-- staer client slider -->

<!-- end client slider -->
<!-- start fourm -->
<section id="fourm" class="py-5">
<div class="container title d-flex align-items-center justify-content-center position-relative">
    <h2>G</h2>
    <h3 class="position-absolute fw-bold">Get In Touch</h3>
</div>
<p class="text-center text-muted">Mauris at tempus mi, ut iaculis dui. Integer laoreet mattis justo nec pretium. Ut nibh elit, <br>fermentum vel hendrerit vel, dictum nec velit. Morbi volutpat suscipit.</p>
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <div>
                <h2>Get answers and advices from professional consultants.</h2>
                <div class="d-flex fourm_caption py-2">

                <div class="d-flex flex-column py-3">
                    <h3>Address</h3>
                    <p>1650 Lombard Street, San Francisco, CA 94123</p>
                </div>

            </div>
            <div class="d-flex  fourm_caption py-2">

                <div class="d-flex flex-column py-3">
                    <h3>Phone</h3>
                    <p>+1 (415) 876-3250 / +1 (415) 876-3251</p>
                </div>

            </div>
            <div class="d-flex fourm_caption py-2" id="last_caption">

                <div class="d-flex flex-column py-3">
                    <h3>Say Hello</h3>
                    <p><a href="#" class="mail text-black">[email protected]</a></p>
                </div>

            </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="fourms">
                    <input type="text" id="inputName" class="form-control" placeholder="Name" aria-describedby="nameHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                    </div>
                    <input type="mail" id="inputEmail" class="form-control" placeholder="Email" aria-describedby="mialHelpBlock">
                    <div id="mailHelpBlock" class="form-text">
                    </div>
                    <input type="text" id="inputPhone" class="form-control" placeholder="Phone" aria-describedby="phoneHelpBlock">
                    <div id="phoneHelpBlock" class="form-text">
                    </div>
                    <input type="text" id="messageEmail" class="form-control1" placeholder="Message" aria-describedby="messageHelpBlock">
                    <div id="messageHelpBlock" class="form-text">
                    </div>
                    <button class="fourm_button">Send Message</button>
            </div>
        </div>
    </div>

</div>
</section>
<!-- end fourm -->

<!-- start footer -->
<footer id="footer" class="pb-5">
<div class="container footer_img text-center py-5 ">
    <img src="image/icon.png" class="img-fluid" alt="">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3 ">
            <div>
                <h2>Contact Info</h2>
                <p>1650 Lombard Street, <br> San Francisco, CA 94123</p>
                <p>+1 (415) 876-3250 <br><a href="#" class="footer_hove">[email protected]</a></p>
            </div>
        </div>
        <div class="col-md-3">
            <div>
                <h2>Useful Links</h2>
                <ul>
                    <li><a href="#" class="footer_hove">Support</a></li>
                    <li><a href="#" class="footer_hove">Privacy Policy</a></li>
                    <li><a href="#" class="footer_hove">Terms & Conditions</a></li>
                    <li><a href="#" class="footer_hove">Affiliate Program</a></li>
                    <li><a href="#" class="footer_hove">Careers</a></li>

                </ul>

            </div>
        </div>
        <div class="col-md-3 ">
            <div>
                <h2>Recent Posts</h2>
                <ul>
                    <li><a href="#" class="footer_hove">Sunset in Venice</a></li>
                    <li><a href="#" class="footer_hove">Aerial View of Village</a></li>
                    <li><a href="#" class="footer_hove">Lighted Concrete City</a></li>
                    <li><a href="#" class="footer_hove">The Little Ghost</a></li>
                    <li><a href="#" class="footer_hove">Royal Oats ft. Waldo</a></li>

                </ul>

            </div>
        </div>
        <div class="col-md-3 footer_btn">
            <div>
                <h2>Popular Tags</h2>
                <div>
                    <button>HTML5</button>
                    <button>CSS3</button>
                    <button>jQuery</button>
                    <button>UX / UI</button>
                    <button>Web</button>
                    <button>Graphic</button>
                    <button>Design</button>
                    <button>Development</button>
                </div>


            </div>
        </div>
    </div>
</div>

</footer>
<!-- end footer -->
<!-- start copy right -->
<footer class="bg-black copy_right">
<div class="container py-3">
<div class="row justify-content-between align-items-center text-center">

    <div class="col-md-4 copy_end">
        <p>Copyright © 2023</p>
    </div>
</div>
</div>
</footer>
<!-- end copy right -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>


@endsection
