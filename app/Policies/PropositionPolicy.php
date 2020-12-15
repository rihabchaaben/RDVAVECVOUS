<?php

namespace App\Policies;

use App\User;
use App\Proposition;
use Illuminate\Auth\Access\HandlesAuthorization;

class PropositionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any propositions.
     *
     * @param  \App\User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the proposition.
     *
     * @param  \App\User $user
     * @param  \App\Proposition $proposition
     * @return mixed
     */
    public function view(User $user, Proposition $proposition)
    {
        return $user->id === $proposition->professionnel->user->id && $proposition->status === Proposition::ACCEPTE;

    }
/**
     * Determine whether the user can view the proposition.
     *
     * @param  \App\User $user
     * @param  \App\Proposition $proposition
     * @return mixed
     */
    public function viewProposition(User $user, Proposition $proposition)
    {
        return $proposition->status === Proposition::ACCEPTE;
    }

    /**
     * Determine whether the user can create propositions.
     *
     * @param  \App\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the proposition.
     *
     * @param  \App\User $user
     * @param  \App\Proposition $proposition
     * @return mixed
     */
    public function update(User $user, Proposition $proposition)
    {
        return $user->id === $proposition->professionnel->user->id;
    }

    /**
     * Determine whether the user can delete the proposition.
     *
     * @param  \App\User $user
     * @param  \App\Proposition $proposition
     * @return mixed
     */
    public function delete(User $user, Proposition $proposition)
    {
        //
    }

    /**
     * Determine whether the user can restore the proposition.
     *
     * @param  \App\User $user
     * @param  \App\Proposition $proposition
     * @return mixed
     */
    public function restore(User $user, Proposition $proposition)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the proposition.
     *
     * @param  \App\User $user
     * @param  \App\Proposition $proposition
     * @return mixed
     */
    public function forceDelete(User $user, Proposition $proposition)
    {
        //
    }
}
