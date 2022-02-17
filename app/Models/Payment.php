<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    // form fillables same as in database table
    protected $fillable = [
        'date',
        'amount_in_words',
        'amount_in_figures',
        'payable_to',
        'discription',
        'initiated_by',
        'department',
        'document_path',
    ];

    // define relationship with other models
    //add relationship with users model
    public function user(){
        return $this->belongsTo(User::class);
    }
}
