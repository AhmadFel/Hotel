<form action="/booking/{{ $booking->id }}" method="POST">
    @csrf 
    @method('PUT')
    <div>
        <label for="from_date">From Date</label>
        <input type="date" value ="{{ $booking->from_date }}"name="from_date">
    </div>
    <div>
        <label for="to_date">To Date</label>
        <input type="date" value ="{{ $booking->to_date }}"name="to_date">
    </div>
    <button type="submit">Save</button>
</form>