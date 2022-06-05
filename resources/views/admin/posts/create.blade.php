<x-admin-master>
    @section('content')
    <h2>hello</h2>
    <form method="post" action="{{route('post.store')}}"  enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" id="title" placeholder="enter title">
        <textarea name="body" id="body" cols="30" rows="10" placeholder="enter body"></textarea>
        <input type="file" name="post_image" id="post_image" placeholder="upload image">
        <button>Submit</button>
    </form>
    @endsection
</x-admin-master>