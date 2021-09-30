<section class="text-gray-600 body-font overflow-hidden">
    @foreach ($posts as $post)
        <div class="container px-5 py-10 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100  >
                <div class=" py-8 flex flex-wrap
                md:flex-nowrap">
                <div class="md:flex-grow">
                    <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $post['title'] }}</h2>
                    <p class="leading-relaxed">{{ $post['excerpt'] }}</p>
                    <a href="{{ route('show', $post) }}" class="text-indigo-500 inline-flex items-center mt-4">Learn
                        More
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
    {{ $posts->links() }}
    </div>
</section>
