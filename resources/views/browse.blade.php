<x-layout>
    <div class="flex flex-col justify-center items-center mt-10 w-full h-fit px-4">
        <div class="space-y-6 w-full md:w-2/3 2xl:w-1/3">
            <!-- Description  -->
            <div role="alert" class="flex flex-col items-start bg-blue-700 rounded-md text-white alert alert-info">
                <div class="flex gap-x-2 font-bold">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="stroke-current w-6 h-6 shrink-0">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h1>Find Messages</h1>

                </div>

                <span class="ml-4 md:ml-8 font-normal text-sm">Scroll the latest messages or start typing recipient name to find your messages.</span>
            </div>

            <!-- Feedback Message -->
            <p class="text-sm text-center px-2">We'd love to hear your feedback and suggestions to help us improve sendthemsg. Click <a href="/support" class="underline">here</a> to share your thoughts with us!</p>
            
            <!-- Search Section -->
            <div class="flex flex-col space-y-5 px-2">
                <div class="flex flex-col sm:flex-row gap-2">
                    <input type="text" id="search" class="px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-black w-full" placeholder="Enter recipient name...">
                    <button class="rounded-md btn btn-primary w-full sm:w-auto">Search</button>
                </div>
            </div>

            <!-- Messages Section -->
            <div class="gap-4 grid grid-cols-1 sm:grid-cols-2">
                @foreach ($messages as $message)
                <a href="/message/{{$message['id']}}" class="p-4 border border-base-300 hover:bg-neutral-100 rounded-md flex flex-col">
                    <!-- Header -->
                    <div class="mb-3">
                        <p class="text-sm">To: <span class="font-semibold">{{ $message['name'] }}</span></p>
                    </div>
                    
                    <!-- Message Content -->
                    <div class="flex-1 mb-3">
                        <p class="font-beanie text-4xl line-clamp-2">{{$message['message']}}</p>
                    </div>

                    <!-- Song Info Footer -->
                    <div class="flex items-center p-2 sm:p-3 bg-base-200 rounded-md">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gray-300 rounded-md mr-3"></div>
                        <div class="flex-1 min-w-0">
                            <p class="font-semibold text-sm truncate">Song Title</p>
                            <p class="text-sm text-gray-600 truncate">Artist</p>
                        </div>
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.098 10.638c-3.868-2.297-10.248-2.508-13.941-1.387-.593.18-1.22-.155-1.399-.748-.18-.593.154-1.22.748-1.4 4.239-1.287 11.285-1.038 15.738 1.605.533.317.708 1.005.392 1.538-.316.533-1.005.709-1.538.392zm-.126 3.403c-.272.44-.847.578-1.287.308-3.225-1.982-8.142-2.557-11.958-1.399-.494.15-1.017-.129-1.167-.623-.149-.495.13-1.016.624-1.167 4.358-1.322 9.776-.682 13.48 1.595.44.27.578.847.308 1.286zm-1.469 3.267c-.215.354-.676.465-1.028.249-2.818-1.722-6.365-2.111-10.542-1.157-.402.092-.803-.16-.895-.562-.092-.403.159-.804.562-.896 4.571-1.045 8.492-.595 11.655 1.338.353.215.464.676.248 1.028zm-5.503-17.308c-6.627 0-12 5.373-12 12 0 6.628 5.373 12 12 12 6.628 0 12-5.372 12-12 0-6.627-5.372-12-12-12z"/>
                        </svg>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>