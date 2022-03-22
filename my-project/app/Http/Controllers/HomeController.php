<?php

namespace App\Http\Controllers;

use App\Models\Character;

class HomeController
{
    public function index() {
        $characters = Character::with(['origin', 'location', 'episode'])->get();
        foreach ($characters as $character) {
//            dd($character->episode);
            if ($character->origin->count()) {
                dd($character->episode, $character->location, $character->origin );
            }
        }
        dd('error');

        dd($characters);
    }
}
