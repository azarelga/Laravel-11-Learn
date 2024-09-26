<x-layout>
    <x-slot:title> {{ $post['title'] }}</x-slot:title>
        <article>
                <div class="text-base text-gray-500 mb-4">
                    <a href="/authors/{{$post->author->id}}" class="hover:underline">{{ $post->author->name }}</a> | {{$post->created_at->diffForHumans()}}
                </div>
            <p class="text-gray-700">
                {{ $post['content'] }}
            </p>
            <a href="/posts" class="text-blue-600 hover:underline">&laquo; Back to Posts</a>
        </article>
</x-layout>
