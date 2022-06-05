<x-admin-master>
    @section('content')
    <form action="{{route('user.profile.update',$user)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="name" placeholder="enter name" value={{$user->name}}>
        <input type="text" name="email" id="email" placeholder="enter email" value={{$user->email}}>
        <input type="password" name="password" id="password" placeholder="enter pass" value="" >
        <input type="password" name="password-confirmation" id="password-confirmation" placeholder="enter pass" value="">
        <input type="file" name="image" id="image">
        <button type="submit">submit</button>
    </form>
    @endsection
</x-admin-master>