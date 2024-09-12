<?php

namespace App\Services;

use App\Interfaces\UserServiceInterface;
use App\Models\User;

class UsersService implements UserServiceInterface
{
    public User $user;

    public function __construct(User $user)
    {
       $this->user = $user;
    }

    public function store($postVal){
        $result = false;
        if(!empty($postVal)){
            $result = $this->user->create([
                'name' => $postVal->name,
                'phone' => $postVal->phone,
                'districts' => $postVal->phone,
            ]);
        }
        return $result;
    }
    public function userProfile($postVal){

    }
}