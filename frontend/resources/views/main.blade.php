@extends('layout')

@section('title', 'Lotteries')

@php ($colors = ['teal', 'purple', 'indigo', 'blue', 'light-blue', 'green', 'amber', 'blue-grey', 'orange', 'deep-orange']) @endphp

@section('navigation')
    <div class="row">
        <div class="col s12 m12">
            <nav>
                <div class="nav-wrapper">
                    <div class="col s12">
                        <a href="/" class="breadcrumb">Home</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
@endsection

@section('content')
    @foreach ($lotteries as $lottery)
        @if($loop->iteration % 2 != 0)
            <div class="row">
                @endif

                <div class="col s12 m6">
                    <div class="card-panel @php echo array_random($colors); @endphp">
                        <div class="right">
                            <span class="badge light-blue accent-2 white-text">
                                {{title_case(str_replace('_', ' ',$lottery['type']))}}
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

                @if($loop->iteration % 2 == 0 || $loop->last)
            </div>
        @endif
    @endforeach
@endsection