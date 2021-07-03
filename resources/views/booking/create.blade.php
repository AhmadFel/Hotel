<form action="/booking" method="POST">
    @csrf 
    <div>
        <label for="room_id">Room ID</label>
        <input type="text" name="room_id">
    </div>
    <div>
        <label for="customer_id">Customer Name</label>
        <select name="customer_id" >
            @foreach ($bookings as $booking)
            <option value="{{ $booking->id }}">
            {{ $booking->id }}
            </option>
            @endforeach
        </select>
    </div>
    <button type="submit">Save</button>
</form>