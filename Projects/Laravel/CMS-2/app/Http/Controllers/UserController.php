<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }

    public function show(User $user)
    {
        return view('admin.users.profile', [
            'user' => $user,
            'roles' => Role::all()
        ]);
    }

    public function update(Request $request,User $user)
    {
        $inputes = $request->validate([
            'username' => ['required','string','max:255','alpha_dash'],
            'name' => ['required','string','max:255'],
            'email' => ['required','string','max:255'],
            'avatar' => ['file']
        ]);

        if ($request->avatar) {
            $inputes['avatar'] = $request->avatar->store('images');
        }

        $user->update($inputes);

        return back();
    }

    public function destroy(User $user)
    {
        $result = $user->delete();
        list($messageKey, $strMessage) = $result ? ['success_message', 'User was deleted.'] : ['error_message', 'Unable to delete post.'];
        return back()->with($messageKey, $strMessage);
    }

    public function attach(User $user) {
        $user->roles()->attach(request('role_id'));
        return back();
    }

    public function detach(User $user) {
        $user->roles()->detach(request('role_id'));
        return back();
    }
}
