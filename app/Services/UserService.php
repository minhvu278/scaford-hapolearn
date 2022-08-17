<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public static function handleUploadImage($avatar)
    {
        if (isset($avatar)) {
            $path = $avatar->store(config('users.avatar_path'));

            $data = [
                'avatar' => config('users.storage_path') . substr($path, strlen(config('users.public_path'))),
            ];

            auth()->user()->update(array_filter($data));
        }
    }
}
