<x-layout>
    <x-slot:title> Single Post</x-slot:title>
        <!-- <article> -->
        <!--         <div class="text-base text-black mb-4"> -->
        <!--            By <a href="/authors/{{$post->author->username}}" class="font-bold hover:underline">{{ $post->author->name }}</a> in <a href="/categories/{{$post->category->slug}}" class="text-gray-500 hover:underline">{{ $post->category->name}}</a> | {{$post->created_at->diffForHumans()}} -->
        <!--         </div> -->
        <!--     <p class="text-gray-700"> -->
        <!--         {{ $post['content'] }} -->
        <!--     </p> -->
        <!--     <a href="/posts" class="text-blue-600 hover:underline">&laquo; Back to Posts</a> -->
        <!-- </article> -->
    <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <a href="/posts" class="text-sm text-blue-600 hover:underline">&laquo; Back to Posts</a>
        <header class="mb-4 lg:mb-6 not-format">
            <address class="flex items-center mb-6 not-italic">
                <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                    <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                    <div>
                        <a href="/authors/{{$post->author->username}}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{$post->author->username}}</a>
                        <p class="text-base text-gray-500 mb-2 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{$post->created_at->diffForHumans()}}</time></p>
                        <a href="/categories/{{$post->category->slug}}" class="font-bold mb-3 hover:underline">
                            <span class="bg-{{ $post->category->color }}-100 text-primary-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                {{$post->category->name}}
                            </span>
                        </a>
                    </div>
                </div>
            </address>
            <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{$post['title']}}</h1>
        </header>
        <p>{{$post['content']}}</p>
            </article>
</x-layout>
