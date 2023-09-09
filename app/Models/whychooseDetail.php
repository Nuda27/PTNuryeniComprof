<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class whychooseDetail extends Model
{
    use HasFactory;

    protected $table = 'whychoose_details';

    protected $fillable = [
        'whychoose_id',
        'title',
        'description',
    ];

    /**
     * Get the user  that owns the whychooseDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function whychoose()
    {
        return $this->belongsTo(Whychoose::class);
    }

}
