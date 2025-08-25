<?php

namespace App\Http\Controllers;

use App\Models\User;
use DirectoryTree\Anonymize\Facades\Anonymize;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::findOrFail($userId = 1);
        echo __('User :user_id\'s name is :user_name, email is :user_email, address is :user_address, and phone number is :user_phone.', ['user_id' => $userId, 'user_name' => $user->name, 'user_email' => $user->email, 'user_address' => $user->address, 'user_phone' => $user->phone]) . PHP_EOL;
    }
}
