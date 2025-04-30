@section('title', 'CMS | Frequently Asked Questions')

@section('content')

    <div class="flex items-center justify-between px-4 py-3 bg-white darksbg-gray-900 border-b border-gray-200 darksborder-gray-800">
        <span class="text-2xl font-bold">Frequently Asked Question</span>
    </div>


    <div class="container ">
        <div class="px-24 py-12">
            @if(Session::has('success'))
                <div class="bg-green-100 mb-4 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ Session::get('success') }}</span>
                </div>
            @endif
            <div class="rounded-2xl border border-gray-200 bg-white p-5  md:p-6">
                <div class="flex rounded-xl">
                  <h1 class="font-bold text-lg">FAQ</h1>
                </div>
            
                <div class="mt-6 mb-6">
                    <a href="{{ route('admin.faq.create') }}" class="inline-flex justify-center mb-4 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium
                    text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Add New FAQ
                    </a>
                    
                    <table id="accountsTable" class="min-w-full pt-4 pb-6 divide-y divide-gray-200">
                        <thead class="bg-gray-200 text-gray-600 uppercase h-12 text-sm leading-normal">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Question</th>
                                <th class="px-6 py-3  text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Answer</th>
                                <th class="px-6 py-3 w-4/12 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('styles')

<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet"/>

@vite('resources/css/datatable.buttons.css')

@endsection

@section('scripts')

<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

<!-- DataTables & Buttons -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>


<script>
    $(document).ready(function () {
        $('#accountsTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: { 
                url: "{{ route('admin.faq.list') }}",
                data: function (d) {
                    d._token = "{{ csrf_token() }}";
                },
                method: 'POST'
            },
            columns: [
                { data: 'question', name: 'question' },
                { data: 'answer', name: 'answer' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ],
        });
    });
</script>
@endsection
@include('layout.admin-layout')