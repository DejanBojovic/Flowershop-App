<?php

namespace App\Policies;

use App\Models\Like;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LikePolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Like  $like
     * @return mixed
     */
    public function delete(User $user, Like $like)
    {
        if($user->type === 'admin') {
            return true;
        }

        return $user->userID === $like->userID;
    }
}
