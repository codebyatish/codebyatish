<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PermissionController extends Controller
{
    public function index()
    {
        return view('admin.permissions.index', ['permissions' => Permission::all()]);
    }

    public function store()
    {
        request()->validate([
            'name' => ['required']
        ]);
        Permission::create([
            'name' => Str::ucfirst(request('name')),
            'slug' => Str::lower(Str::of(request('name'))->slug('-'))
        ]);
        return back();
    }

    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', [
            'permission' => $permission,
        ]);
    }

    public function update(Permission $permission)
    {
        $permission->name = Str::ucfirst(request('name'));
        $permission->slug = Str::lower(Str::of(request('name'))->slug('-'));
        if ($permission->isDirty('name')) {
            list($messageKey, $strMessage) = ['success_message', 'Permission was updated.'];
            $permission->save();
        }else{
            list($messageKey, $strMessage) = ['success_message', 'Nothing has been updated.'];
        }
        return back()->with($messageKey, $strMessage);
    }

    public function destroy(Permission $permission)
    {
        $result = $permission->delete();
        list($messageKey, $strMessage) = $result ? ['success_message', 'Permission was deleted.'] : ['error_message', 'Unable to delete permission.'];
        return back()->with($messageKey, $strMessage);
    }
}
