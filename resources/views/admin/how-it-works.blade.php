@section('title', 'CMS | How It Works ')

@section('content')

    <div class="flex items-center justify-between px-4 py-3 bg-white darksbg-gray-900 border-b border-gray-200 darksborder-gray-800">
        <span class="text-2xl font-bold">How It Works </span>
    </div>

    @if(Session::has('success'))
        <div class="bg-green-100 mb-4 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ Session::get('success') }}</span>
        </div>
    @endif

    <div class="container ">
        <div class="flex  gap-x-4 px-24 py-12">
            <div class="rounded-2xl lg:w-1/2 w-full h-fit border border-gray-200 bg-white p-5  md:p-6">
                <div class="flex rounded-xl">
                  <h1 class="font-bold text-lg">Steps to get started</h1>
                </div>

            
                <form action="{{ route('admin.howitworks.left.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-6 mb-6 flex gap-y-4 flex-col ">
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

                        <h5 class="pt-4 ">Step 1</h5>

                        <!-- Section Title -->
                        <div>
                            <label for="step1_title" class="block text-sm font-medium text-gray-700">Step 1 Title</label>
                            <input type="text" name="step1_title" id="step1_title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('step1_title', $contents?->step1_title ?? '') }}">
                            @error('step1_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Section Description -->
                        <div>
                            <label for="step1_description" class="block text-sm font-medium text-gray-700">Description</label>
                            <input type="text" name="step1_description" id="step1_description" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('step1_description', $contents?->step1_description ?? '') }}">
                            @error('step1_description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex gap-4 flex-col sm:flex-row">
                            <div class="w-1/2 sm:w-full">
                                <label for="step1_image" class="block text-sm font-medium text-gray-700">Step Image</label>
                                <input type="file"
                                class="w-full text-slate-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 
                                file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded"
                                name="step1_image" id="step1_image"/>
                                <span class="text-gray-500 text-sm">PNG, JPEG with max file size of 2mb</span>
                            </div>
    
                            <div class="w-1/2 sm:w-full">
                                <label for="step_image_preview" class="block text-sm font-medium text-gray-700">Step Image Preview</label>
                                <img src="{{ route('getFile', $contents->step1_image?? '') }}" alt="step_image_preview" class="w-20 h-20 mb-2">
                            </div>
                        </div>

                        <h5 class="pt-4 ">Step 2</h5>

                        <!-- Section Title -->
                        <div>
                            <label for="step2_title" class="block text-sm font-medium text-gray-700">Step 2 Title</label>
                            <input type="text" name="step2_title" id="step2_title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('step2_title', $contents?->step2_title ?? '') }}">
                            @error('step2_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Section Description -->
                        <div>
                            <label for="step2_description" class="block text-sm font-medium text-gray-700">Description</label>
                            <input type="text" name="step2_description" id="step2_description" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('step2_description', $contents?->step2_description ?? '') }}">
                            @error('step1_description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex gap-4 flex-col sm:flex-row">
                            <div class="w-1/2 sm:w-full">
                                <label for="step2_image" class="block text-sm font-medium text-gray-700">Step Image</label>
                                <input type="file"
                                class="w-full text-slate-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 
                                file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded"
                                name="step2_image" id="step2_image"/>
                                <span class="text-gray-500 text-sm">PNG, JPEG with max file size of 2mb</span>
                            </div>
    
                            <div class="w-1/2 sm:w-full">
                                <label for="step_image_preview" class="block text-sm font-medium text-gray-700">Step Image Preview</label>
                                <img src="{{ route('getFile', $contents->step2_image ?? '') }}" alt="step_image_preview" class="w-20 h-20 mb-2">
                            </div>
                        </div>

                        <h5 class="pt-4 ">Step 3</h5>

                        <!-- Section Title -->
                        <div>
                            <label for="step3_title" class="block text-sm font-medium text-gray-700">Step 3 Title</label>
                            <input type="text" name="step3_title" id="step3_title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('step3_title', $contents?->step3_title ?? '') }}">
                            @error('step3_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Section Description -->
                        <div>
                            <label for="step3_description" class="block text-sm font-medium text-gray-700">Description</label>
                            <input type="text" name="step3_description" id="step3_description" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('step3_description', $contents?->step3_description ?? '') }}">
                            @error('step1_description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex gap-4 flex-col sm:flex-row">
                            <div class="w-1/2 sm:w-full">
                                <label for="step3_image" class="block text-sm font-medium text-gray-700">Step Image</label>
                                <input type="file"
                                class="w-full text-slate-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 
                                file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded"
                                name="step3_image" id="step3_image"/>
                                <span class="text-gray-500 text-sm">PNG, JPEG with max file size of 2mb</span>
                            </div>
    
                            <div class="w-1/2 sm:w-full">
                                <label for="step_image_preview" class="block text-sm font-medium text-gray-700">Step Image Preview</label>
                                <img src="{{ route('getFile', $contents->step2_image ?? '') }}" alt="step_image_preview" class="w-20 h-20 mb-2">
                            </div>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="inline-flex justify-center mt-6 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium 
                                text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Update Section
                        </button>
                    </div>
                </form>
            </div>




            <div class="rounded-2xl h-fit border border-gray-200 bg-white p-5  md:p-6 lg:w-1/2 w-full">
                <div class="flex rounded-xl">
                  <h1 class="font-bold text-lg">Featured Section</h1>
                </div>
                        
                <form id="form-section" action="{{ route('admin.howitworks.right.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mt-6 mb-6 flex gap-y-4 flex-col">
                        <!-- Section Title -->
                        <div>
                            <label for="section_title" class="block text-sm font-medium text-gray-700">Header</label>
                            <input type="text" name="section_title" id="section_title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('section_title', $featuredContent?->section_title ?? '') }}">
                            @error('section_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="section_description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea type="text" name="section_description" rows="6" id="section_description" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('section_description', $featuredContent?->section_description ?? '') }}">{{ old('section_description', $featuredContent?->section_description ?? '') }}</textarea>
                            @error('section_description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex gap-4 flex-col sm:flex-row">
                            <div class="w-1/2 sm:w-full">
                                <label for="section_image" class="block text-sm font-medium text-gray-700">Section Image</label>
                                <input type="file"
                                class="w-full text-slate-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 
                                file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded"
                                name="section_image" id="section_image"/>
                                <span class="text-gray-500 text-sm">PNG, JPEG with max file size of 2mb</span>
                            </div>
    
                            <div class="w-1/2 sm:w-full">
                                <label for="section_image" class="block text-sm font-medium text-gray-700">Section Image Preview</label>
                                <img src="{{ route('getFile', $featuredContent->section_image?? '') }}" alt="section_image" class="w-20 h-20 mb-2">
                            </div>
                        </div>

                        <h5 class="pt-4">Featured Review</h5>
                        
                        <div>
                            <label for="review_name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="review_name" id="review_name" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('review_name', $featuredContent?->review_name ?? '') }}">
                            @error('review_name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="featured_review" class="block text-sm font-medium text-gray-700">Review</label>
                            <textarea type="text" name="featured_review" rows="6" id="featured_review" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('featured_review', $featuredContent?->featured_review ?? '') }}">{{ old('featured_review', $featuredContent?->featured_review ?? '') }}</textarea>
                            @error('featured_review')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex gap-4 flex-col sm:flex-row">
                            <div class="w-1/2 sm:w-full">
                                <label for="reviewer_image" class="block text-sm font-medium text-gray-700">Reviewer Image</label>
                                <input type="file"
                                class="w-full text-slate-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 
                                file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded"
                                name="reviewer_image" id="reviewer_image"/>
                                <span class="text-gray-500 text-sm">PNG, JPEG with max file size of 2mb</span>
                            </div>
    
                            <div class="w-1/2 sm:w-full">
                                <label for="reviewer_image" class="block text-sm font-medium text-gray-700">Reviewer Image Preview</label>
                                <img src="{{ route('getFile', $featuredContent->reviewer_image?? '') }}" alt="reviewer_image" class="w-20 h-20 mb-2">
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



@endsection

@include('layout.admin-layout')