<?php
//
//namespace App\Models;
//
//class Character
//{
//    public $timestamps = false;
//

//}


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Scout\Searchable;


class Character extends Model
{
    use searchable;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
    public $timestamps = false;


    public function episode(): HasMany
    {
        return $this->hasMany(Episode::class, 'character_id', 'id');
    }

    public function origin(): HasOne
    {
        return $this->hasOne(Origin::class, 'character_id', 'id');
    }

    public function location(): HasOne
    {
        return $this->hasOne(Location::class, 'character_id', 'id');
    }
}
