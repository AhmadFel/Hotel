<a href="/customer/create">New customer</a>
<table>
    <tr>
        <th>
            ID
        </th>
        <th>
            Name
        </th>
        <th>
            Mobile
        </th>
        <th>
            E-Mail
        </th>
    </tr>
    @foreach($customers as $customer)

    <tr>
        <td>
            {{$customer->id}}
        </td>
        <td>
            {{$customer->name}}
        </td>
        <td>
            {{ $customer->mobile }}
        </td>
        <td>
            {{ $customer->email }}
        </td>
        <td>
            <a href="/customer/{{ $customer->id }}">Show</a>
            <a href="/customer/{{ $customer->id }}/edit">Edit</a>
            <form method="POST"action="customer/{{ $customer->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>