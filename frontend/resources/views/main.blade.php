@extends('layout')

@section('title', 'Lotteries')

@php
    ($colors = ['teal', 'purple', 'indigo', 'blue', 'light-blue', 'green', 'amber', 'blue-grey', 'orange', 'deep-orange'])
@endphp

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

                @if($lottery['type'] == 'lottery_ticket')
                    @component('lottery-card', ['lottery' => $lottery, 'colors' => $colors])
                    @endcomponent
                @else
                    @component('raffle-card', ['lottery' => $lottery, 'colors' => $colors])
                    @endcomponent
                @endif

        @if($loop->iteration % 2 == 0 || $loop->last)
            </div>
        @endif
    @endforeach
@endsection