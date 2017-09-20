<ul class="collection with-header">
    <li class="collection-header"><h4>Game Types</h4></li>
    @foreach(array_get($lottery, 'game_types', []) as $gameType)
        <li class="collection-item">
            <p>
                <strong>Name:</strong> {{$gameType['name']}} <br/>
                <strong>Description:</strong> {{$gameType['description']}}
            </p>
        </li>
    @endforeach
</ul>

<div class="divider"></div>

<ul class="collection with-header">
    <li class="collection-header"><h4>Draws</h4></li>

    @foreach(array_get($lottery, 'draws', []) as $draw)
        <li class="collection-item">
            <p>
                <strong>Date:</strong> {{ Carbon\Carbon::parse($draw['date'])->format('d/m/Y') }} <br />
                <strong>Prize:</strong> {{$draw['prize_pool']['currency']}}{{number_format($draw['prize_pool']['amount'], 2)}}
            </p>
        </li>
    @endforeach
</ul>