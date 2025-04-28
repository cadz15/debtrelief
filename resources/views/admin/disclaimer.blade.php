@section('title', 'CMS | Disclaimer Page')

@section('content')

    <div class="flex items-center justify-between px-4 py-3 bg-white darksbg-gray-900 border-b border-gray-200 darksborder-gray-800">
        <span class="text-2xl font-bold">Disclaimer Page</span>
    </div>


    <div class="container ">
        <div class="px-24 py-12">
            <div class="rounded-2xl border border-gray-200 bg-white p-5  md:p-6">
                <div class="flex rounded-xl">
                  <h1 class="font-bold text-lg">Discalimer</h1>
                </div>
            
                <div class="mt-6 mb-6 flex flex-col">
                    <div id="editor">
                        {!! $disclaimer !!}
                    </div>

                    <button class="inline-flex justify-center mt-4 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium 
                            text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            id="updateDisclaimerBtn">
                        Update Disclaimer
                    </button>
                </div>
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
    
    $('#updateDisclaimerBtn').click(function() {
        const disclaimerContent = quill.getSemanticHTML().replace(/&nbsp;/g, ' '); // Get the HTML content from the editor
        const disclaimerText = quill.getText(); // Get the plain text content from the editor

        $.ajax({
            url: "{{ route('admin.disclaimer.update') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                disclaimer_html: disclaimerContent,
                disclaimer: disclaimerText
            },
            beforeSend: function() {
                $(this).attr("disabled", true); // Disable the button to prevent multiple clicks
            },
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Disclaimer updated successfully!',
                });
                $(this).attr("disabled", false); 
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Failed to update disclaimer.',
                });
                $(this).attr("disabled", false); 
            }
        });
    });
  });
</script>

@endsection

@include('layout.admin-layout')