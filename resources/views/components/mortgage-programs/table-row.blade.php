<tr>
    <th scope="row">{{ $key }}</th>
    <td>{{ $item->name }}</td>
    <td>{{ $item->interest_rate }}</td>
    <td>{{ $item->max_term }}</td>
    <td>{{ $item->min_initial_fee }}</td>
    <td><a href="{{ route('mortgage-programs.edit', $item->id) }}">Изменить</a></td>
</tr>
