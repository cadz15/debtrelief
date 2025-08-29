@section('title', 'CMS | Contact Us Leads')

@section('content')

    <div class="flex items-center justify-between px-4 py-3 bg-white darksbg-gray-900 border-b border-gray-200 darksborder-gray-800">
        <span class="text-2xl font-bold">Contact Us Leads</span>
    </div>


    <div class="container ">
        <div class="px-24 py-12">

            <div class="rounded-2xl border border-gray-200 bg-white p-5  md:p-6">
                <div class="flex rounded-xl">
                  <h1 class="font-bold text-lg">Lead List</h1>
                </div>
            
                <div class="mt-6 mb-6">
                    
                    <div class="overflow-x-auto">
                        <table id="accountsTable" class="min-w-full pt-4 pb-6 divide-y divide-gray-200">
                            <thead class="bg-gray-200 text-gray-600 uppercase h-12 text-sm leading-normal">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">First Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Last Name</th>
                                    <th class="px-6 py-3  text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3  text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Phone</th>
                                    <th class="px-6 py-3  text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Date</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
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
                url: "{{ route('admin.contact.leads.list') }}",
                data: function (d) {
                    d._token = "{{ csrf_token() }}";
                },
                method: 'POST'
            },

            columns: [
                { data: 'first_name', name: 'first_name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'email', name: 'email' },
                { data: 'phone_number', name: 'phone_number' },
                { data: 'date', name: 'date' },
            ],
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'csv',
                    text: 'Export CSV',
                    className: 'export-button bg-gray-500 text-white px-4 py-1 rounded mr-2 hover:bg-gray-600'
                },
                {
                    extend: 'excel',
                    text: 'Export Excel',
                    className: 'export-button bg-gray-500 text-white px-4 py-1 rounded mr-2 hover:bg-gray-600'
                },
            ]
        });
    });
</script>
@endsection
@include('layout.admin-layout')