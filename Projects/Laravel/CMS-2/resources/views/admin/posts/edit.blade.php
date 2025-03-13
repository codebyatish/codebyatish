<x-admin-master>
    @section('content')
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Post</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                      <label for="title" class="form-label">Title:</label>
                      <input type="text" class="form-control" id="title" placeholder="Enter Post Title" name="title" value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <label for="file" class="form-label">Post image:</label>
                        <input type="file" class="form-control-file" id="post_image" name="post_image">
                        <img src="{{$post->post_image}}" height="100" class="mt-2">
                    </div>
                    <div class="form-group">
                        <label for="file" class="form-label">Post Description:</label>
                        <textarea class="form-control" id="body" placeholder="Enter Post Description" name="body" rows="4">{{$post->body}}</textarea>
                    </div>
                    <input type="submit" class="btn btn-success" value="Update">
                  </form>
            </div>
        </div>

    @endsection
</x-admin-master>
