<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
        'location',
        'people_involved',
        'historical',
        'significance',
        'stages',
        'materials',
        'products',
        'attire',
        'expressions',
        'objects',
        'structure_resources',
        'transmissions',
        'cultural_assets',
        'evaluations',
        'recommendations'     
    ];

    protected $table = 'inventories';
}
