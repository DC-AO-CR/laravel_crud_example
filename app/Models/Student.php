<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model {
    use HasFactory;

    protected $fillable = [ 'firstName', 'lastName' ]; // QUESTION: Why have we added this to the model?
}
