<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function lawsuits()
    {
        return $this->hasMany(Lawsuit::class);
    }

    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "address",
        "phone",
    ];
}
