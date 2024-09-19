<x-layout>
    <x-slot:title> {{ $post['title'] }}</x-slot:title>
        <article>
            <p class="text-base text-gray-500 mb-4">{{ $post['author'] }}</p>
            <p class="text-gray-700">
                {{ $post['body'] }}
            </p>
            <a href="/posts" class="text-blue-600 hover:underline">&laquo; Back to Posts</a>
        </article>
</x-layout>
