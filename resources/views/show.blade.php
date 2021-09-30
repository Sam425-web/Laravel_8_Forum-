<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font overflow-hidden">
                        <div class="container px-5 py-10 mx-auto">
                            <div class="-my-8 divide-y-2 divide-gray-100">
                                <div class="py-8 flex flex-wrap md:flex-nowrap">
                                    <div class="md:flex-grow">
                                        <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">
                                            {{ $post['title'] }}</h2>
                                        <p class="leading-relaxed">{{ $post['body'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="p-2 w-full">
                        <form action="{{ route('postComment', $post) }}" method="POST">
                            @csrf
                            <div class="relative">
                                <textarea id="message" name="comment" placeholder="Comments somethings.."
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                            <div class="p-2 w-full">
                                <button type="submit"
                                    class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Post</button>
                            </div>
                        </form>
                    </div>
                    @foreach ($post->comments as $comment)
                        <div class=" w-full p-4">
                            <div class="border border-gray-200 p-6 rounded-lg">
                                <p class="leading-relaxed text-base">{{ $comment->comment }}
                                    <a href="#" class="float-right text-base">{{ $comment->user->name }}</a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
