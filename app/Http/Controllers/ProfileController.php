<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = User::find(auth()->id())->courses;
        return view('profile.show', compact(['courses']));
    }

    public function update(ProfileRequest $request)
    {
        $data = $request->except('avatar');
        auth()->user()->update(array_filter($data));

        if (!empty($request['avatar'])) {
            $request['avatar'] = UserService::handleUploadImage($request->file('avatar'));
        }

        return redirect()->route('profiles.index');
    }
}
