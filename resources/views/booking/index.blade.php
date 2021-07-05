<a href="/booking/create">New Booking</a>
<table>
    <tr>
        <th>
            Booking ID
        </th>
        <th>
            Customer Name
        </th>
        <th>
            Room Type
        </th>
        <th>
            From
        </th>

        <th>
            To
        </th>
        <th>
            Action
        </th>

    </tr>
    @foreach($bookings as $booking)

    <tr>
        <td>
            {{$booking->id}}
        </td>
        <td>
            {{ @$booking->customer->name }}
        </td>
        <td>
            {{ @$booking->room->type }}
        </td>
        <td>
            {{ $booking->from_date }}
        </td>
        <td>
            {{ $booking->to_date }}
        </td>
        <td>
            <a href="/booking/{{ $booking->id }}">Show</a>
            <a href="/booking/{{ $booking->id }}/edit">Edit</a>
            <form method="POST"action="booking/{{ $booking->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>