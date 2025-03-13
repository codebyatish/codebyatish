<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoleController extends Controller
{

    public function index()
    {
        return view('admin.roles.index', ['roles' => Role::all()]);
    }

    public function store()
    {
        request()->validate([
            'name' => ['required']
        ]);
        Role::create([
            'name' => Str::ucfirst(request('name')),
            'slug' => Str::lower(Str::of(request('name'))->slug('-'))
        ]);
        return back();
    }

    public function edit(Role $role)
    {
        return view('admin.roles.edit', [
            'role' => $role,
            'permissions' => Permission::all()
        ]);
    }

    public function update(Role $role)
    {
        $role->name = Str::ucfirst(request('name'));
        $role->slug = Str::lower(Str::of(request('name'))->slug('-'));
        if ($role->isDirty('name')) {
            list($messageKey, $strMessage) = ['success_message', 'Role was updated.'];
            $role->save();
        }else{
            list($messageKey, $strMessage) = ['success_message', 'Nothing has been updated.'];
        }
        return back()->with($messageKey, $strMessage);
    }

    public function attachPermission(Role $role)
    {
        $role->permission()->attach(request('permission'));
        return back();
    }

    public function detachPermission(Role $role)
    {
        $role->permission()->detach(request('permission'));
        return back();
    }

    public function destroy(Role $role)
    {
        $result = $role->delete();
        list($messageKey, $strMessage) = $result ? ['success_message', 'Role was deleted.'] : ['error_message', 'Unable to delete role.'];
        return back()->with($messageKey, $strMessage);
    }

}
