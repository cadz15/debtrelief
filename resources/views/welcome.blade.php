@section('title', 'Welcome to Debt Relief')

@section('content')
    @include('components.hero')
    @include('components.howitwork')
    @include('components.contentwithreview')
    @include('components.whyus')
    @include('components.details')

    @include('components.testimonials')

    @include('components.faq')
@endsection

@include('layout.landing-page')

