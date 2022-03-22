<?php
namespace App\GraphQL\Queries;
use App\Models\Character;
use App\Models\Episode;
use App\Models\Location;
use App\Models\Origin;

class CharacterQuery
{

    public function find($root,  $args):object {
        return Character::where('name', 'like', '%' . $args['name'] . '%')->get();
    }
    public function episodes($root,  $args):object {
        return Episode::where('character_id', $args['id'])->get();
    }
    public function origins($root,  $args):object {
        return Origin::where('character_id', $args['id'])->get();
    }

    public function locations($root,  $args):object {
        return Location::where('character_id', $args['id'])->get();
    }
}
