@section('title', 'CMS | Site Setting')

@section('content')

    <div class="flex items-center justify-between px-4 py-3 bg-white darksbg-gray-900 border-b border-gray-200 darksborder-gray-800">
        <span class="text-2xl font-bold">Site Setting</span>
    </div>


    <div class="container ">
        <div class="px-24 py-12 w-full ">
            <div class="rounded-2xl border border-gray-200 bg-white p-5  md:p-6">
                <div class="flex rounded-xl">
                  <h1 class="font-bold text-lg">Site Information</h1>
                </div>
            
                <div class="mt-6 mb-6 flex gap-4 flex-col">
                    <form class="flex flex-col gap-6" action="" method="POST">
                        @csrf
                        <div>
                            <label for="site_name" class="block text-sm font-medium text-gray-700">Site Name</label>
                            <input type="text" name="site_name" id="site_name"  required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                            placeholder="Ex. Debt Relief" value="{{ old('site_name') }}">
                            @error('site_name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea type="text" name="description" id="description"  required rows="4"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                            placeholder="Ex. Debt Relief Description">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number"  required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                            placeholder="Ex. (123) 123-1234" value="{{ old('phone_number') }}">
                            @error('phone_number')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex gap-4 flex-col sm:flex-row">
                            <div class="w-1/2 sm:w-full">
                                <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
                                <input type="file"
                                class="w-full text-slate-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 
                                file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded" />
                                <span class="text-gray-500 text-sm">PNG, JPEG with max file size of 2mb</span>
                            </div>
    
                            <div class="w-1/2 sm:w-full">
                                <label for="favicon" class="block text-sm font-medium text-gray-700">Logo Preview</label>
                                <img src="{{ asset('images/favicon.png') }}" alt="Favicon" class="w-20 h-20 mb-2">
                            </div>
                        </div>

                        <button type="submit" 
                            class="inline-flex justify-center mt-4 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium 
                            text-white bg-blue-600  hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Update Site Setting
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@include('layout.admin-layout')