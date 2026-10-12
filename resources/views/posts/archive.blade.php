<x-layout>
    <x-slot:title>Archive {{ $year }} - Mini-CMS</x-slot:title>

    <h1 class="text-3xl font-bold">Articles publiés en {{ $year }}</h1>

    @if (count($posts) === 0)
        <p class="mt-6 text-gray-700">Aucun article pour cette année.</p>
    @else
        <ul class="mt-6 space-y-4">
            @foreach ($posts as $slug => $post)
                <li class="rounded border border-gray-200 bg-white p-4">
                    <p class="text-xl font-medium">{{ $post['title'] }}</p>
                    <p class="mt-1 text-sm text-gray-500">Publié en {{ $post['year'] }}</p>
                </li>
            @endforeach
        </ul>
    @endif

    <p class="mt-8">
        <a href="{{ route('posts.index') }}" class="text-red-600 underline">Retour à la liste des articles</a>
    </p>
</x-layout>
