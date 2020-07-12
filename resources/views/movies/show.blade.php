@extends('layouts.app')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container flex flex-col md:flex-row mx-auto px-4 py-16">
            <div class="w-1/3">
                <img class="rounded border border-gray-500" src="/img/parasite.jpg" alt="frozen">
            </div>
            <div class="w-2/3 md:ml-16">
                <h2 class="text-4xl font-semibold">Parasite (2020)</h2>

                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="fill-current text-orange-500 w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 28, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Comedy</span>
                </div>

                <p class="text-gray-300 text-sm mt-8">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                </p>

                <div class="mt-16">
                    <h4 class="text-white font-semibold">Featured Cast</h4>

                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">
                                Screenplay, Director, Story
                            </div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">
                                Screenplay, Director, Story
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-16">
                    <button class="flex items-center bg-orange-400 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-500 transition ease-in-out duration-150">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div> <!-- /end movie info -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="uppercase tracking-wider text-lg font-semibold">Movie Cast</h2>
            <hr>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8 single-actor">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="/img/actor1.jpg" alt="parasite">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    </div>
                    <div class="text-gray-500">
                        John Smith
                    </div>
                </div>
                <div class="mt-8 single-actor">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="/img/actor2.jpg" alt="parasite">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    </div>
                    <div class="text-gray-500">
                        John Smith
                    </div>
                </div>
                <div class="mt-8 single-actor">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="/img/actor3.jpg" alt="parasite">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    </div>
                    <div class="text-gray-500">
                        John Smith
                    </div>
                </div>
                <div class="mt-8 single-actor">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="/img/actor4.jpg" alt="parasite">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    </div>
                    <div class="text-gray-500">
                        John Smith
                    </div>
                </div>
                <div class="mt-8 single-actor">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="/img/actor5.jpg" alt="parasite">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    </div>
                    <div class="text-gray-500">
                        John Smith
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="movie-screenshots border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="uppercase tracking-wider text-lg font-semibold">Screenshots</h2>
            <hr>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                <div class="mt-8 single-screenshot">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="/img/image1.jpg" alt="parasite">
                    </a>
                </div>
                <div class="mt-8 single-screenshot">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="/img/image2.jpg" alt="parasite">
                    </a>
                </div>
                <div class="mt-8 single-screenshot">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="/img/image3.jpg" alt="parasite">
                    </a>
                </div>
                <div class="mt-8 single-screenshot">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="/img/image4.jpg" alt="parasite">
                    </a>
                </div>
                <div class="mt-8 single-screenshot">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="/img/image5.jpg" alt="parasite">
                    </a>
                </div>
                <div class="mt-8 single-screenshot">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="/img/image6.jpg" alt="parasite">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
