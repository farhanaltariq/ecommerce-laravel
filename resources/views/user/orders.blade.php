@include('User.navbar')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@php
    $harga = 0;
@endphp
@foreach ($order as $item)
<div class="container">
    <div class="mt-3">
      <div class="d-style rounded btn-brc-tp border-2 bgc-white shadow-sm">
        {{-- {{ dd($order->product) }} --}}
            
        <div class="row align-items-center bg-secondary text-light rounded">
          <div class="col-12 col-md-4">
              <img src="{{ asset('img/'.$item->product->img) }}" width="60px" height="60px" alt="image">
            </div>

          <ul class="list-unstyled mb-0 col-12 col-md-4 text-dark-l1 text-90 text-start my-4 my-md-0">
            <li>
              <span>
                  <strong>{{ $item->product->tipe }}</strong>
              </span>
            </li>

            <li class="mt-25">
              <span class="text-110">
                <span>{{ $item->product->harga }}</span>
            </span>
            </li>

            <li class="mt-25">
                <br>
            </li>
          </ul>

          <div class="col-12 col-md-4 text-center">
              <a href="{{ url('delete-order', $item->id_order) }}">
                <i class="fa fa-trash-o" style="font-size:36px;color:orange"></i>
              </a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  @php
      $harga += $item->product->harga;
  @endphp
  @endforeach

  @if (isset($order))
  <div class="container">
    <div class="mt-3">
      <div class="d-style rounded btn-brc-tp border-2 bgc-white shadow-sm">
        {{-- {{ dd($order->product) }} --}}
        
        <div class="row align-items-center bg-secondary text-light rounded">
          <div class="col-12 col-md-4">
            <h4>Bayar</h4>
          </div>
          
          <ul class="list-unstyled mb-0 col-12 col-md-4 text-dark-l1 text-90 text-start my-4 my-md-0">
            <li>
              <span>
                <strong>Total Harga</strong>
              </span>
            </li>
            
            <li class="mt-25">
              <span class="text-110">
                {{ $harga }}
              </span>
            </li>
            
            <li class="mt-25">
              <br>
            </li>
          </ul>
          
          <div class="col-12 col-md-4 text-center">
            <a href="{{ route('checkout') }}" style="text-decoration: none; color:aqua; font-size: 1.2em">Bayar</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  @endif