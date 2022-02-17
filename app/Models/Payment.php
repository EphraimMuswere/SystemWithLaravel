<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'amount_in_words',
        'amount_in_figures',
        'payable_to',
        'discription',
        'initiated_by',
        'department',
        'document_name'
    ];
}
