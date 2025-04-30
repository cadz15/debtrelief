@section('title', 'CMS | Frequently Asked Questions')

@section('content')

    <div class="flex items-center justify-between px-4 py-3 bg-white darksbg-gray-900 border-b border-gray-200 darksborder-gray-800">
        <span class="text-2xl font-bold">Frequently Asked Questions</span>
    </div>


    <div class="container ">
        <div class="px-24 py-12">
            <div class="rounded-2xl w-1/2 border border-gray-200 bg-white p-5  md:p-6">
                <div class="flex rounded-xl">
                  <h1 class="font-bold text-lg">Create FAQ</h1>
                </div>
            
                <div class="mt-6 mb-6 flex gap-4 flex-col">
                    <form action="" method="POST" class="flex flex-col gap-4">
                        @csrf
                        <div>
                            <label for="question" class="block text-sm font-medium text-gray-700">Question</label>
                            <input type="text" name="question" id="question"  required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2" 
                            placeholder="Ex. What is Debt Relief?" value="{{ old('question') }}">
                            @error('question')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="answer" class="block text-sm font-medium text-gray-700">Answer</label>
                            <textarea type="text" name="answer" id="answer" rows="6" required
                            class="mt-1 block w-full rounded-md @error('answer') border-red-300 @else border-gray-300   @enderror shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2" 
                            placeholder="Ex. Debt Relief is forgiving a portion of the debt, lowering the interest rate, stretching payments over a longer period, or consolidating multiple debts into a single, lower-interest one." >{{ old('answer') }}</textarea>
                            @error('answer')
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