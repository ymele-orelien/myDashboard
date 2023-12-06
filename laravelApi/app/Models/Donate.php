<?php

namespace App\Models;

use App\Models\User;
use App\Models\simpleUsers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donate extends Model
{
    use HasFactory,softDeletes;
    protected $fillable=[
        'id',
    'user_id',
        'details',
        'montant',
        'bloodGroup',
        'poches'
            ];
            ///RELATION ONE TO ONE
            public function SimpleUser()
            {
                return $this->belongsTo(simpleUsers::class);
            }


            // /////relation one to many from Users
            // public function donateable():MorhpMany{
            //     return $this->morphTo();
            // }


}
