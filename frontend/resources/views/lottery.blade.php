@extends('layout')

@section('title', $lottery['name'])

@section('navigation')
    <div class="row">
        <div class="col s12 m12">
            <nav>
                <div class="nav-wrapper">
                    <div class="col s12">
                        <a href="/" class="breadcrumb">Home</a>
                        <a href="/lottery/{{$lottery['key']}}" class="breadcrumb">{{$lottery['name']}}</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
@endsection

@section('content')
    @if($lottery['type'] == 'lottery_ticket')
        @component('lottery-description', ['lottery' => $lottery])
        @endcomponent
    @else
        @component('raffle-description', ['lottery' => $lottery])
        @endcomponent
    @endif
@endsection