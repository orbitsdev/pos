<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Id Number</th>
        <th>Bar Code</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($collections as $item)
    <tr>
        <td width="25">{{ $item->name }}</td>
        <td width="25">{{ $item->id_number }}</td>
        <td width="25">{{ $item->bar_code }}</td>
        <td width="25">{{ $item->price }}</td>
    </tr>    
    @empty
     
    @endforelse
    </tbody>
</table>
