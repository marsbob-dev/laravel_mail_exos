<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;

    public function subjects()
    {
        return $this->belongsTo(EmailSubject::class,'subject_id');
    }
}
