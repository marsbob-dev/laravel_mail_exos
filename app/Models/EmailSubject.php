<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailSubject extends Model
{
    use HasFactory;

    public function mails()
    {
        return $this->hasMany(Mail::class,'subject_id');
    }
}
