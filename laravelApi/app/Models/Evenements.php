<?php

namespace App\Models;

use App\Models\User;
use App\Models\parteners;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenements extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'id',

        'started',
        'theme',
        'detail',


    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
