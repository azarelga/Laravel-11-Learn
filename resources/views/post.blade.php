<x-layout>
    <x-slot:title> {{ $post['title'] }}</x-slot:title>
        <article>
                <div class="text-base text-black mb-4">
                   By <a href="/authors/{{$post->author->username}}" class="font-bold hover:underline">{{ $post->author->name }}</a> in <a href="/categories/{{$post->category->slug}}" class="text-gray-500 hover:underline">{{ $post->category->name}}</a> | {{$post->created_at->diffForHumans()}}
                </div>
            <p class="text-gray-700">
                {{ $post['content'] }}
            </p>
            <a href="/posts" class="text-blue-600 hover:underline">&laquo; Back to Posts</a>
        </article>
</x-layout>
