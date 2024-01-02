<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawsuit extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    protected $fillable = [
        "number",
        "title",
        "description",
        "status",
        "client_id",
        "category",
        "date_opened",
        "date_closed",
        "court",
        "judge",
        "outcome",
        "priority",
    ];
}
