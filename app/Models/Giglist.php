<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giglist extends Model
{
    use HasFactory;

    protected $fillable = [
        'companyName',
        'jobTitle',
        'jobLocation',
        'contactEmail',
        'webappURL',
        'tags',
        'companyLogo',
        'jobDesc',
        'gigCreatedBy'
    ];
}