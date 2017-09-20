<h5>Name</h5>
<p>
    {{$lottery['draw']['name']}}
</p>

<h5>Date</h5>
<p>
    {{ Carbon\Carbon::parse($lottery['draw']['draw_date'])->format('d/m/Y') }}

</p>

<h5>Description</h5>
<p>
    {{$lottery['draw']['description']}}
</p>

<h5>Prize</h5>
<p>
    {{$lottery['draw']['prize']['value']['currency']}}
    {{number_format($lottery['draw']['prize']['value']['amount'], 2)}}
</p>



<div class="divider"></div>

<ul class="collection with-header">
    <li class="collection-header"><h4>Offers</h4></li>

    @foreach(array_get($lottery, 'draw.offers', []) as $offer)
        <li class="collection-item">
            <p>
                <strong>Name:</strong> {{$offer['name']}} <br />
                <strong>Tickets:</strong> {{$offer['num_tickets']}} <br />
                <strong>Price:</strong> {{$offer['price']['currency']}}{{number_format($offer['price']['amount'], 2)}} <br />
                <strong>Price per
                    ticket:</strong> {{$offer['price_per_ticket']['currency']}}{{number_format($offer['price_per_ticket']['amount'], 2)}} <br />
                @if($offer['bonus_prize'])
                    <strong>Bonus Prize:</strong> {{$offer['bonus_prize']['description']}}
                @endif
            </p>
        </li>
    @endforeach
</ul>