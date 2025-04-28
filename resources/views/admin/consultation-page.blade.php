@section('title', 'CMS | Consulation Page')

@section('content')

    <div class="flex items-center justify-between px-4 py-3 bg-white darksbg-gray-900 border-b border-gray-200 darksborder-gray-800">
        <span class="text-2xl font-bold">Consulation Page</span>
    </div>


    <div class="container ">
        <div class="flex  gap-x-4 px-24 py-12">
            <div class="rounded-2xl w-1/2 border border-gray-200 bg-white p-5  md:p-6">
                <div class="flex rounded-xl">
                  <h1 class="font-bold text-lg">Left Section</h1>
                </div>
            
                <form id="hero-section-form">
                    @csrf
                <div class="mt-6 mb-6 flex gap-y-4 flex-col">
                        <!-- Section Title -->
                        <div>
                            <label for="section_title" class="block text-sm font-medium text-gray-700">Header</label>
                            <input type="text" name="section_title" id="section_title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('section_title', $contents?->section_title ?? '') }}">
                            @error('section_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Section Description -->
                        <div>
                            <label for="section_description" class="block text-sm font-medium text-gray-700">Description</label>
                            <input type="text" name="section_description" id="section_description" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('section_description', $contents?->section_description ?? '') }}">
                            @error('section_description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Bullet Points -->
                        <div id="bullet-points-wrapper" class="space-y-2 mt-4">
                            <label class="block text-sm font-medium text-gray-700">Bullet Points</label>

                            @php
                                $bullets = $contents?->hero_bullets ?? [];
                            @endphp

                            @foreach ($bullets as $index => $bullet)
                                <div class="flex gap-2">
                                    <input type="text" name="hero_bullets[]" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2" value="{{ $bullet }}">
                                    <button type="button" class="remove-bullet text-red-500">Remove</button>
                                </div>
                            @endforeach
                        </div>

                        <button type="button" id="add-bullet" class="mt-2 text-sm text-blue-600">+ Add Bullet Point</button>

                        <!-- Submit -->
                        <button type="submit" class="inline-flex justify-center mt-6 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium 
                                text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Update Section
                        </button>
                    </div>
                </form>
            </div>




            <div class="rounded-2xl w-1/2 h-fit border border-gray-200 bg-white p-5  md:p-6">
                <div class="flex rounded-xl">
                  <h1 class="font-bold text-lg">Form Section</h1>
                </div>
                        
                <form id="form-section">
                    @csrf
                <div class="mt-6 mb-6 flex gap-y-4 flex-col">
                        <!-- Section Title -->
                        <div>
                            <label for="form_header" class="block text-sm font-medium text-gray-700">Form Header</label>
                            <input type="text" name="form_header" id="form_header" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('form_header', $formData?->form_header ?? '') }}">
                            @error('form_header')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Disclaimer / Term -->
                        <div>
                            <label for="term_disclaimer" class="block text-sm font-medium text-gray-700">Submit Disclaimer / Term</label>
                            <textarea type="text" name="term_disclaimer" id="term_disclaimer" required multiple
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2" rows="8"
                                >{{ old('term_disclaimer', $formData?->term_disclaimer ?? '') }}</textarea>
                            @error('term_disclaimer')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Disclaimer / Term -->
                        <div>
                            <label for="editor" class="block text-sm font-medium text-gray-700">Form Complete Message</label>
                            <div id="editor">
                               {!! old('complete_message', $formData?->complete_message ?? '') !!}
                            </div>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="inline-flex justify-center mt-6 py-2 px-4 border border-blue-700 rounded-md shadow-sm text-sm font-medium 
                               text-blue-600 hover:text-white  hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Update Form
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

    const quill = new Quill('#editor', {
        theme: 'snow'
    });
    
    $('#hero-section-form').on('submit', function(e) {
        e.preventDefault();

        let formData = $(this).serialize();

        $.ajax({
            url: "{{ route('admin.consultation.left.update') }}",
            method: "POST",
            data: formData,
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
                if (errors) {
                    let errorMessage = Object.values(errors).flat().join('<br>');
                    $('#error-message').show().html(errorMessage);
                } else {
                    $('#error-message').show().text('An error occurred.');
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Failed to update section.',
                });
            }
        });
    });


    $('#form-section').on('submit', function(e) {
        e.preventDefault();

        const formHeader = $('#form_header').val();
        const formDisclaimer = $('#term_disclaimer').val();
        const completeMessage = quill.getSemanticHTML().replace(/&nbsp;/g, ' '); 

        $.ajax({
            url: "{{ route('admin.consultation.form.update') }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                form_header: formHeader,
                term_disclaimer: formDisclaimer,
                complete_message: completeMessage
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
                $('#error-messag').hide();
            },
            error: function(xhr) {
                let errors = xhr.responseJSON?.errors;
                if (errors) {
                    let errorMessage = Object.values(errors).flat().join('<br>');
                    $('#error-message').show().html(errorMessage);
                } else {
                    $('#error-message').show().text('An error occurred.');
                }
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