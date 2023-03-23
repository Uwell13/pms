<?php

namespace App\Models\ship;

use App\Models\crew\Crew;
use App\Models\inventory\InventoryMainGroups;
use App\Models\Inventory\MainGroup;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    public function crew()
    {
        return $this->hasMany(Crew::class);
    }

    public function maingroup()
    {
        return $this->belongsTo(InventoryMainGroups::class);
    }
}
