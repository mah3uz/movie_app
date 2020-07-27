@extends('layouts.app')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container flex flex-col md:flex-row mx-auto px-4 py-16">
            <div class="w-1/3">
                <img class="rounded border border-gray-500"
                     src="{{ 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'] }}" alt="{{ $movie['title'] }}">
            </div>
            <div class="w-2/3 md:ml-16">
                <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>

                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="fill-current text-orange-500 w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                    <span class="ml-1">{{ $movie['vote_average'] * 10 }}%</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach ($movie['genres'] as $genre)
                            {{ $genre['name'] }}@if (!$loop->last), @endif
                        @endforeach
                    </span>
                </div>

                <p class="text-gray-300 text-sm mt-8">
                    {{ $movie['overview'] }}
                </p>

                <div class="mt-16">
                    <h4 class="text-white font-semibold">Featured Crew</h4>

                    <div class="flex mt-4">
                        @foreach($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 2)
                                <div class="mr-8">
                                    <div class="text-gray-200">{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">
                                        {{ $crew['job'] }}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                @if (count($movie['videos']['results']) > 0)
                    <div class="mt-16">
                        <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}"
                           target="_blank"
                           class="flex inline-flex items-center bg-orange-400 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-500 transition ease-in-out duration-150">
                            <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                            <span class="ml-2">Play Trailer</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div> <!-- /end movie info -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="uppercase tracking-wider text-lg font-semibold">Featured Cast</h2>
            <hr>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 5)
                        <div class="mt-8 single-actor">
                            <a href="#">
                                <img class="hover:opacity-75 transition ease-in-out duration-150"
                                     src="{{ 'https://image.tmdb.org/t/p/w300' . $cast['profile_path'] }}" alt="{{ $cast['name'] }}">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
                            </div>
                            <div class="text-gray-500">
                                {{ $cast['character'] }}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="movie-screenshots border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="uppercase tracking-wider text-lg font-semibold">Screenshots</h2>
            <hr>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                @foreach($movie['images']['backdrops'] as $image)
                    <div class="mt-8 single-screenshot">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150"
                             src="{{ 'https://image.tmdb.org/t/p/w500' . $image['file_path']}}" alt="{{ $movie['title'] }}">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
