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

                        <h1 class="animated lightSpeedIn" >The University of Zambia <br>Business and Economics Association</h1>

                        <p class="lead animated lightSpeedIn">It's a tag line, where you can write a key point of your idea.
                            It is a long
                            established fact that a reader will be distracted.</p>

                        <a class="btn btn-primary animated lightSpeedIn" href="{{url('webview/members/join/form')}}">Join Us Today</a>
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

                        <h1 class="animated bounceIn">The University of Zambia <br>Business and Economics Association</h1>

                        <p class="lead animated bounceIn">It's a tag line, where you can write a key point of your idea. It
                            is a long
                            established fact that a reader will be distracted.</p>
                        <a class="btn btn-primary animated bounceIn" href="{{url('webview/members/join/form')}}">Join Us Today</a>
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
                            they are various advantages of joining the association, among them are:
                            <ol style="list-style-type: disc">
                                <li>Getting listed for Internship</li>
                                <li>Up close representation</li>
                                <li>Platform for business and economic issues</li>
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

                        <a class="btn btn-primary wow fadeInDown" href="{{URL::asset('/webview/general_about')}}" role="button">Read More</a>
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

        </div><!-- /.content-wrapper -->
    </div><!-- /.container -->

@endsection