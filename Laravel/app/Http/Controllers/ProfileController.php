<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class ProfileController extends Controller
{
    use AuthorizesRequests;
    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    public function edit(User $user)
{
    $this->authorize('update', $user); 
    return view('profile.edit', compact('user'));
}


    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user);

        $validated = $request->validate([
            'username' => 'nullable|string|max:255|unique:users,username,' . $user->id,
            'birthday' => 'nullable|date',
            'profile_photo' => 'nullable|image|max:2048',
            'about_me' => 'nullable|string|max:1000',
        ]);

        if ($request->hasFile('profile_photo')) {
            if ($user->profile_photo) {
                Storage::delete($user->profile_photo);
            }
            $validated['profile_photo'] = $request->file('profile_photo')->store('profile_photos');
        }

        $user->update($validated);

        return redirect()->route('profile.show', $user)->with('success', 'Profile updated successfully.');
    }
}
