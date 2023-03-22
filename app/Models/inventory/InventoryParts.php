<?php

namespace App\Models\inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class InventoryParts extends Model
{
    protected $table = 'inventory_parts';
    public $incrementing = false;
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'component_id',
        'code_part',
        // 'd_cp',
        'uuid',
        'name',
        'item_code',
        'quantity',
        'list_no',
        'drawing_no',
        'vendor',
        'type',
        'serial',
        'issue_by',
        'certificate_no',
        'issue_date',
        'next_inspection',
        'specification_detail',
        'maintenance_detail',
        'number_approval',
        'date_approval',
        'pnd_place',
        'pnd_date',
        'validity',
        'maker',
        'image',
    ];
    public static $validator = [
        'component_id' => 'required',
        'code_part' => 'required|regex:/\d\d\d$\b/',
        // 'd_cp' => 'nullable',
        'name' => 'required',
        'uuid' => 'required',
        'item_code' => 'required',
        'list_no' => 'nullable',
        'drawing_no' => 'nullable',
        'vendor' => 'nullable',
        'type' => 'nullable',
        'serial' => 'nullable',
        'issue_by' => 'nullable',
        'certificate_no' => 'nullable',
        'specification_detail' => 'nullable',
        'maintenance_detail' => 'nullable',
        'number_approval' => 'nullable',
        'date_approval' => 'nullable',
        'pnd_place' => 'nullable',
        'pnd_date' => 'nullable',
        'validity' => 'nullable',
        'maker' => 'nullable',
        'image' => 'nullable',
];
    public function component(): BelongsTo
    {
        return $this->belongsTo(InventoryComponents::class, 'component_id', 'uuid');
    }

    public function item(): HasOne
    {
        return $this->hasOne(Item::class);
    }
}
