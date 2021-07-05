<a href="/room/create">New room</a>
<table>
    <tr>
        <th>
            Room ID
        </th>
        <th>
            Type
        </th>
        <th>
            Price
        </th>
        <th>
            Actions
        </th>
    </tr>
    @foreach($rooms as $room)

    <tr>
        <td>
            {{$room->id}}
        </td>
        <td>
            {{$room->type}}
        </td>
        <td>
            {{ $room->price }}
        </td>
        <td>
            <a href="/room/{{ $room->id }}">Show</a>
            <a href="/room/{{ $room->id }}/edit">Edit</a>
            <form method="POST"action="room/{{ $room->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>