<?php

namespace App\Models;

use App\Models\User;
use App\Models\Donate;
use App\Models\Demande;
use App\Models\Picture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class simpleUsers extends Model
{
    use HasFactory,softDeletes;
    protected $fillable=[
        'id',
        'name',
'email',
'picture',
'password',
'image',
        'gender',
        'bloodGroup',
        'dateBirth',
    ];
    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }
    public function donates()
    {
        return $this->hasMany(Donate::class);
    }
}
