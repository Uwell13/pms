<?php

namespace App\Models\inventory;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
Use App\Models\inventory\InventoryUnits;

class InventoryComponents extends Model
{
    protected $table = 'inventory_components';
    public $incrementing = false;
    protected $primaryKey = 'id'; 
    protected $fillable = [
      'unit_id',
      'code_component',
      // 'd_cc',
      'uuid',
      'name',
      'item_code',
      'list_no',
      'drawing_no',
      'vendor',
      'type',
      'serial',
      'issue_by',
      'certificate_no',
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
      'unit_id' => 'required',
      'code_component' => 'required|regex:/\d\d\d$\b/',
      // 'd_cc' => 'nullable',
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

  public function unit(): BelongsTo
  {
      return $this->belongsTo(InventoryUnits::class, 'unit_id', 'uuid');
  }

  public function part(): HasMany
  {
      return $this->hasMany(InventoryParts::class, 'uuid', 'component_id');
  }
}
