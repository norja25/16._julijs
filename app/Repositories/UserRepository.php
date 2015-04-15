<?php namespace Modelbook\Repositories;

use Modelbook\User;
use GuzzleHttp\Client as Guzzle;
class UserRepository {

    /**
     * Persist  a user
     *
     * @param User $user
     * @return mixed
     */
    public function save(User $user)
    {
        return $user->save();

    }

}