<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    public static array $experience = ['intern','junior','intermediate','senior'];
    public static array $category = [
        'IT',
        'Finance',
        'Sales',
        'Marketing',
        'Education'
    ];
}
