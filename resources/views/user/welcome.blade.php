
@include('user.includes.header')
@include('user.includes.nav')

        <header>
            <div class="container-fluid" style="">
                <div class="row bk"></div>
                <div class="container">

                    <div class="row msg text-xs-center">
                        <div class="col-xs-12 col-sm-6 hidden-xs">
                            <h3><b>Stand Out from the Crowd</b></h3>
                            <h4>Find Your Job Here</h4>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-center">
                            <h3><b>Let Jobs Find You !</b></h3>
                            @if(Auth::guest())
                            <button class="btn btn-primary">Login</button>
                            <button class="btn btn-primary">Signup</button>
                            @endif
                        </div>

                    </div>


                    <div class="row counting">
                        <div class="col-xs-12 col-sm-6 col-md-4 content text-xs-center">
                            <h6><b>total jobs posted :</b> 1253</h6>
                            <h6><b>total joined companies :</b> 320</h6>
                            <h6><b>total registered employees :</b> 1682</h6>
                        </div>
                        <div class="col-xs-12 col-md-4 hidden-xs hidden-sm content">
                            <h6><b>web development jobs :</b> 1253</h6>
                            <h6><b>graphic designs jobs :</b> 320</h6>
                            <h6><b>video maker jobs :</b> 1682</h6>
                        </div>
                        <div class="col-xs-4 content hidden-xs">
                            <h6><b>Airport Jobs :</b> 986</h6>
                            <h6><b>IT - Software :</b> 2519</h6>
                            <h6><b>Customer Service :</b> 654</h6>
                        </div>

                    </div>
                </div>

            </div>
        </header>




        <div class="container">
            <div class="row jobs-by-location">
                <div class="col-xs-6 col-sm-4 ">
                    <div class="sub sub-f sub-xs-f">                            
                        <h5><b>Jobs By Location</b></h5>
                        <ul>
                            <li><a href="#">Saudi Arabia (7508)</a></li>
                            <li><a href="#">Qatar (5058)</a></li>
                            <li><a href="#">Oman (1513)</a></li>
                            <li><a href="#">Egypt (6776)</a></li>
                            <li><a href="#">Kuwait (1713)</a></li>
                            <li><a href="#">Bahrain (983)</a></li>
                            <li><a href="#">UAE (18095)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="sub sub-m sub-xs-l">
                        <h5><b>Jobs by Category</b></h5>
                        <ul>
                            <li><a href="#">IT - Software (2521)</a></li>
                            <li><a href="#">Sales (7368)</a></li>
                            <li><a href="#">Graphic Designs (654)</a></li>
                            <li><a href="#">HR / Industrial Relations (885)</a></li>
                            <li><a href="#">Accounts / Tax (1433)</a></li>
                            <li><a href="#">Production / Manufacturing (342)</a></li>
                            <li><a href="#">Construction / Civil Engg (3432)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-xs-center">
                    <div class="sub sub-l sub-xs-t">
                        <h5><b>Jobs by Category</b></h5>
                        <ul>
                            <li><a href="#">IT - Software (2521)</a></li>
                            <li><a href="#">Sales (7368)</a></li>
                            <li><a href="#">Graphic Designs (654)</a></li>
                            <li><a href="#">HR / Industrial Relations (885)</a></li>
                            <li><a href="#">Accounts / Tax (1433)</a></li>
                            <li><a href="#">Production / Manufacturing (342)</a></li>
                            <li><a href="#">Construction / Civil Engg (3432)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid sub" style="padding:30px 15px;">
            <h3 class="text-center"><b>Clients Speak</b></h3>
            <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#quote-carousel" data-slide-to="1"></li>
                        <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-2 text-center">
                                            <img class="img-circle" src="images/default-profile.jpg" alt="Testimonial profile">
                                        </div>
                                        <div class="col-sm-10">
                                            <p><span class="fa fa-quote-left"></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <small>Yara Tarek</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>

                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-2 text-center">
                                            <img class="img-circle" src="images/default-profile.jpg" alt="Testimonial profile">
                                        </div>
                                        <div class="col-sm-10">
                                            <p><span class="fa fa-quote-left"></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <small>Sarah Amgad</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>

                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-2 text-center">
                                            <img class="img-circle" src="images/default-profile.jpg" alt="Testimonial profile">
                                        </div>
                                        <div class="col-sm-10">
                                            <p><span class="fa fa-quote-left"></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <small>Jeremy Amgad</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>


                        </div>

                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                    </div>                          
                </div>
            </div>
            </div>
        </div>
  
        <div class="container" style="padding:50px 0px;">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 style="text-transform:uppercase;color:#0087e0;margin-top: 0">legal consultation</h2>
                    <p><span>Would you like to speak with one of our financial advisers ?</span><br> Just submit your contact details and we’ll be in touch shortly.<br> You can also email us and we'll answer you ASAP.</p>
                    <p><b>I would like to discuss</b></p>
                </div>
            </div>
        </div>



        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-sm-3">
                        <h4><b>ITO Valley</b></h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms and Cnditions</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <h4><b>jobs</b></h4>
                        <ul>
                            <li><a href="#">Local Jobs</a></li>
                            <li><a href="#">Jobs By Location</a></li>
                            <li><a href="#">Jobs By Category</a></li>
                            <li><a href="#">Jobs With My Skills</a></li>
                            <li><a href="#">Jobs By Top Employers</a></li>
                        </ul>
                    </div>
                    <div class="clearfix visible-xs"></div>
                    <div class="col-xs-6 col-sm-3">
                        <h4><b>employer</b></h4>
                        <ul>
                            <li><a href="#">Post A New Job</a></li>
                            <li><a href="#">Browse Employers</a></li>
                            <li><a href="#">Jobs By Category</a></li>
                            <li><a href="#">Jobs With My Skills</a></li>
                            <li><a href="#">Jobs By Top Employers</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <h4><b>social</b></h4>
                        <ul class="social">
                            <li><a href="#"><span class="fa fa-facebook-official"></span> /itovalley</a></li>
                            <li><a href="#"><span class="fa fa-twitter-square"></span> /itovalley</a></li>
                            <li><a href="#"><span class="fa fa-linkedin-square"></span> /itovalley</a></li>
                            <li><a href="#"><span class="fa fa-google-plus-square"></span> /itovalley</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="text-center rights">
                2017 © ITOValley. All Rights Reserved | Privacy Policy
            </div>
        </footer>



        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Go To Top" data-toggle="tooltip" data-placement="left"><span class="fa fa-angle-double-up"></span></a>

        <div class="modal fade" id="signUp" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Sign Up with <b>ITO Valley</b></h4>
                    </div>
                    <div class="modal-body">
                        <form >
                            <div class="form-group">
                                <label class="control-label" for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="logIn" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login with <b>ITO Valley</b></h4>
                    </div>
                    <div class="modal-body">
                        <form >
                            <div class="form-group">
                                <label class="control-label" for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>




