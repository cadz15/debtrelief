@section('title', 'Terms Of Use')

@section('content')

    <div class="container min-h-dvh px-5 py-20 mx-auto">
        <div class="mb-20">
            <h1 class=" text-3xl font-bold title-font text-gray-900 my-12">Terms Of Use</h1>
            
            <div class="flex flex-col gap-y-2 ">
                {!! $disclaimer !!}
            </div>
                
               
        </div>
    </div>
@endsection

@include('layout.landing-page')

