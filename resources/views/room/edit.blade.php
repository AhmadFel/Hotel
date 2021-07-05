<form action="/room/{{ $room->id }}" method="POST">
    @csrf 
    @method('PUT')
    <div>
        <label for="type">Choose Room Type:</label>

    <select name="type" id="type">
            <option value="R">R</option>
            <option value="W">W</option>
    </select>
    </div>
    <div>
        <label for="price">Room price : </label>
        <input type="text" value ="{{ $room->price }}"name="price">
    </div>
    <button type="submit">Save</button>
</form>