    @if(\Session::has('success'))
    <ul>
        <li>{{ \Session::get('success') }}</li>
    </ul>
    @endif
    <form action="{{ route('update',$data->id) }}" method="POST">
        @csrf
        <br>
        <input type="text" name="name" placeholder="Name" value="{{ $data->name }}"><br/><br/>
        <input type="text" name="email" placeholder="Email" value="{{ $data->email }}"><br/><br/>
        <textarea name="address">{{ $data->address }}</textarea><br/><br/>
        <button>Submit</button>
    </form>
