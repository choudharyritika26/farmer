<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    {{-- /* Basic styles for the slider */
.slider-container {
    width: 100%;
    height: 100vh; /* Set a height for the full viewport */
    overflow: hidden;
    position: relative;
}

.slider {
    display: flex;
    transition: transform 0.5s ease;
}

.slide {
    min-width: 100%;
    position: relative;
}

.slide img {
    width: 100%;
    height: auto;
}

/* Text styling */
.slide-text {
    position: absolute;
    bottom: 20px; /* Position text at the bottom of the slide */
    left: 20px;
    color: white;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    padding: 15px;
    border-radius: 5px;
    max-width: 90%;
}

.slide-text h1 {
    font-size: 2em;
    margin: 0;
}

.slide-text p {
    font-size: 1.2em;
    margin: 5px 0 0;
}

/* Media Queries */

/* For small screens (mobile phones) */
@media (max-width: 600px) {
    .slide-text {
        bottom: 10px; /* Move text higher on small screens */
        left: 10px;
        right: 10px;
        font-size: 1.5em;
    }

    .slide-text h1 {
        font-size: 1.5em; /* Smaller title font size on mobile */
    }

    .slide-text p {
        font-size: 1em; /* Adjust paragraph font size */
    }
}

/* For medium screens (tablets) */
@media (max-width: 900px) {
    .slide-text {
        bottom: 15px; /* Slightly raise text on tablets */
        left: 15px;
        font-size: 1.8em;
    }

    .slide-text h1 {
        font-size: 1.8em;
    }

    .slide-text p {
        font-size: 1.1em;
    }
}

/* For large screens (desktops) */
@media (min-width: 901px) {
    .slide-text {
        bottom: 20px; /* Set text position for larger screens */
        left: 20px;
        font-size: 2em;
    }

    .slide-text h1 {
        font-size: 2.2em; /* Larger title font on desktops */
    }

    .slide-text p {
        font-size: 1.4em; /* Larger paragraph text */
    }
} --}}
