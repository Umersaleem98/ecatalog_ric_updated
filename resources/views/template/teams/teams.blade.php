<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teams</title>
    @include('template.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        /* Your existing styles */
        .custom-paragraph {
            font-size: 16px;
            line-height: 1.2;
            position: relative;
        }
        .signature {
            font-size: 20px;
            color: black; /* Changed to white */
            margin-right: 40px;
            text-align: right;
            font-weight: bold;
            margin-top: 10px;
        }
        .hover-card {
            transition: all 0.3s ease;
        }
        .hover-card:hover {
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
            transform: translateY(-5px);
        }
        .social-icon {
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .custom-paragraph {
            font-size: 1.1em;
            color: black;
            line-height: 1.2;
        }
        .custom-paragraph .highlight {
            font-weight: bold;
            color: black;
        }
        .quote img {
            width: 25px;
            height: 25px;
            color: blue;
            transform: rotate(180deg);
        }

        .img-fluid {
            border-radius: 8px;
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
            position: relative;
            /* z-index: 2; Adjusted z-index */
        }
        .img-fluid:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            z-index: 2; /* Adjusted z-index */
        }
        span {
            color: black; /* Changed to white */
        }
        .mt-4 {
            margin-top: 1rem !important;
        }
        .mt-5 {
            margin-top: 2rem !important;
        }
        .no-gutters {
            margin-left: 0;
            margin-right: 0;
        }
        .no-gutters .col-md-8,
        .no-gutters .col-md-4 {
            padding-left: 0;
            padding-right: 0;
        }
        .testimonials_item {
            padding: 1rem;
            background-color: #F7F7F7; /* Changed background to gray */
        }
        .testimonials_text {
            font-size: 0.9rem; /* Reduced font size */
            color: black; /* Set text color to white */
        }
    </style>
</head>
<body>

@include('template.home')

<div class="super_container">
    @include('template.navbar')
    <br><br><br><br><br>

    <div class="row mt-4">
        <div class="col">
            <div class="section_title text-center">
                <h1>MEET OUR TEAM</h1>
            </div>
        </div>
    </div>

    <!-- Header -->
    <section class="container mt-5">
        <div class="row justify-content-center align-items-center no-gutters">

            <div class="col-md-4  order-1 ">
                <img src="{{ asset('team/Arooba_Gillani.png') }}" class="img-fluid" alt="CEO Image" style="max-height: 550px; width: 100%; box-shadow: 0 0 20px red; border:6px solid orange; z-index: 2;"> <!-- Adjusted z-index -->
            </div>
            <div class="col-md-8  order-2">
                <div class="owl-item">
                    <div class="testimonials_item text-center" style="text-align: left; max-height: 500px; background-color: #F7F7F7; z-index: 1;"> <!-- Changed background to gray -->
                        <p class="testimonials_text" style="text-align: justify; padding: 1rem;">
                            {{-- <span class="quote" style="font-size: 50px;">"</span> --}}
                            <b style="font-size: 30px; color: orange">"</b><b>A commitment</b> to quality faculty and students has fueled NUST’s impressive rise in rankings and the success of our international alumni network. As Director Advancement, I am privileged to steer a self-sustaining system that supports <span style="font-weight: bold;">Pakistan’s leading science and technology university.</span> Our aim is to become the driving force of Pakistan’s knowledge economy, with the <span style="font-weight: bold;">dream of making NUST a need-blind university.</span>
                            Many deserving students face significant financial challenges, with <span style="font-weight: bold;">nearly half of our undergraduates requiring scholarships. Despite our best efforts, a gap remains, affecting 150 to 250 students </span> annually. Our <span style="font-weight: bold;">NEED Initiative Campaign</span> aims to bridge this gap, ensuring all talented students can afford higher education.
                            <br>
                            Your support is crucial to this campaign, dedicated to making need-blind admissions a reality and empowering our youth. <span style="font-weight: bold;">Join us in sponsoring dreams and lighting the way for equitable future.
                                <b style="font-size: 30px; color: orange">"</b>
                        </p>
                        <div class="signature" style="text-align: right;">Arooba Gillani</div>
                        <div style="font-size: 18px; color: black; margin-right: 65px; text-align: right; font-weight: bold; margin-top: -4px;">Director</div>
                        <div style="font-size: 16px; color: black; margin-right: 25px; text-align: right; font-weight: bold; margin-top: -4px;">University Advancement Office</div>
                    </div>
                </div>
            </div>

        </div>
    </section>


<br>
    <div class="container mt-5">
        <div class="row">
            <!-- Add hover-card class to each card -->
            @foreach ($teams as $item)
            <div class="col-md-3 col-sm-12 mb-4">
                <div class="card hover-card"  >
                    <div class="card-body text-center" style="box-shadow: 0 0 6px red; border:3px solid orange;">
                        <img src="{{ asset('team/' . $item->image) }}" class="img-fluid mb-3" alt="{{ $item->name }} Image" style="height: 240px; width:100%">
                        <h3 class="text-dark mt-3 text-center">{{ $item->name }}</h3>
                        <h5 class="text-dark mt-3 text-center">{{ $item->designation }}</h5>
                        <a href="{{ url('meet_out_team', ['id' => $item->id]) }}" class="mt-3 text-center">About {{ $item->name }} <span>+</span></a>
                        <h2 class="text-center mt-3">
                            <a href="{{$item->social_media}}" style="height: 30px; width: 30px;"><i class="fa-brands fa-linkedin"></i></a></h2 class="text-center mt-3">
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>


    @include('template.event')
    @include('template.footer')
</div>
