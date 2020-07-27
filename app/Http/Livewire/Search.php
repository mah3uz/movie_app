<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Search extends Component
{
    public $search = '';
    public $searchResults = [];

    public function render()
    {
        if (strlen($this->search) >= 2) {
            $this->searchResults = Http::withToken(env('TMDB_TOKEN'))
                ->get(env('TMDB_URL') . '/search/movie/?query=' . $this->search)
                ->json()['results'];
        }

        return view('livewire.search');
    }
}
