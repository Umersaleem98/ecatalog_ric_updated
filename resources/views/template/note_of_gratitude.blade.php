<style>
    .popular.page_section {
        margin-top: -20px;
    }

    .cookie-card {
        width: 100%;
        padding: 1rem;
        background-color: rgba(255, 255, 255, 0.8); /* Make background semi-transparent */
        box-shadow: 20px 20px 30px rgba(0, 0, 0, .05);
        height: 100%; /* Ensuring the card takes full height */
    }

    .title {
        font-weight: 600;
        color: rgb(31 41 55);
    }

    .description {
        margin-top: 1rem;
        font-size: 1rem; /* Base font size */
        line-height: 1.5rem; /* Base line height */
        color: rgb(75 85 99);
        font-weight: 900;
        font-family: 'Mongolian Baliti', sans-serif;
    }

    @media (min-width: 576px) {
        .description {
            font-size: 1.25rem; /* Slightly larger font size for larger screens */
            line-height: 1.75rem;
        }
    }

    @media (min-width: 768px) {
        .description {
            font-size: 1.5rem; /* Larger font size for medium screens */
            line-height: 2rem;
        }
    }

    .description a {
        --tw-text-opacity: 1;
        color: rgb(59 130 246);
    }

    .description a:hover {
        -webkit-text-decoration-line: underline;
        text-decoration-line: underline;
    }

    .actions {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 1rem;
        -moz-column-gap: 1rem;
        column-gap: 1rem;
        flex-shrink: 0;
    }

    .pref {
        font-size: 0.75rem;
        line-height: 1rem;
        color: rgb(31 41 55);
        -webkit-text-decoration-line: underline;
        text-decoration-line: underline;
        transition: all .3s cubic-bezier(0.4, 0, 0.2, 1);
        border: none;
        background-color: transparent;
    }

    .pref:hover {
        color: rgb(156 163 175);
    }

    .pref:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .accept {
        font-size: 0.75rem;
        line-height: 1rem;
        background-color: rgb(17 24 39);
        font-weight: 500;
        border-radius: 0.5rem;
        color: #fff;
        padding-left: 1rem;
        padding-right: 1rem;
        padding-top: 0.625rem;
        padding-bottom: 0.625rem;
        border: none;
        transition: all .15s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .accept:hover {
        background-color: rgb(55 65 81);
    }

    .accept:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .img-container img {
        width: 100%; /* Ensure the image is fluid */
        height: auto; /* Maintain aspect ratio */
        object-fit: cover;
    }

    .bg-image {
        background-image: url('templates/images/abc.jpg'); /* Replace with your image URL */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        opacity: 1;
        padding: 2rem; /* Adding some padding */
    }
</style>

<div class="popular page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>A Note of Gratitude</h1>
                </div>
            </div>
        </div>

        <div class="row d-flex align-items-stretch">
            <div class="col-lg-12">
                <div class="cookie-card d-flex flex-column">
                    <h2 class="text-center text-dark"></h2>
                    <p class="description p-5 bg-image text-light">
                        Throughout the years, the overwhelming support from our well-wishing donors and partners has restored our faith in humanity and has made us immensely proud to relate to such philanthropic Pakistanis around the globe.  
                        We would like to take a moment to thank our distinguished donors, allies and our body of alumni for placing their trust in us and for the continuation of their unwavering support for this cause. We applaud them for standing true to the cause and are sure to say that their kindness will be passed down to generations.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
