<form action="/customer/{{ $customer->id }}" method="POST">
    @csrf 
    @method('PUT')
    <div>
        <label for="name">Customer Name:  : </label>
        <input type="text" value ="{{ $customer->name }}"name="name">
    </div>
    <div>
        <label for="mobile">Custoemr Mobile:  : </label>
        <input type="text" value ="{{ $customer->mobile }}"name="mobile">
    </div>
    <div>
        <label for="email">Custoemr E-Mail:  : </label>
        <input type="text" value ="{{ $customer->email }}"name="email">
    </div>
    <button type="submit">Save</button>
</form>