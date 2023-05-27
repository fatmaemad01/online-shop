@extends('dashboard')

@section('content')

<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="caption">
                        <h2>Online Clothing Store</h2>
                        <div class="line-dec"></div>
                        <p>
                            Our store help you to get what you need
                            <strong>Quickly.</strong> It's provide many services and
                            <b>Special Offers.</b>
                            <!-- <br><br>Please tell your friends about <a rel="nofollow" href="https://www.facebook.com/tooplate/">Tooplate</a> free template site. Thank you. Photo credit goes to <a rel="nofollow" href="https://www.pexels.com">Pexels website</a>.</p> -->
                        </p>

                        <div class="main-button">
                            <a href="#">Order Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading justefiy-content-between">
                        <form action="" class="row g-2 ">
                            <div class="col-6">
                                <h1 class="pb-2">Featured Items</h1>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                      @foreach($categories as $category)
                        <a href="#">
                            <div class="featured-item">
                                <img src="{{ $category->image_url }}" alt="Item 1" />
                                <h4>{{$category->name}}</h4>
                            </div>
                        </a>
                        @endforeach  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featred Ends Here -->

    <div class="about-page" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>About Us</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{ asset('assets/images/about-us.jpg')}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <h4>Phasellus vel interdum elit</h4>
                        <p>
                            <a href="https://www.pexels.com/photo/group-of-people-raising-right-hand-1059120/">Photo Credit</a>
                            goes to Pexels website. Aliquam erat volutpat. Pellentesque
                            fringilla, ligula consectetur cursus scelerisque, leo elit
                            pellentesque sapien, et pharetra arcu elit vitae sem.
                            Suspendisse erat dui, condimentum in mi ac, varius tempor
                            sapien. Donec in justo sit amet ex aliquet maximus ac quis erat.
                        </p>
                        <br />
                        <p>
                            Donec fermentum tincidunt tellus quis fermentum. Proin eget
                            imperdiet purus. Nulla facilisi. Aliquam tincidunt porttitor dui
                            sed euismod. Duis est libero, rhoncus fermentum turpis id,
                            tempus fringilla ipsum. Nullam venenatis tincidunt neque vel
                            hendrerit. Suspendisse porta pretium porttitor.
                        </p>
                        <br />

                        <div class="share">
                            <h6>
                                Find us on:
                                <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-page" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Contact Us</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="map">
                        <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="500px" frameborder="0" style="border: 0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="container">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="" />
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="" />
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="" />
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">
                                                Send Message
                                            </button>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="share">
                                            <h6>
                                                You can also keep in touch on:
                                                <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endSection