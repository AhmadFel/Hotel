<form action="/room" method="POST">
    @csrf 
    <div>
        <label for="type">Type</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="price">Price</label>
        <input type="text" name="title">
    </div>
    <button type="submit">Save</button>
</form>