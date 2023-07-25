<?php

namespace App\Policies;

use App\Models\Sprint;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SprintPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the sprint can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the sprint can view the model.
     */
    public function view(User $user, Sprint $model): bool
    {
        return true;
    }

    /**
     * Determine whether the sprint can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the sprint can update the model.
     */
    public function update(User $user, Sprint $model): bool
    {
        return true;
    }

    /**
     * Determine whether the sprint can delete the model.
     */
    public function delete(User $user, Sprint $model): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the sprint can restore the model.
     */
    public function restore(User $user, Sprint $model): bool
    {
        return false;
    }

    /**
     * Determine whether the sprint can permanently delete the model.
     */
    public function forceDelete(User $user, Sprint $model): bool
    {
        return false;
    }
}
