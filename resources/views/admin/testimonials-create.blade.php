@section('title', 'CMS | Client Reviews')

@section('content')

    <div class="flex items-center justify-between px-4 py-3 bg-white darksbg-gray-900 border-b border-gray-200 darksborder-gray-800">
        <span class="text-2xl font-bold">Client Reviews</span>
    </div>


    <div class="container ">
        <div class="px-24 py-12">
            <div class="rounded-2xl w-1/2 border border-gray-200 bg-white p-5  md:p-6">
                <div class="flex rounded-xl">
                  <h1 class="font-bold text-lg">Add Review</h1>
                </div>
            
                <div class="mt-6 mb-6 flex gap-4 flex-col">
                    <form action="" method="POST" class="flex flex-col gap-4" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name"  required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2" 
                            placeholder="Ex. James Smith" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="sub_details" class="block text-sm font-medium text-gray-700">Position/Address (optional)</label>
                            <input type="text" name="sub_details" id="sub_details" rows="6" 
                            class="mt-1 block w-full rounded-md @error('sub_details') border-red-300 @else border-gray-300   @enderror shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2" 
                            placeholder="Ex. President" value="{{ old('sub_details') }}">
                            @error('sub_details')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div >
                            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                            <input type="file"
                            class="w-full text-slate-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 
                            file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded"
                            name="image" id="image"/>
                            <span class="text-gray-500 text-sm">PNG, JPEG with max file size of 2mb</span>
                            @error('image')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="review" class="block text-sm font-medium text-gray-700">Position/Address (optional)</label>
                            <textarea type="text" name="review" id="review" rows="6" 
                            class="mt-1 block w-full rounded-md @error('review') border-red-300 @else border-gray-300   @enderror shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2" 
                            placeholder="Ex. This site is awesome!" >{{ old('review') }}</textarea>
                            @error('review')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" 
                            class="inline-flex justify-center mt-4 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium 
                            text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Create
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@include('layout.admin-layout')