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
                  <h1 class="font-bold text-lg">About Us</h1>
                </div>
            
                <form action="{{ route('admin.aboutUs.left.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-6 mb-6 flex gap-y-4 flex-col ">
                        <!-- Section Title -->
                        <div>
                            <label for="section_title" class="block text-sm font-medium text-gray-700">Header</label>
                            <input type="text" name="section_title" id="section_title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('section_title', $cardData?->section_title ?? '') }}">
                            @error('section_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <h5 class="pt-4 ">Card 1</h5>

                        <!-- Section Title -->
                        <div>
                            <label for="card1_title" class="block text-sm font-medium text-gray-700">Card 1 Title</label>
                            <input type="text" name="card1_title" id="card1_title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('card1_title', $cardData?->card1_title ?? '') }}">
                            @error('card1_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Section Description -->
                        <div>
                            <label for="card1_description" class="block text-sm font-medium text-gray-700">Description</label>
                            <input type="text" name="card1_description" id="card1_description" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('card1_description', $cardData?->card1_description ?? '') }}">
                            @error('card1_description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex gap-4 flex-col sm:flex-row">
                            <div class="w-1/2 sm:w-full">
                                <label for="card1_image" class="block text-sm font-medium text-gray-700">Card Image</label>
                                <input type="file"
                                class="w-full text-slate-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 
                                file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded"
                                name="card1_image" id="card1_image"/>
                                <span class="text-gray-500 text-sm">PNG, JPEG with max file size of 2mb</span>
                                @error('card1_image')
                                    <p>
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>
    
                            <div class="w-1/2 sm:w-full">
                                <label for="card_image_preview" class="block text-sm font-medium text-gray-700">Card Image Preview</label>
                                <img src="{{ route('getFile', $cardData->card1_image?? '') }}" alt="card_image_preview" class="w-20 h-20 mb-2">
                            </div>
                        </div>

                        <h5 class="pt-4 ">card 2</h5>

                        <!-- Section Title -->
                        <div>
                            <label for="card2_title" class="block text-sm font-medium text-gray-700">Card 2 Title</label>
                            <input type="text" name="card2_title" id="card2_title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('card2_title', $cardData?->card2_title ?? '') }}">
                            @error('card2_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Section Description -->
                        <div>
                            <label for="card2_description" class="block text-sm font-medium text-gray-700">Description</label>
                            <input type="text" name="card2_description" id="card2_description" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('card2_description', $cardData?->card2_description ?? '') }}">
                            @error('card1_description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex gap-4 flex-col sm:flex-row">
                            <div class="w-1/2 sm:w-full">
                                <label for="card2_image" class="block text-sm font-medium text-gray-700">Card Image</label>
                                <input type="file"
                                class="w-full text-slate-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 
                                file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded"
                                name="card2_image" id="card2_image"/>
                                <span class="text-gray-500 text-sm">PNG, JPEG with max file size of 2mb</span>
                                @error('card2_image')
                                    <p>
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>
    
                            <div class="w-1/2 sm:w-full">
                                <label for="card_image_preview" class="block text-sm font-medium text-gray-700">Card Image Preview</label>
                                <img src="{{ route('getFile', $cardData->card2_image ?? '') }}" alt="card_image_preview" class="w-20 h-20 mb-2">
                            </div>
                        </div>

                        <h5 class="pt-4 ">card 3</h5>

                        <!-- Section Title -->
                        <div>
                            <label for="card3_title" class="block text-sm font-medium text-gray-700">Card 3 Title</label>
                            <input type="text" name="card3_title" id="card3_title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('card3_title', $cardData?->card3_title ?? '') }}">
                            @error('card3_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Section Description -->
                        <div>
                            <label for="card3_description" class="block text-sm font-medium text-gray-700">Description</label>
                            <input type="text" name="card3_description" id="card3_description" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('card3_description', $cardData?->card3_description ?? '') }}">
                            @error('card1_description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex gap-4 flex-col sm:flex-row">
                            <div class="w-1/2 sm:w-full">
                                <label for="card3_image" class="block text-sm font-medium text-gray-700">Card Image</label>
                                <input type="file"
                                class="w-full text-slate-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 
                                file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded"
                                name="card3_image" id="card3_image"/>
                                <span class="text-gray-500 text-sm">PNG, JPEG with max file size of 2mb</span>
                                @error('card3_image')
                                    <p>
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>
    
                            <div class="w-1/2 sm:w-full">
                                <label for="card_image_preview" class="block text-sm font-medium text-gray-700">Card Image Preview</label>
                                <img src="{{ route('getFile', $cardData->card3_image ?? '') }}" alt="card_image_preview" class="w-20 h-20 mb-2">
                            </div>
                        </div>

                        <h5 class="pt-4 ">card 4</h5>

                        <!-- Section Title -->
                        <div>
                            <label for="card4_title" class="block text-sm font-medium text-gray-700">Card 4 Title</label>
                            <input type="text" name="card4_title" id="card4_title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('card4_title', $cardData?->card4_title ?? '') }}">
                            @error('card4_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Section Description -->
                        <div>
                            <label for="card4_description" class="block text-sm font-medium text-gray-700">Description</label>
                            <input type="text" name="card4_description" id="card4_description" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('card4_description', $cardData?->card4_description ?? '') }}">
                            @error('card1_description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex gap-4 flex-col sm:flex-row">
                            <div class="w-1/2 sm:w-full">
                                <label for="card4_image" class="block text-sm font-medium text-gray-700">Card Image</label>
                                <input type="file"
                                class="w-full text-slate-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 
                                file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded"
                                name="card4_image" id="card4_image"/>
                                <span class="text-gray-500 text-sm">PNG, JPEG with max file size of 2mb</span>
                                @error('card4_image')
                                    <p>
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>
    
                            <div class="w-1/2 sm:w-full">
                                <label for="card_image_preview" class="block text-sm font-medium text-gray-700">Card Image Preview</label>
                                <img src="{{ route('getFile', $cardData->card4_image ?? '') }}" alt="card_image_preview" class="w-20 h-20 mb-2">
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
                  <h1 class="font-bold text-lg">Consolidation Info Section</h1>
                </div>
                        
                <form id="form-section" action="{{ route('admin.aboutUs.right.update')}}" method="POST" >
                    @csrf
                    <div class="mt-6 mb-6 flex gap-y-4 flex-col">
                        <h5 class="pt-4 ">Card 1</h5>

                        <!-- Section Title -->
                        <div>
                            <label for="console_card1_title" class="block text-sm font-medium text-gray-700">Card 1 Title</label>
                            <input type="text" name="console_card1_title" id="console_card1_title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('console_card1_title', $consolCardData?->console_card1_title ?? '') }}">
                            @error('console_card1_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Section Description -->
                        <div>
                            <label for="console_card1_description" class="block text-sm font-medium text-gray-700">Description</label>
                            <input type="text" name="console_card1_description" id="console_card1_description" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('console_card1_description', $consolCardData?->console_card1_description ?? '') }}">
                            @error('console_card1_description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <h5 class="pt-4 ">card 2</h5>

                        <!-- Section Title -->
                        <div>
                            <label for="console_card2_title" class="block text-sm font-medium text-gray-700">Card 2 Title</label>
                            <input type="text" name="console_card2_title" id="console_card2_title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('console_card2_title', $consolCardData?->console_card2_title ?? '') }}">
                            @error('console_card2_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Section Description -->
                        <div>
                            <label for="console_card2_description" class="block text-sm font-medium text-gray-700">Description</label>
                            <input type="text" name="console_card2_description" id="console_card2_description" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('console_card2_description', $consolCardData?->console_card2_description ?? '') }}">
                            @error('card1_description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <h5 class="pt-4 ">card 3</h5>

                        <!-- Section Title -->
                        <div>
                            <label for="console_card3_title" class="block text-sm font-medium text-gray-700">Card 3 Title</label>
                            <input type="text" name="console_card3_title" id="console_card3_title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('console_card3_title', $consolCardData?->console_card3_title ?? '') }}">
                            @error('console_card3_title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Section Description -->
                        <div>
                            <label for="console_card3_description" class="block text-sm font-medium text-gray-700">Description</label>
                            <input type="text" name="console_card3_description" id="console_card3_description" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                value="{{ old('console_card3_description', $consolCardData?->console_card3_description ?? '') }}">
                            @error('card1_description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
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