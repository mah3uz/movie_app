<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popular = Http::withToken(env('TMDB_TOKEN'))
            ->get(env('TMDB_URL') . '/movie/popular')
            ->json()['results'];

        $now_playing = Http::withToken(env('TMDB_TOKEN'))
            ->get(env('TMDB_URL') . '/movie/now_playing')
            ->json()['results'];

        $genres = Http::withToken(env('TMDB_TOKEN'))
            ->get(env('TMDB_URL') . '/genre/movie/list')
            ->json()['genres'];

        $genres = collect($genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        return response(view('welcome', [
            'popular' => $popular,
            'now_playing' => $now_playing,
            'genres' => $genres
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::withToken(env('TMDB_TOKEN'))
            ->get(env('TMDB_URL') . '/movie/' . $id . '?append_to_response=videos,images,credits')
            ->json();

        return response(view('movies.show', ['movie' => $movie]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
