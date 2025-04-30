<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12" id="faq">
    <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">Frequently Asked Questions</h2>
    <div class="space-y-4">
        <div class="border-b border-gray-200 pb-4">
            <button class="w-full text-left flex justify-between items-center text-gray-900 font-medium text-lg focus:outline-none faq-button">
                <h6>What is Debt Relief?</h6>
                <svg class="w-5 h-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="mt-2 text-gray-600 hidden">
                Debt relief refers to measures to reduce or refinance debt to make it easier for the borrower to repay.
            </div>
        </div>
        @foreach($faqs as $faq)
        <div class="border-b border-gray-200 pb-4">
            <button class="w-full text-left flex justify-between items-center text-gray-900 font-medium text-lg focus:outline-none faq-button">
                <h6>{{ $faq->question }}</h6>
                <svg class="w-5 h-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="mt-2 text-gray-600 hidden">
                {{ $faq->answer }}
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    document.querySelectorAll('.faq-button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('svg');
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });
</script>