@extends('frontend.include.main')
@section('content')
<div class="content">
<!--blog start -->
<section id="blog" class="blog" >
    <div class="container">
        <div class="section-header">
            <h2>About the Seat Booking</h2>
            <p>Always upto date with our latest News and Articles </p>
        </div><!--/.section-header-->
        <div class="blog-content">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-item">
                        <div class="single-blog-item-img">
                            <img src="assets/images/blog/b1.jpg" alt="blog image">
                        </div>
                        <div class="single-blog-item-txt">
                            <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                            <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-item">
                        <div class="single-blog-item-img">
                            <img src="assets/images/blog/b2.jpg" alt="blog image">
                        </div>
                        <div class="single-blog-item-txt">
                            <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                            <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                            <p>
                                This is connect the connect online bus booking system. In this connect 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-item">
                        <div class="single-blog-item-img">
                            <img src="assets/images/blog/b3.jpg" alt="blog image">
                        </div>
                        <div class="single-blog-item-txt">
                            <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                            <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
    
</section><!--/.blog-->
<!--blog end -->

<!--subscription strat -->
{{-- <section id="contact"  class="subscription">
    <div class="container">
        <div class="subscribe-title text-center">
            <h2>
                do you want to add your business listing with us?
            </h2>
            <p>
                Listrace offer you to list your business with us and we very much able to promote your Business.
            </p>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="subscription-input-group">
                    <form action="#">
                        <input type="email" class="subscription-input-form" placeholder="Enter your email here">
                        <button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
                            creat account
                        </button>
                    </form>
                </div>
            </div>	
        </div>
    </div>
</section><!--/subscription-->	 --}}
<!--subscription end -->  
</div>


@endsection