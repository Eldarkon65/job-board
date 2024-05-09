<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    public static array $experience = ['Intern','Junior','Middle','Senior'];
    public static array $category = [
        'IT',
        'Finance',
        'Sales',
        'Marketing',
        'Education'
    ];
}
