<x-admin-master>
    @section('content')
        <!-- Page Heading -->

        <h1 class="h3 mb-4 mt-2 text-gray-800"><a href="{{route('permission.index')}}">Permissions</a></h1>
        @if (Session::has('success_message'))
            <div class="alert alert-success">{{ Session::get('success_message') }}</div>
        @elseif (Session::has('error_message'))
            <div class="alert alert-danger">{{ Session::get('error_message') }}</div>
        @endif


        <div class="row">
            <div class="col-lg-3">
                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Permission</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{route('permission.update', $permission->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="name" class="form-label">Name:</label>
                              <input type="text" id="name" name="name" placeholder="Enter Permission Name" class="form-control {{($errors->has('name')) ? 'is-invalid' : ''}}" value="{{$permission->name}}">
                              @error('name')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-success btn-block" value="Update">
                          </form>
                    </div>
                </div>
            </div>
            {{-- @if ($permissions->isNotEmpty())
            <div class="col-lg-9">
                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Permission Permissions</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="permission"
                                                @foreach ($role->permission as $role_permission)
                                                    @if ($role_permission->slug == $permission->slug)
                                                        checked
                                                    @endif
                                                @endforeach>
                                            </td>
                                            <td>{{ $permission->id }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td>{{ $permission->slug }}</td>
                                            <td>
                                                <form action="{{ route('role.permission.attach', $role->id) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="permission" value="{{$permission->id}}">
                                                    <button class="btn btn-sm btn-primary" @if ($role->permission->contains($permission))
                                                        disabled style='cursor:not-allowed;' @endif>Attach</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('role.permission.detach', $role) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="permission" value="{{$permission->id}}">
                                                    <button class="btn btn-sm btn-danger" @if (!$permission->roles->contains($role))
                                                        disabled style='cursor:not-allowed;' @endif>Detach</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif --}}
        </div>
    @endsection

    @section('scripts')
        <!-- Page level plugins -->
        <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Page level custom scripts -->
        {{-- <script src="{{asset('js/demo/datatables-demo.js')}}"></script> --}}
    @endsection
</x-admin-master>
