<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    protected $table = "destinations";
	protected $guarded = [];
    use HasFactory;
}
