<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;
    protected $fillable = ['subject_code', 'subject_name','related_department','prequisite'];

    public function std_subject()
    {
        return $this->belongsTo(studentSubjects::class);
    }

}
