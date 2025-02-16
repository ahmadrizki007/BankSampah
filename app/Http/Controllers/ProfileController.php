<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('profile.profile', [
            'user' => $request->user()
        ]);
    }

    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user()
        ]);
    }

    public function handleEdit(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        try {
            $request->user()->save();
        } catch (\Exception $e) {
            return Redirect::route('profile.edit')->with('error', $e->getMessage());
        }

        return Redirect::route('profile');
    }
}
