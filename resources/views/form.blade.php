@if(\Session::has('success'))
<ul>
    <li>{{ \Session::get('success') }}</li>
</ul>
@endif
    @if(\Session::has('delete'))
<ul>
    <li>{{ \Session::get('delete') }}</li>
</ul>
@endif
<form action="{{ route('submit.form') }}" method="POST">
    @csrf
    <br>
    <input type="text" name="name" placeholder="Name"><br/><br/>
    <input type="text" name="email" placeholder="Email"><br/><br/>
    <textarea name="address"></textarea><br/><br/>
    <button>Submit</button>
</form>


<table border="1" cellspacing="0">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>email</td>
        <td>address</td>
        <td>Action</td>
    </tr>
    @foreach($data as $form)
    <tr>
        <td>{{ $form->id }}</td>
        <td>{{ $form->name }}</td>
        <td>{{ $form->email }}</td>
        <td>{{ $form->address }}</td>
        <td>
            <a href="{{ route('view.update', $form->id) }}">Update</a> |
            <form action="{{ route('delete', $form->id) }}" method="POST">
                @csrf
                <button>Delete</button>
            </form>
            <!-- <a href="{{ route('delete', $form->id) }}">Delete</a> -->
        </td>
    </tr>
    @endforeach
</table>
