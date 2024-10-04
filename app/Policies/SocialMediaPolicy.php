<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\SocialMedia;
use App\Models\User;

class SocialMediaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any SocialMedia');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, SocialMedia $socialmedia): bool
    {
        return $user->checkPermissionTo('view SocialMedia');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create SocialMedia');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, SocialMedia $socialmedia): bool
    {
        return $user->checkPermissionTo('update SocialMedia');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, SocialMedia $socialmedia): bool
    {
        return $user->checkPermissionTo('delete SocialMedia');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any SocialMedia');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, SocialMedia $socialmedia): bool
    {
        return $user->checkPermissionTo('{{ restorePermission }}');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('{{ restoreAnyPermission }}');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, SocialMedia $socialmedia): bool
    {
        return $user->checkPermissionTo('{{ replicatePermission }}');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('{{ reorderPermission }}');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, SocialMedia $socialmedia): bool
    {
        return $user->checkPermissionTo('force-delete SocialMedia');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any SocialMedia');
    }
}
