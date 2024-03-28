<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setup_Region extends Model
{
    use HasFactory;
    protected $table = 'setup_region';
    protected $fillable = [
        'company_id',
        'division_id',
        'unit',
        'region_name',
        'region_code',
        'invoice_code_old',
        'invoice_code',
        'BU',
        'div_bu_new',
        'division_id_BU_23',
        'unit_id_new',
        'div_bu_new_23',
        'BU_new',
        'division_fy_21_22',
        'division_fy_23_24',
        'flag',
    ];

    public function division()
    {
        return $this->belongsTo(setup_Division::class,'division_id_BU_23');
    }

    public function units()
    {
        return $this->belongsTo(setup_Unit::class,'unit_id_new');
    }

    public function company()
    {
        return $this->belongsTo(Setup_Company::class, 'company_id');
    }

}
