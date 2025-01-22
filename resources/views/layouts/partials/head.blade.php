<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Patryk Kaczmarek, Bartek Wiśniewski, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.84.0">

<title>CarRent - Wypożyczalnia samochodów</title>

<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Bootstrap core CSS -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

{{--<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>--}}

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    /*<!-- Custom styles for navbar -->*/
    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .form-control-dark {
        color: #fff;
        background-color: var(--bs-dark);
        border-color: var(--bs-gray);
    }
    .form-control-dark:focus {
        color: #fff;
        background-color: var(--bs-dark);
        border-color: #fff;
        box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .text-small {
        font-size: 85%;
    }

    .dropdown-toggle {
        outline: 0;
    }
    /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

    /* Carousel base class */
    .carousel {
        margin-bottom: 4rem;
    }
    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        bottom: 3rem;
        z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
        height: 32rem;
    }
    .carousel-item > img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 32rem;
    }

    /* GLOBAL STYLES
-------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
        color: #5a5a5a;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
    }
    .marketing h2 {
        font-weight: 400;
    }
    /* rtl:begin:ignore */
    .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
    }
    /* rtl:end:ignore */


    /* Featurettes
    ------------------------- */

    .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
        font-weight: 300;
        line-height: 1;
        /* rtl:remove */
        letter-spacing: -.05rem;
    }


    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
    }

    @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
    }
    /* NAPRAWA KARUZELI (zdjęcia rozciągniete itp)
    ----------------------------------------------------------
     */
    .carousel .carousel-inner img {
        width: 100%;
        height: 30em;
        object-fit: cover;
        overflow: hidden;
        filter: brightness(50%);
    }
</style>
