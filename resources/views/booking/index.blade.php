<a href="/booking/create">New Task</a>
<table>
    <tr>
        <th>
            ID
        </th>
        <th>
            Customer Name
        </th>

        <th>
            From
        </th>
        <th>
            Too
        </th>

    </tr>
    @foreach($booking as $bookin)

    <tr>
        <td>
            {{$bookin->id}}
        </td>
        <td>
            {{ $bookin->customer->name }}
        </td>
        <td>
            {{ $bookin->from_date }}
        </td>
        <td>
            {{ $bookin->to_date }}
        </td>
        <td>
            <a href="/booking/{{ $bookin->id }}">Show</a>
            <a href="/booking/{{ $bookin->id }}/edit">Edit</a>
            <form method="POST"action="booking/{{ $bookin->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>