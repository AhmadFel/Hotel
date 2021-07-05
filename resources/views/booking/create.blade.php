<form action="/booking" method="POST">
    @csrf 
    <div>
        <label for="room_id">Room Type</label>
        <select name="room_id" >
            @foreach ($rooms as $room)
            <option value="{{ $room->id }}">
            {{ $room->type }}
            </option>
            @endforeach
        </select>
        
    </div>
    <div>
        <label for="customers_id">Customer Name</label>
        <select name="customers_id" >
            @foreach ($customers as $customer)
            <option value="{{ $customer->id }}">
            {{ $customer->name }}
            </option>
            @endforeach
        </select>
        
    </div>
    <div>
        <label for="from_date">From Date</label>
        <input type="date" value =""name="from_date">
    </div>
    <div>
        <label for="to_date">To Date</label>
        <input type="date" value =""name="to_date">
    </div>
    <button type="submit">Save</button>
</form>