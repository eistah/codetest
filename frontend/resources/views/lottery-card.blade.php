<div class="col s12 m6">
    <div class="card-panel @php echo array_random($colors); @endphp">
        <div class="right">
                <span class="badge light-blue accent-2 white-text">
                    Lottery Ticket
                </span>
        </div>
        <span class="white-text">
              <h5>{{ $lottery['name'] }}</h5>
                <p>Game Types: {{ count(array_get($lottery, 'game_types')) }}</p>
                <p>Draws: {{ count(array_get($lottery, 'draws')) }}</p>
                <a href="/lottery/{{ $lottery['key'] }}"
                   class="waves-effect white black-text btn">More Info</a>

          </span>
    </div>
</div>
