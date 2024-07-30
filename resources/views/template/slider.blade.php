<style>
    .carousel-item {
        height: 80vh; /* Adjust the height as needed */
        min-height: 300px;
        background: no-repeat center center scroll;
        background-size: cover;
    }
    .carousel-caption {
        bottom: 50%;
        transform: translateY(50%);
    }
    .carousel-caption h1 {
        font-size: 2rem;
        font-weight: bold;
        color: #FFB606;
    }
    .carousel-caption .btn {
        margin-top: 1rem;
        font-size: 1rem;
        font-weight: 700;
        color: #000;
        background-color: #FFB606;
        border-color: #FFB606;
        height: 60px; /* Set height */
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    @media (min-width: 768px) {
        .carousel-caption h1 {
            font-size: 3rem;
        }
        .carousel-caption .btn {
            font-size: 1.5rem;
            height: 80px; /* Set height */
        }
    }
    .carousel-item img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    @media (max-width: 576px) {
        .responsive-text {
            font-size: 1rem;
        }
    }
    @media (min-width: 577px) and (max-width: 768px) {
        .responsive-text {
            font-size: 1.1rem;
        }
    }
    @media (min-width: 769px) and (max-width: 992px) {
        .responsive-text {
            font-size: 1.2rem;
        }
    }
    @media (min-width: 993px) {
        .responsive-text {
            font-size: 1.3rem;
        }
    }
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        <!-- First Slide -->
        <div class="carousel-item active">
            <img src="{{ asset('templates/images/mno.jpg') }}" alt="Slide 1">
            <div class="carousel-caption text-center">
                <h1>The support you lend today will remodel their tomorrow</h1>
                <a href="{{ url('endowment_model') }}" class="btn btn-outline-light btn-lg">Invest in Scholarship</a>
                <a href="{{ url('select_project') }}" class="btn btn-outline-light btn-lg">Fund a Project</a>
            </div>
        </div>
        <!-- Second Slide -->
        <div class="carousel-item">
            <img src="{{ asset('templates/images/def.jpg') }}" alt="Slide 2">
            <div class="carousel-caption text-center">
                <h1>Your gift will be passed down to generations</h1>
                <a href="{{ url('endowment_model') }}" class="btn btn-outline-light btn-lg">Invest in Scholarship</a>
                <a href="{{ url('select_project') }}" class="btn btn-outline-light btn-lg">Fund a Project</a>
            </div>
        </div>
        <!-- Third Slide -->
        <div class="carousel-item">
            <img src="{{ asset('templates/images/pqr.jpg') }}" alt="Slide 3">
            <div class="carousel-caption text-center">
                <h1>Build a legacy of lasting change</h1>
                <a href="{{ url('endowment_model') }}" class="btn btn-outline-light btn-lg">Invest in Scholarship</a>
                <a href="{{ url('select_project') }}" class="btn btn-outline-light btn-lg">Fund a Project</a>
            </div>
        </div>
    </div>

    <!-- Carousel Indicators -->
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
</div>
<div class="container-fluid mt-4">
    <div class="row ">
        <div class="col-md-4 text-light p-3" style="margin-top: -70px; font-weight: 700; background-color: #085590">
            <h2 class="text-center text-md-left" style="font-size: 30px;">WHY NUST?</h2>
            <div class="row">
                <div class="col-12">
                    <!-- Responsive image -->
                    <img src="{{ asset('templates/stats/abc.jpg') }}" class="img-fluid" alt="Responsive image" style="max-height: 400px; width: 100%">
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="p-3 p-md-5 mt-5">
                <p class="text-dark responsive-text">
                    By supporting NUST students, you're investing in a world-class education that yields remarkable results. With a <b>94% graduate employment rate and a global QS ranking of 353, NUST is the premier engineering university in Pakistan, offering top-tier education at 1/3rd of the cost against other leading HEIs in Pakistan.</b> Your contribution will empower talented individuals to achieve their full potential, driving innovation and progress in their fields. Join us in shaping the future of Pakistan's next generation of leaders and change-makers.
                </p>
            </div>
        </div>

    </div>
</div>

<!-- Link Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript for automatic sliding -->
<script>
    var carousel = document.getElementById('carouselExampleIndicators');
    var carouselInstance = new bootstrap.Carousel(carousel, {
        interval: 5000,
        wrap: true,
        keyboard: false,
        pause: 'hover',
        ride: 'carousel'
    });
</script>
