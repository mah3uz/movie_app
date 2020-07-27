<div class="search-box relative">
    <input type="text"
           wire:model.debounce.500ms="search"
           class="bg-gray-700 rounded-full w-64 px-10 py-2 text-sm focus:outline-none focus:shadow-outline" placeholder="Search">
    <div class="absolute top-0">
        <svg aria-hidden="true" data-prefix="fas" data-icon="search" class="fill-current text-gray-500 w-4 mt-3 ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg>
    </div>

    <div class="absolute text-sm bg-gray-800 rounded w-64 mt-4">
        <ul>
            @foreach ($searchResults as $movie)
                <li class="border-b border-gray-700">
                    <a href="{{ route('movie.show', $movie['id']) }}" class="block hover:bg-gray-700 px-3 py-3">{{ $movie['title'] }}</a>
                </li>
            @endforeach

        </ul>
    </div>

</div>
