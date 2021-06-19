<table>
    <thead>
        <tr>
            <th> title</th>
            <th> description</th>
            <th> genre </th>
            <th> max_players </th>
            <th> year</th>
            <th> score_avg</th>
            <th> price_avg </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($games as $game)
            <tr>
                <td> {{ $game->title }} </td>
                <td> {{ $game->description }} </td>
                <td> {{ $game->genre }} </td>
                <td> {{ $game->max_players }} </td>
                <td> {{ $game->year }} </td>
                <td> {{ $game->score_avg }} </td>
                <td> {{ $game->price_avg }} </td>
            </tr>
        @endforeach
    </tbody>
</table>
