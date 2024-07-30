
    <style>
        body {
            background-color: #eee;
        }
        .profile {
            width: 100%;
            height: 350px;
        }
        .percentage {
            font-size: 30px;
        }
        .testimonials {
            height: 350px;
        }
    </style>

    <div class="container-fluid">
        <div class="row mb-5">

            <div class="col">
                <div class="section_title text-center">
                    <h1 class="text-dark">Student Testimonials</h1>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div id="carousel-1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="border rounded">
                                <div class="row no-gutters">
                                    <div class="col-md-5">
                                        <img class="img-fluid profile" src="{{ asset('templates/images/male.png') }}" height="300">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="bg-white p-2 px-3 testimonials mt-4">
                                            <p class="justify-content-center text-dark" style="font-size: 18px">
                                                Throughout my Computer Science journey at NUST, starting with uncertain finances for only the first semester, I persisted with unwavering determination and faith. Guided by NUST's scholarship, I pursued my dream of launching a startup, culminating in securing a place in NSTP's Hatch 8 program. Nights blurred into days as I immersed myself in work, driven by a relentless passion for success. Today, with gratitude, I oversee fifteen offices under NSTP and proudly operate one in Lahore. NUST's belief in me during pivotal moments stands as a testament to resilience and the pursuit of extraordinary dreams beyond ordinary limitations.
                                                &nbsp;<br>Duis aute irure dolor in reprehenderit.<br>
                                            </p>
                                            <div class="d-flex flex-column align-items-center">
                                                <span class="font-weight-bold percentage" style="color: #00558E;">Zain Ul Abedien</span>
                                                <span class="text-dark">CEO/ Founder Vyro</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="border rounded">
                                <div class="row no-gutters">
                                    <div class="col-md-5">
                                        <img class="img-fluid profile" src="{{ asset('templates/images/female.png') }}" height="300">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="bg-white p-2 px-3 testimonials mt-5">
                                            <p class="justify-content-center text-dark" style="font-size: 18px">
                                                I'm Hina Leeza Malik, working as a Community Development Specialist in the Government's Ten Billion Tree Tsunami Program. From Alipur in District Muzaffargarh, I tackled NUST challenges with a positive attitude, backed by an incredibly supportive community at NUST. Now, I'm turning hurdles into opportunities, proving that with determination, a positive mindset, and the right support, dreams do come true. To all dreamers out there, trust
                                                &nbsp;<br>your journey – the bumps make it worthwhile!<br>
                                            </p>
                                            <div class="d-flex flex-column align-items-center">
                                                <span class="font-weight-bold percentage" style="color: #00558E;">Hina Leena Malik</span>
                                                <span class="text-dark">Community Development Specialist, Government of Pakistan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more carousel items if needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
