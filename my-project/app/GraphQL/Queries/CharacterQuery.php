<?php
namespace App\GraphQL\Queries;
use App\Models\Character;
use App\Models\Episode;
use App\Models\Location;
use App\Models\Origin;

class CharacterQuery
{

    // find character by name
    public function find($root,  $args):object {
        return Character::where('name', 'like', '%' . $args['name'] . '%')->get();
    }
    // get episodes with character id
    public function episodes($root,  $args):object {
        return Episode::where('character_id', $args['id'])->get();
    }
    // get origin with character id
    public function origins($root,  $args):object {
        return Origin::where('character_id', $args['id'])->get();
    }

    // get location with character id
    public function locations($root,  $args):object {
        return Location::where('character_id', $args['id'])->get();
    }
}
