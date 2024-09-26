<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        <article>
            <div class="container mx-auto px-4 py-8">
                <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
                <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                    <h2 class="text-2xl font-bold mb-2">{{ $post['title'] }}</h2>
                </a>
                <div class="text-base text-gray-500 mb-4">
                    <a href="/authors/{{$post->author->id}}" class="hover:underline">{{ $post->author->name }}</a> | {{$post->created_at->diffForHumans()}} in <a href="/categories/{{Str::slug($post->categories)}}" class="hover:underline">{{ $post->categories}}</a>
                </div>
                <p class="text-gray-700">
                    {{ Str::limit($post['content'], 50) }}
                </p>
                <a href="/posts/{{ $post['slug'] }}" class="text-blue-600 hover:underline">Baca Selengkapnya... &raquo;</a>
            </div>
        </div>
        </article>
    @endforeach
</x-layout>
