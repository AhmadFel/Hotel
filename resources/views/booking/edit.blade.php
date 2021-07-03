<form action="/booking/{{ $booking->id }}" method="POST">
    @csrf 
    @method('PUT')
    <div>
        <label for="customer_id">Customer name: </label>
        <input type="text" value ="{{ $booking->customer_id }}"name="customer_id">
    </div>
    <div>
        <label for="room_id">Room ID</label>
        <select name="room_id">
            @foreach($rooms as $room)
            <option {{ $booking->room_id==$room->id?'selected':'' }}
                value="{{ $room->id }}">
            {{ $room->id }}
        </option>
        @endforeach
        </select>
    </div>
    <div>
        <label for="from_date">From Date</label>
        <input type="text" value ="{{ $booking->from_date }}"name="from_date">
    </div>
    <div>
        <label for="to_date">To Date</label>
        <input type="text" value ="{{ $booking->to_date }}"name="to_date">
    </div>
    <button type="submit">Save</button>
</form>