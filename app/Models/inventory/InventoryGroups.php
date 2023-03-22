<?php

namespace App\Models\inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InventoryGroups extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    protected $table = 'inventory_groups';
    public $incrementing = false;
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'main_group_id',
        'uuid',
        'code_group',
        'name',
    ];
}