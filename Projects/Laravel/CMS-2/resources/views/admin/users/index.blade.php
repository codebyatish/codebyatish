<x-admin-master>
    @section('content')
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Users</h1>
        @if (Session::has('success_message'))
            <div class="alert alert-success">{{ Session::get('success_message') }}</div>
        @elseif (Session::has('error_message'))
            <div class="alert alert-danger">{{ Session::get('error_message') }}</div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="users-table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Avatar</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Ragistered Date</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Avatar</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Ragistered Date</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td><img src="{{ $user->avatar }}" style="height: 2rem;width: 2rem;border-radius:50%"></td>
                                    <td>
                                        <a href="{{route('user.profile.show', $user->id)}}">{{ $user->username }}</a>
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                    <td>{{ $user->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- <div class="d-flex">
            <div class="mx-auto">
                {{$posts->links('pagination::bootstrap-4')}}
            </div>
        </div> --}}
    @endsection
    @section('scripts')
        <!-- Page level plugins -->
        <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection
</x-admin-master>
