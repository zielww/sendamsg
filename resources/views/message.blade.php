<x-layout>
    <!-- Hero Section -->
    <div class="w-full bg-base-200 flex items-center justify-center">
        <div class="text-center space-y-4 p-8">
            <h1 class="text-3xl md:text-4xl font-bold">Hey, <span class="font-beanie">{{$message['name']}}</span></h1>
            <p class="text-sm md:text-normal max-w-2xl">Someone special has sent you a message with a song that might touch your heart.</p>
        </div>
    </div>

    <!-- Message Content -->
    <div class="max-w-4xl mx-auto px-4 py-12">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Message Card -->
            <div class="bg-bg-100 rounded-xl border border-base-300 p-6 space-y-4 hover:shadow-xl transition-shadow">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center">
                        <i class="fa-solid fa-envelope text-primary text-xl"></i>
                    </div>
                    <div>
                        <h2 class="font-semibold text-lg">Their Message</h2>
                        <p class="text-sm text-gray-500">Sent with love</p>
                    </div>
                </div>
                <p class="text-3xl font-beanie leading-relaxed">{{$message['message']}}</p>
                <div class="pt-4 border-t">
                    <p class="text-sm text-gray-500">Sent {{ \Carbon\Carbon::now()->diffForHumans() }}</p>
                </div>
            </div>

            <!-- Song Preview -->
            <div class="bg-base-200 rounded-xl p-6 space-y-4">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-12 rounded-full bg-secondary/20 flex items-center justify-center">
                        <i class="fa-solid fa-music text-secondary text-xl"></i>
                    </div>
                    <div>
                        <h2 class="font-semibold text-lg">Featured Song</h2>
                        <p class="text-sm text-gray-500">Listen to their pick</p>
                    </div>
                </div>

                <div class="aspect-square bg-gray-200 rounded-lg mb-4 overflow-hidden">
                    <img src="https://placekitten.com/400/400" alt="Album Art" class="w-full h-full object-cover">
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-xl">Song Title</h3>
                    <p class="text-gray-600">Artist Name</p>
                </div>

                <button class="btn btn-primary w-full gap-2">
                    <i class="fa-solid fa-play"></i>
                    Play Preview
                </button>
            </div>
        </div>

        <!-- Actions -->
        <div class="flex justify-center gap-4 mt-12 rounded-md">
            <a href="/browse" class="btn btn-ghost gap-2">
                <i class="fa-solid fa-arrow-left"></i>
                Back to Browse
            </a>
            <a href="/write" class="btn btn-primary gap-2 rounded-md">
                <i class="fa-solid fa-heart"></i>
                Send One Back
            </a>
        </div>
    </div>
</x-layout>
