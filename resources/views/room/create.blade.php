<form action="/room" method="POST">
    @csrf 
    <div>
        <label for="type">Choose Room Type:</label>

    <select name="type" id="type">
            <option value="R">R</option>
            <option value="W">W</option>
    </select>
    </div>
    <div>
        <label for="price">Price</label>
        <input type="text" name="price">
    </div>
    <button type="submit">Save</button>
</form>