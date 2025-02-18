<?php
declare(strict_types=1);    


namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\category;
use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    protected $fillable = [
        'titel',
        'beschrijving',
        'recept',
    ];
    //bob code
    //belongsTo zoekt naar de method, en de id waarde uit het tabel. hier haalt hij alle data op gekoppeld aan die id 
    public function category(): BelongsTo {
        return $this->belongsTo(category::class, 'id');
    }

}