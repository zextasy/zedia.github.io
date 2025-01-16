<section class="py-10 bg-gray-950 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl">
                Explore Common Questions
            </h2>
        </div>
        <div class="max-w-3xl mx-auto mt-8 space-y-4 md:mt-16">
            <div
                class="transition-all duration-200 bg-black border border-gray-800 shadow-lg shadow-gray-700 cursor-pointer hover:bg-gray-500">
                <button type="button" id="question1" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-white">What services do you offer?</span>
                    <svg id="arrow1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="answer1" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>
                    We offer a variety of services including bespoke software solutions, training programs, and hardware solutions. 
                    Our team is dedicated to understanding your unique needs and delivering tailored results. 
                    Whether you're an individual or an organization, we have the right solution for you.
                    </p>
                </div>
            </div>
            <div
                class="transition-all duration-200 bg-black border border-gray-800 shadow-lg shadow-gray-700 cursor-pointer hover:bg-gray-500">
                <button type="button" id="question2" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-white">How can I get support?</span>
                    <svg id="arrow2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="answer2" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>
                    Support is available through our dedicated customer service team. 
                    You can reach out via email or phone for assistance. 
                    We strive to respond promptly to all inquiries.
                    </p>
                </div>
            </div>
            <div
                class="transition-all duration-200 bg-black border border-gray-800 shadow-lg shadow-gray-700 cursor-pointer hover:bg-gray-500">
                <button type="button" id="question3" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-white">Do you offer training?</span>
                    <svg id="arrow3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="answer3" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>
                    Yes, we provide comprehensive training programs tailored to your needs. 
                    Our experts will guide you through the learning process, ensuring you gain the necessary skills. 
                    Training can be conducted online or in-person.
                    </p>
                </div>
            </div>
            <div
                class="transition-all duration-200 bg-black border border-gray-800 shadow-lg shadow-gray-700 cursor-pointer hover:bg-gray-500">
                <button type="button" id="question4" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-white">What is bespoke software?</span>
                    <svg id="arrow4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="answer4" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>
                    Bespoke software is custom-built to meet your specific requirements. 
                    Unlike off-the-shelf solutions, it is designed to fit seamlessly into your workflow. 
                    This ensures optimal efficiency and effectiveness for your operations.
                    </p>
                </div>
            </div>
        </div>
        <p class="text-center text-gray-400 textbase mt-9">
            Still have questions?
            <span class="cursor-pointer font-medium text-tertiary transition-all duration-200 hover:text-tertiary focus:text-tertiary hover-underline">Contact
                our support
            </span>
        </p>
    </div>
    <script>
        // JavaScript to toggle the answers and rotate the arrows
        document.querySelectorAll('[id^="question"]').forEach(function(button, index) {
            button.addEventListener('click', function() {
                var answer = document.getElementById('answer' + (index + 1));
                var arrow = document.getElementById('arrow' + (index + 1));

                if (answer.style.display === 'none' || answer.style.display === '') {
                    answer.style.display = 'block';
                    arrow.style.transform = 'rotate(0deg)';
                } else {
                    answer.style.display = 'none';
                    arrow.style.transform = 'rotate(-180deg)';
                }
            });
        });
    </script>
</section>