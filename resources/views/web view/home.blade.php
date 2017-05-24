@extends('layouts.webview')

@section('title', 'Home')

@section('content')

    <div id="x-corp-carousel" class="carousel slide hero-slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#x-corp-carousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{URL::asset('../webview/img/img_1.jpg')}}" alt="Hero Slide">
                <!--Slide Image-->

                <div class="container">
                    <div class="carousel-caption">
                        <small class="animated fadeIn">CALL US TODAY</small>
                        <div class="phone animated lightSpeedIn">1-800-1234-567</div>
                        <h1 class="animated lightSpeedIn">Title of Your Product <br>Service or Event</h1>

                        <p class="lead animated lightSpeedIn">It's a tag line, where you can write a key point of your idea.
                            It is a long
                            established fact that a reader will be distracted.</p>

                        <a class="btn btn-primary animated lightSpeedIn" href="#">Work With Us Today</a>
                    </div>
                    <!--.carousel-caption-->
                </div>
                <!--.container-->
            </div>
            <!--.item-->

            <div class="item">
                <img src="{{URL::asset('../webview/img/img_1.jpg')}}" alt="Hero Slide">
                <!--Slide Image-->

                <div class="container">
                    <div class="carousel-caption">

                        <h1 class="animated bounceIn">Title of Your Product <br>Service or Event</h1>

                        <p class="lead animated bounceIn">It's a tag line, where you can write a key point of your idea. It
                            is a long
                            established fact that a reader will be distracted.</p>
                        <a class="btn btn-primary animated bounceIn" href="#">Work With Us Today</a>
                    </div>
                    <!--.carousel-caption-->
                </div>
                <!--.container-->
            </div>
            <!--.item-->

        </div>
        <!--.carousel-inner-->

        <!-- Controls -->
        <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- #x-corp-carousel-->


    <div class="container-fluid">
        <div class="content-wrapper">
            <section class="intro-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <h2 class="wow fadeInDown">Welcome to UNZABECA</h2>
                        <p class="wow fadeInDown">
                            Thank you for taking time to visit the <strong>University of Zambia Business and Economics Association</strong> (UNZABECA) website,
                            they are various advantages of joining the assocaition, amoung them are:
                            <ol style="list-style-type: disc">
                                <li>Getting listed for Internship</li>
                                <li>Up close representation</li>
                                <li>Platform for interacting with the Students Union</li>
                            </ol>
                        </p>

                        <h3 class="wow fadeInDown">About Us</h3>
                        <p class="wow fadeInDown">
                            The University of Zambia Business and Economics Association (UNZABECA) is a
                            student driven association whose members are interested in the acquisition,
                            research/evaluation, sharing and dissemination of information on the global and
                            domestic economy, business and corporate organization. Our mission statement is
                            <i>“bringing economic and business issues closer to the university and wider community”</i>.
                        </p>

                        <h3 class="wow fadeInDown">Our Mission</h3>
                        <p class="wow fadeInDown">Bringing economic issues closer to the university and the wider community.</p>

                        <a class="btn btn-primary wow fadeInDown" href="#" role="button">Read More</a>
                    </div>

                    <div class="col-lg-6 col-md-4"></div>
                </div><!-- /.row -->
            </section><!-- /.intro-wrapper -->


            <section class="service-wrapper">
                <h2 class="section-title wow fadeInDown">Upcoming Events</h2>
                <div class="row">
                    <div class="related-work-carousel">
                    @if($events != [])
                    @foreach($events as $event)
                            <div class="item">
                                <div class="single-portfolio">
                                    <img src="{{Storage::URL($event->photo->photoPath)}}" alt="">
                                    <div class="portfolio-links">
                                        <a class="image-link" href="{{Storage::URL($event->photo->photoPath)}}" ><i class="fa fa-search-plus"></i></a>
                                        <a href="{{url('webview/events/view/1')}}"><i class="fa fa-link"></i></a>
                                        <p style="color: goldenrod">{{$event->event_description}}</p>
                                    </div><!-- /.links -->
                                </div><!-- /.single-portfolio -->
                            </div>
@endforeach
                        @else
                        <p>No upcoming events</p>
                    @endif
                    </div>
                </div> <!-- /.row -->
            </section>

            <section class="advantages-wrapper">
                <h2 class="section-title wow fadeInDown">Our advantages</h2>
                <div class="css-tab text-center">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#experiance" aria-controls="experiance" role="tab" data-toggle="tab">Experiance</a></li>
                        <li><a href="#skills" aria-controls="skills" role="tab" data-toggle="tab">Skills</a></li>
                        <li><a href="#capabilities" aria-controls="capabilities" role="tab" data-toggle="tab">Capabilities</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="experiance">
                            <div class="row">
                                <div class="col-sm-6 text-left experiance-tab-content wow fadeInLeft">
                                    <h3>20 Years of Experience</h3>
                                    <p>Seamlessly strategize empowered action items via adaptive web services. Competently leverage existing just in time mindshare and equity invested information. Holisticly expedite progressive e-markets with cross-platform deliverables. Dramatically orchestrate ethical intellectual capital rather than principle-centered functionalities. Distinctively innovate go forward paradigms with empowered internal or "organic" sources. Distinctively reinvent exceptional intellectual capital whereas client-centric web-readiness.</p>
                                </div><!--/.col-sm-6 -->

                                <div class="col-sm-6 text-left experiance-tab-content wow fadeInRight">
                                    <h3>More than 50 Successful Projects</h3>
                                    <p>Seamlessly strategize empowered action items via adaptive web services. Competently leverage existing just in time mindshare and equity invested information. Holisticly expedite progressive e-markets with cross-platform deliverables. Dramatically orchestrate ethical intellectual capital rather than principle-centered functionalities. Distinctively innovate go forward paradigms with empowered internal or "organic" sources. Distinctively reinvent exceptional intellectual capital whereas client-centric web-readiness.</p>
                                </div><!--/.col-sm-6 -->
                            </div><!-- /.row -->
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="skills">
                            <div class="our-skill">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="our-progress">
                                            <div class="chart" data-percent="73">
                                                <span class="percent">73</span>
                                            </div>

                                            <p>Lorem ipsum dolor consectetuer</p>
                                        </div><!-- /.our-progress -->
                                    </div><!-- /.col-md-3 -->

                                    <div class="col-md-3 col-sm-6">
                                        <div class="our-progress">
                                            <div class="chart" data-percent="80">
                                                <span class="percent">80</span>
                                            </div>

                                            <p>Lorem ipsum dolor consectetuer</p>
                                        </div><!-- /.our-progress -->
                                    </div><!-- /.col-md-3 -->

                                    <div class="col-md-3 col-sm-6">
                                        <div class="our-progress">
                                            <div class="chart" data-percent="90">
                                                <span class="percent">90</span>
                                            </div>

                                            <p>Lorem ipsum dolor consectetuer</p>
                                        </div><!-- /.our-progress -->
                                    </div><!-- /.col-md-3 -->

                                    <div class="col-md-3 col-sm-6">
                                        <div class="our-progress">
                                            <div class="chart" data-percent="70">
                                                <span class="percent">70</span>
                                            </div>

                                            <p>Lorem ipsum dolor consectetuer</p>
                                        </div><!-- /.our-progress -->
                                    </div><!-- /.col-md-3 -->
                                </div><!-- /.row -->
                            </div><!-- /.our-skill -->
                        </div><!--/#skills -->

                        <div role="tabpanel" class="tab-pane fade" id="capabilities">
                            <div class="row ">
                                <div class="col-md-6 col-xs-12 capability-tab-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/tab-capa-1.jpg" alt="">
                                        </div>

                                        <div class="media-body text-left">
                                            <h3 class="media-heading">Building your business growth &amp; prosperity</h3>
                                            <p>Holisticly mesh granular bandwidth without seamless manufactured products. Monotonectally productize team building e-commerce before global bandwidth. Uniquely mesh resource sucking content and robust portals.</p>
                                        </div><!-- /.media-body -->
                                    </div><!-- /.media -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6 col-xs-12 capability-tab-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/tab-capa-2.jpg" alt="">
                                        </div>

                                        <div class="media-body text-left">
                                            <h3 class="media-heading">Building your business growth &amp; prosperity</h3>
                                            <p>Holisticly mesh granular bandwidth without seamless manufactured products. Monotonectally productize team building e-commerce before global bandwidth. Uniquely mesh resource sucking content and robust portals.</p>
                                        </div><!-- /.media-body -->
                                    </div><!-- /.media -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div><!-- /.css-tab -->
            </section>

            <section class="handover-wrapper">
                <h2 class="section-title wow fadeInDown">Our Handover Project</h2>
                <div id="css-handover-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#css-handover-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#css-handover-carousel" data-slide-to="1"></li>
                        <li data-target="#css-handover-carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-6 col-md-push-6 wow fadeRight">
                                    <div class="handover-work-thumb">
                                        <img src="img/pr2.png" alt="">
                                    </div><!-- /.client-thumb -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6 col-md-pull-6 wow fadeInLeft">
                                    <div class="handover-project">
                                        <h3>Proactively productivate e-business e-commerce</h3>
                                        <p>Efficiently communicate installed base leadership skills with extensible testing procedures. Enthusiastically evolve leading-edge scenarios.</p>

                                        <ul class="check-square">
                                            <li>Globally exploit interoperable infrastructures</li>
                                            <li>Collaboratively initiate customer directed manufactured</li>
                                            <li>Competently whiteboard backend information rather</li>
                                            <li>Efficiently empower next-generation sources</li>
                                            <li>Uniquely expedite sticky e-markets via orthogonal</li>
                                            <li>Professionally strategize orthogonal core competency</li>
                                        </ul>

                                        <a class="btn btn-primary" href="portfolio-single.html" role="button">Read More</a>
                                    </div><!-- /.handover-project -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6 col-md-push-6">
                                    <div class="handover-work-thumb">
                                        <img src="img/pr2.png" alt="">
                                    </div><!-- /.client-thumb -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6 col-md-pull-6">
                                    <div class="handover-project">
                                        <h3>Proactively productivate e-business e-commerce</h3>
                                        <p>Efficiently communicate installed base leadership skills with extensible testing procedures. Enthusiastically evolve leading-edge scenarios.</p>

                                        <ul class="check-square">
                                            <li>Globally exploit interoperable infrastructures</li>
                                            <li>Collaboratively initiate customer directed manufactured</li>
                                            <li>Competently whiteboard backend information rather</li>
                                            <li>Efficiently empower next-generation sources</li>
                                            <li>Uniquely expedite sticky e-markets via orthogonal</li>
                                            <li>Professionally strategize orthogonal core competency</li>
                                        </ul>

                                        <a class="btn btn-primary" href="portfolio-single.html" role="button">Read More</a>
                                    </div><!-- /.handover-project -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6 col-md-push-6">
                                    <div class="handover-work-thumb">
                                        <img src="img/pr2.png" alt="">
                                    </div><!-- /.client-thumb -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6 col-md-pull-6">
                                    <div class="handover-project">
                                        <h3>Proactively productivate e-business e-commerce</h3>
                                        <p>Efficiently communicate installed base leadership skills with extensible testing procedures. Enthusiastically evolve leading-edge scenarios.</p>

                                        <ul class="check-square">
                                            <li>Globally exploit interoperable infrastructures</li>
                                            <li>Collaboratively initiate customer directed manufactured</li>
                                            <li>Competently whiteboard backend information rather</li>
                                            <li>Efficiently empower next-generation sources</li>
                                            <li>Uniquely expedite sticky e-markets via orthogonal</li>
                                            <li>Professionally strategize orthogonal core competency</li>
                                        </ul>

                                        <a class="btn btn-primary" href="portfolio-single.html" role="button">Read More</a>
                                    </div><!-- /.handover-project -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.item -->
                    </div><!-- /.carousel-inner -->
                </div><!-- /.carousel -->
            </section>


            <section class="testimonial-wrapper">
                <h2 class="section-title wow fadeInDown">What our Clients Say</h2>
                <div id="css-testimonial-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#css-testimonial-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#css-testimonial-carousel" data-slide-to="1"></li>
                        <li data-target="#css-testimonial-carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-8 col-sm-7 wow fadeInLeft">
                                    <div class="client-testimonial">
                                        <p>Enthusiastically envisioneer state of the art quality vectors without robust materials. Conveniently coordinate error-free ideas and.sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                        <span class="client-name">John Doe</span>, <span class="client-org">Themehippo</span>
                                    </div>
                                </div><!-- /.col-md-8 -->
                                <div class="col-md-4 col-sm-5 wow fadeInRight">
                                    <div class="client-thumb">
                                        <img src="img/tm-4.jpg" alt="">
                                    </div><!-- /.client-thumb -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="row">
                                <div class="col-md-8 col-sm-7">
                                    <div class="client-testimonial">
                                        <p>Enthusiastically envisioneer state of the art quality vectors without robust materials. Conveniently coordinate error-free ideas and.sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                        <span class="client-name">John Doe</span>, <span class="client-org">Themehippo</span>
                                    </div>
                                </div><!-- /.col-md-8 -->
                                <div class="col-md-4 col-sm-5">
                                    <div class="client-thumb">
                                        <img src="img/tm-4.jpg" alt="">
                                    </div><!-- /.client-thumb -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="row">
                                <div class="col-md-8 col-sm-7">
                                    <div class="client-testimonial">
                                        <p>Enthusiastically envisioneer state of the art quality vectors without robust materials. Conveniently coordinate error-free ideas and.sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                        <span class="client-name">John Doe</span>, <span class="client-org">Themehippo</span>
                                    </div>
                                </div><!-- /.col-md-8 -->
                                <div class="col-md-4 col-sm-5">
                                    <div class="client-thumb">
                                        <img src="img/tm-4.jpg" alt="">
                                    </div><!-- /.client-thumb -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                        </div><!-- /.item -->
                    </div><!-- /.carousel-inner -->
                </div><!-- /.carousel -->
            </section><!-- /.testimonial-wrapper -->


            <section class="trusted-client-wrapper">
                <h2 class="section-title wow fadeInDown">We are Trusted by</h2>
                <ul class="partner-logo">
                    <li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-1.png" alt=""></a></li>
                    <li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-2.png" alt=""></a></li>
                    <li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-3.png" alt=""></a></li>
                    <li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-4.png" alt=""></a></li>
                    <li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-5.png" alt=""></a></li>
                    <li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-6.png" alt=""></a></li>
                    <li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-7.png" alt=""></a></li>
                    <li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-8.png" alt=""></a></li>
                    <li class="wow zoomIn"><a href="#"><img src="img/partner/partner-logo-9.png" alt=""></a></li>
                </ul>
            </section>

            <section class="subscription-wrapper text-center">
                <h2 class="wow fadeInDown">Take into our subscription plans</h2>
                <h3 class="pricing-sub wow fadeInDown">Choose the one which fits your organization (don't worry, you will be able to upgrade <br> or downgrade or cancel it anytime)</h3>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-lg-offset-2 text-left wow fadeInLeft">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Basic <small>Dynamically morph focused</small></h2>
                                <p>Objectively empowers <br> Clicks and morter schemas <br> whereas plug and play testing</p>
                            </div><!-- /.panel-heading -->

                            <div class="panel-body">
                                <ul class="check-square-o">
                                    <li>Compellingly myocardinate</li>
                                    <li>Stand alone value</li>
                                    <li>Uniquely strategize superior</li>
                                </ul>

                                <span class="price">$47 <small>/ Per month</small></span>

                                <div class="pricing-btn">
                                    <a class="btn btn-success" href="#">Get Started</a> <span>30 days trial included</span>
                                </div>
                            </div><!-- /.panel-body -->
                        </div><!-- /.panel -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-lg-4 col-md-6 col-sm-6 text-left wow fadeInRight">
                        <div class="panel panel-default featured-price">
                            <div class="panel-heading">
                                <h2>Enterprise <small>Dynamically morph focused</small></h2>
                                <p>Objectively empowers <br> Clicks and morter schemas <br> whereas plug and play testing</p>
                            </div><!-- /.panel-heading -->

                            <div class="panel-body">
                                <ul class="check-square-o">
                                    <li>Compellingly myocardinate</li>
                                    <li>Stand alone value</li>
                                    <li>Uniquely strategize superior</li>
                                </ul>

                                <span class="price">$399 <small>/ Per month</small></span>

                                <div class="pricing-btn">
                                    <a class="btn btn-success" href="#">Get Started</a> <span>30 days trial included</span>
                                </div>

                            </div><!-- /.panel-body -->
                        </div><!-- /.panel -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </section>

            <section class="support-wrapper">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-1">
                        <h2 class="wow fadeInDown">We have 24/7 dedicated support team</h2>
                        <p class="wow fadeInDown">Proactively negotiate interdependent quality vectors for cross functional collaboration and idea-sharing. Dynamically myocardinate business quality vectors for web-enabled leadership. Synergistically simplify world-class alignments whereas extensible.</p>

                        <a class="btn btn-primary btn-lg wow fadeInDown" href="#">Get Instant Support</a>
                    </div>
                </div>
            </section>
        </div><!-- /.content-wrapper -->
    </div><!-- /.container -->

@endsection