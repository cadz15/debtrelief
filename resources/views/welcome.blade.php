@section('title', 'Welcome to '. $_siteSettings['site_name'])

@section('content')
    @include('components.hero')
    @include('components.howitwork')
    @include('components.contentwithreview')
    @include('components.whyus')
    @include('components.details')
    @include('components.services')
    @include('components.testimonials')

    @include('components.faq')
@endsection

@section('styles')

    <style>
        #hero-left-container {
        list-style: none;
        }

        #hero-left-container li {
        position: relative;
        padding-left: 2em; /* More spacing for larger bullets */
        margin-bottom: 0.5em;
        font-size: 1.2rem;
        margin-left: 1rem;
        }

        #hero-left-container li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0.25em;
        width: 1.5em;
        height: 1.5em;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Ccircle cx='12' cy='12' r='10' fill='%2321a366' stroke='%2321a366' stroke-width='2'/%3E%3Cpath fill='white' d='M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z'/%3E%3C/svg%3E");
        background-size: contain;
        background-repeat: no-repeat;
        }

        #hero-left-container u {
        text-decoration: none;
        position: relative;
        display: inline;
        color: inherit; /* Maintains original text color */
        }

        #hero-left-container u::after {
        content: "";
        position: absolute;
        bottom: -0.2em; /* Position adjustment */
        left: 0;
        width: 100%;
        height: 1rem; /* Thickness control */
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 20' preserveAspectRatio='none'%3E%3Cpath d='M0,15 C20,10 40,18 60,12 C80,6 100,16 100,10' fill='white' stroke='white' stroke-width='1'/%3E%3C/svg%3E");
        background-size: 100% 100%;
        z-index: -1; /* Puts underline behind text if needed */
        opacity: 0.9; /* Adjust transparency */
        }
    </style>
@endsection


@include('layout.landing-page')

