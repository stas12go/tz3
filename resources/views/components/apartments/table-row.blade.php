<tr>
    <th scope="row">{{ $key }}</th>
    <td>{{ $item->name }}</td>
    <td>{{ $item->type }}</td>
    <td>{{ $item->price }}</td>
    <td><a href="{{ route('apartments.edit', $item->id) }}">Изменить</a></td>
</tr>
