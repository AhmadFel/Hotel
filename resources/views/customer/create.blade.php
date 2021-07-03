<form action="/customer" method="POST">
    @csrf 
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="mobile">Mobile</label>
        <input type="text" name="mobile">
    </div>
    <div>
        <label for="email">E-Mail</label>
        <input type="text" name="email">
    </div>
    <button type="submit">Save</button>
</form>