<div class="col s12 m6">
    <div class="card-panel @php echo array_random($colors); @endphp">
        <div class="right">
                <span class="badge light-blue accent-2 white-text">
                    Raffle Ticket
                </span>
        </div>
        <span class="white-text">
              <h5>{{ $lottery['name'] }}</h5>
                <p>Description: {{ array_get($lottery, 'draw.description') }}</p>
                <p>Offers: {{ count(array_get($lottery, 'draw.offers')) }}</p>
                <a href="/lottery/{{ $lottery['key'] }}" class="waves-effect white black-text btn">More Info</a>
                @if($lottery['lottery']['play_url'])
                <a href="{{ $lottery['lottery']['play_url'] }}" target="_blank" class="waves-effect teal white-text btn">Play</a>
                @endif
          </span>
    </div>
</div>
