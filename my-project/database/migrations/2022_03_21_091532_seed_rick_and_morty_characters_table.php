<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Carbon;
use App\Services\RickAndMortyService;
use App\Models\Character;
use App\Models\Origin;
use App\Models\Location;
use App\Models\Episode;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $characters = new RickAndMortyService(RickAndMortyService::SERVICE);
        $page = 1;
        $totalPages = $characters->getCharacters($page) ? $characters->getCharacters($page)->info->pages : null;
            foreach ($characters->getCharacters($page)->results as $character) {
                // seed Characters table
                $characterModel = new Character();
                $characterModel->id = $character->id;
                $characterModel->name = $character->name;
                $characterModel->status = $character->status;
                $characterModel->species = $character->species;
                $characterModel->type = $character->type;
                $characterModel->gender = $character->gender;
                $characterModel->image = $character->image;
                $characterModel->url = $character->url;
                $characterModel->created = Carbon::create($character->created);
                $characterModel->save();
                
                // seed Origins table
                $origin = new Origin();
                $origin->id = $page;
                $origin->character_id = $character->id;
                $origin->name = $character->origin->name;
                $origin->url = $character->origin->url;
                $origin->save();
                
                // seed Locations table
                $location = new Location();
                $location->character_id = $character->id;
                $location->name = $character->location->name;
                $location->url = $character->location->url;
                $location->save();

                //seed Episodes Table
                foreach ($character->episode as $key => $value) {
                    $episode = new Episode();
                    $episode->character_id = $character->id;
                    $episode->url = $value;
                    $episode->save();
                }
                $page += 1;
                if ($page === $totalPages) {
                    continue;
                }
                echo "page: $page";
            }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }

};
