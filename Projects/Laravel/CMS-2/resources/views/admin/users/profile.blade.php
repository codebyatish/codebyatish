<x-admin-master>
    @section('content')
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Hello, {{Auth::user()->name}}</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User Profile</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="{{route('user.profile.update', $user->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <img src={{$user->avatar}} class="img-thmbnail" style="height:300px;">
                            </div>
                            <div class="form-group">
                                <label for="avatar" class="form-label">Profile</label>
                                <input type="file" class="form-control-file {{($errors->has('avatar')) ? 'is-invalid' : ''}}" id="avatar" name="avatar">
                                @error('avatar')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control {{($errors->has('username')) ? 'is-invalid' : ''}}" id="username" name="username" value="{{$user->username}}">
                                @error('username')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control {{($errors->has('name')) ? 'is-invalid' : ''}}" id="name" name="name" value="{{$user->name}}">
                                @error('name')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control {{($errors->has('email')) ? 'is-invalid' : ''}}" id="email" name="email" value="{{$user->email}}">
                                @error('email')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control {{($errors->has('password')) ? 'is-invalid' : ''}}" id="password" name="password">
                                @error('password')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control {{($errors->has('password_confirmation')) ? 'is-invalid' : ''}}" id="confirm_password" name="password_confirmation">
                                @error('confirm_password')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary" value="Update">
                        </form>
                    </div>
                </div>

                <h4 class="mt-4 text-gray-800">Roles</h4>
                <div class="row mt-2">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="user-profile-table" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Options</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Attach</th>
                                        <th>Detach</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Options</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Attach</th>
                                        <th>Detach</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td><input type="checkbox" name="role"
                                                @foreach ($user->roles as $user_role)
                                                    @if ($user_role->slug == $role->slug)
                                                        checked
                                                    @endif
                                                @endforeach>
                                            </td>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->slug }}</td>
                                            <td>
                                                <form action="{{ route('user.role.attach', $user) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="role_id" value="{{$role->id}}">
                                                    <button class="btn btn-sm btn-primary" @if ($user->roles->contains($role))
                                                        disabled style='cursor:not-allowed;' @endif>Attach</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('user.role.detach', $user) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="role_id" value="{{$role->id}}">
                                                    <button class="btn btn-sm btn-danger" @if (!$user->roles->contains($role))
                                                        disabled style='cursor:not-allowed;' @endif>Detach</button>
                                                </form>
                                            </td>
                                            {{-- <td>
                                                <form action="{{ route('user.destroy', $user->id) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-admin-master>
