<?php

namespace App\Models;
use App\Models\Subjects;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentSubjects extends Model
{
    use HasFactory;

    public function subject()
    {
        return $this->belongsTo(Subjects::class, 'subject_code', 'subject_code');
    }
    
}
