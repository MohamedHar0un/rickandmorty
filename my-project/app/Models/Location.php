<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;


class Location extends Model
{
    use searchable;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
    public $timestamps = false;

    public function Character(): BelongsTo
    {
        return $this->belongsTo(Character::class, 'character_id', 'id');
    }
}
