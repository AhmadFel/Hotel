<form action="/room/{{ $room->id }}" method="POST">
    @csrf 
    @method('PUT')
    <div>
        <label for="type">Room Type : </label>
        <input type="text" value ="{{ $room->type }}"name="type">
    </div>
    <div>
        <label for="price">Room price : </label>
        <input type="text" value ="{{ $room->price }}"name="price">
    </div>
    <button type="submit">Save</button>
</form>