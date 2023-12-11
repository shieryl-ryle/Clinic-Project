<div>
    <div x-data="{ showPrivacyPolicy: false }">
        <!-- Button to open the privacy policy modal -->
            <div class="flex">
                <p class="border-r-2 w-16 text-sm pr-4">{{ $date }}</p>
                <div class="pl-4 hover:text-secondary" @click="showPrivacyPolicy = true">
                    <h3 class="font-bold">{{ $heading }}</h3>
                    <p class="text-sm">{{ $description }}</p>
                </div>
            </div>

        <!-- Privacy Policy Modal -->
        <div x-show="showPrivacyPolicy" class="fixed z-10 inset-0 flex items-center justify-center">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        <div class="relative bg-white rounded-lg overflow-hidden shadow-xl max-w-screen-md w-full m-4" x-transition:enter="transition ease-out duration-300 transform opacity-0 scale-95" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform opacity-100 scale-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-cloak>
            <!-- Modal panel -->
            <div class="px-6 py-4">
                <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $heading }}</h3>
            </div>
            <div class="prose max-w-screen-md p-6 overflow-y-auto" style="max-height: 70vh; background-color: #fff; border: 1px solid #e2e8f0; border-radius: 0.375rem; box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);">
                <h2 class="text-2xl font-bold mb-4">Free Flu Shot Announcement!</h2>
                <p>We are thrilled to announce that the PLM Clinic is offering FREE flu shots to all members of our community! As we approach the flu season, it's crucial to prioritize our health and well-being. Getting a flu shot is a simple yet effective way to protect yourself and those around you from the flu virus.</p>

                <h3 class="text-lg font-semibold mb-2">Details:</h3>
                <ul class="list-disc ml-6 mb-4">
                    <li><strong>What:</strong> Free Flu Shot</li>
                    <li><strong>Where:</strong> PLM Clinic</li>
                    <li><strong>Why:</strong> Protect yourself from the flu virus</li>
                    <li><strong>When:</strong> [Specify Date and Time]</li>
                </ul>

                <p>Take a proactive step towards a healthier you by availing of this complimentary flu shot. Our team of experienced healthcare professionals will be on-site to administer the vaccinations and provide information about the importance of flu immunization.</p>

                <h3 class="text-lg font-semibold mb-2">How to Participate:</h3>
                <ol class="list-decimal ml-6 mb-4">
                    <li>Visit the PLM Clinic during the specified date and time.</li>
                    <li>Fill out a brief registration form upon arrival.</li>
                    <li>Receive your free flu shot from our dedicated medical staff.</li>
                </ol>

                <p>Your health is our priority, and we encourage everyone to take advantage of this opportunity. Let's work together to promote a flu-free and resilient community.</p>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 flex align-items justify-end p-4 gap-4 flex-row">
                <button @click="showPrivacyPolicy = false" type="button" class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-black text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400  sm:w-auto sm:text-sm"> Close </button>
            </div>
        </div>
        </div>
    </div>
</div>
