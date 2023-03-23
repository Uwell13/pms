<?php

namespace App\Models\Pms;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalMaintenanceHistory extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'approval_maintenance_history';
    public $timestamps = false;
    protected $fillable = [
        'taskjob_id',
        'user_id',
        'is_approved',
        'type_approve',
    ];
}
