<x-admin-master>
    @section('content')
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Create Post</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="title" class="form-label">Title:</label>
                      <input type="text" class="form-control" id="title" placeholder="Enter Post Title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="file" class="form-label">Post image:</label>
                        <input type="file" class="form-control-file" id="post_image" name="post_image">
                    </div>
                    <div class="form-group">
                        <label for="file" class="form-label">Post Description:</label>
                        <textarea class="form-control" id="body" placeholder="Enter Post Description" name="body" rows="4"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                  </form>
            </div>
        </div>
    @endsection
</x-admin-master>
