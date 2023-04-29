<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'counter'
    ];
    protected $hidden = [
        'teacher_id'
    ];

    /**
     * Get the teacher that owns the Rate
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
}
