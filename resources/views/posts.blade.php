<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        <article>
            <div class="container mx-auto px-4 py-8">
                <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
                <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                    <h2 class="text-2xl font-bold mb-4">{{ $post['title'] }}</h2>
                </a>
                <p class="text-base text-gray-500 mb-4">{{ $post['author'] }}</p>
                <p class="text-gray-700">
                    {{ Str::limit($post['body'], 50) }}
                </p>
                <a href="/posts/{{ $post['slug'] }}" class="text-blue-600 hover:underline">Baca Selengkapnya... &raquo;</a>
            </div>
        </div>
        </article>
    @endforeach
</x-layout>
