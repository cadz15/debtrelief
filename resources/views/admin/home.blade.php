@section('title', 'CMS | Home ')

@section('content')

    <div class="flex items-center justify-between px-4 py-3 bg-white darksbg-gray-900 border-b border-gray-200 darksborder-gray-800">
        <span class="text-2xl font-bold">Home </span>
    </div>


    <div class="container " >
        <div class="flex flex-col xl:flex-row gap-x-4 gap-y-4 px-24 py-12">
            <div class="rounded-2xl w-full lg:w-1/2 h-fit border border-gray-200 bg-white p-5  md:p-6">
                <div class="flex rounded-xl">
                  <h1 class="font-bold text-lg">Left Section</h1>
                </div>
            
                <form id="hero-section-form">
                    @csrf
                <div class="mt-6 mb-6 flex flex-col">
                        <!-- Section Title -->
                        <div id="editor">
                            {!! $hero !!}
                        </div>

                        @error('hero')
                            <p>
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            </p>
                        @enderror

                        <!-- Submit -->
                        <button type="submit" class="inline-flex justify-center mt-6 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium 
                                text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Update Section
                        </button>
                    </div>
                </form>
            </div>




            <div class="rounded-2xl w-full lg:w-1/2 h-fit border border-gray-200 bg-white p-5  md:p-6">
                <div class="flex rounded-xl">
                  <h1 class="font-bold text-lg">Right Section</h1>
                </div>
                        
                <form id="form-section" action="{{ route('admin.home.right.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mt-6 mb-6 flex gap-y-4 flex-col">
                        <!-- Section Title -->
                        <div class="flex gap-4 flex-col">
                            <div class="w-full">
                                <label for="video" class="block text-sm font-medium text-gray-700">Video</label>
                                <input type="file"
                                class="w-full text-slate-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 
                                file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded"
                                name="video" id="video"/>
                                <span class="text-gray-500 text-sm">Video file with max file size of 25mb</span>
                                @error('video')
                                <p>

                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                </p>
                                @enderror
                            </div>
    
                            <div class="w-full">
                                <label for="favicon" class="block text-sm font-medium text-gray-700">Logo Preview</label>
                                <video controls autoplay src="{{ route('getFile', $rightContents?->video?? '') }}" alt="Favicon" class="mb-2">
                            </div>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="inline-flex justify-center mt-6 py-2 px-4 border border-blue-700 rounded-md shadow-sm text-sm font-medium 
                               text-blue-600 hover:text-white  hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


@section('styles')

<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
@endsection


@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<script>


  $(document).ready(function() {
    var toolbarOptions = [
    ['bold', 'italic', 'underline'],        // toggled buttons
    [{ 'list': 'bullet' }],
    [{ 'color': [] }],                      // dropdown with defaults from theme
    [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
    [{ 'align': [] }],
    ['link']                                // link button
  ];
    const quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: toolbarOptions
        }
    });
    
    $('#hero-section-form').on('submit', function(e) {
        e.preventDefault();

        const heroContent = quill.getSemanticHTML().replace(/&nbsp;/g, ' '); // Get the HTML content from the editor
    
        $.ajax({
            url: "{{ route('admin.home.left.update') }}",
            method: "POST",
            data: {
                _token: '{{ csrf_token() }}',
                hero: heroContent,
            },
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: response.message,
                });
                $(this).attr("disabled", false); 
                $('#error-message').hide();
            },
            error: function(xhr) {
                let errors = xhr.responseJSON?.errors;
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Failed to update section.',
                });
            }
        });
    });

  });
</script>

<script>
    document.getElementById('add-bullet').addEventListener('click', function () {
        const wrapper = document.getElementById('bullet-points-wrapper');
        const div = document.createElement('div');
        div.classList.add('flex', 'gap-2');
        div.innerHTML = `
            <input type="text" name="hero_bullets[]" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2" />
            <button type="button" class="remove-bullet text-red-500">Remove</button>
        `;
        wrapper.appendChild(div);
    });

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-bullet')) {
            e.target.parentElement.remove();
        }
    });
</script>

@endsection

@include('layout.admin-layout')