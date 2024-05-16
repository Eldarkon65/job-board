<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Auth\Access\Response;

class VacancyPolicy
{

    public function viewAny(?User $user): bool
    {
        return true;
    }

    public function view(User $user, Vacancy $vacancy): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Vacancy $vacancy): bool
    {
        return false;
    }

    public function delete(User $user, Vacancy $vacancy): bool
    {
        return false;
    }

    public function restore(User $user, Vacancy $vacancy): bool
    {
        return false;
    }

    public function forceDelete(User $user, Vacancy $vacancy): bool
    {
        return false;
    }

    public function apply(User $user, Vacancy $vacancy):bool
    {
        return !$vacancy->hasUserApplied($user);
    }
}
