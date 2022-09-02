<h1>Member List</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
    </tr>
    @foreach($members as $member)
        <tr>
            <td>{{ $member['id'] }}</td>
            <td>{{ $member['name'] }}</td>
            <td>{{ $member['email'] }}</td>
            <td>{{ $member['created_at'] }}</td>
        </tr>
    @endforeach
</table>
<div>
    {{-- Not working --}}
    {{-- {{ $members->links('vendor.pagination.bulma') }} --}}
</div>