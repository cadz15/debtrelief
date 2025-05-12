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

@include('layout.landing-page')

