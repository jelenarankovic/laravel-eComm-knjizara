@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
      <div class="tranding-wrapper">
        <h4>Search Results</h4>
        <a class="btn btn-succes" href="ordernow">Poruci sad</a> <br><br>
        @foreach ($products as $item)
        <div class="row searched-item cart-list-devider">
        <div class="col-sm-3">
            <a href="detail/{{ $item->id }}">
                <img class ="trending-image" src="{{ $item->gallery}}" >
                </a>
        </div>
        <div class="col-sm-3">
                <div class="">
                  <h2>{{ $item->name }}</h2>
                  <h5>{{ $item->description }}</h5>
                </div>
        </div>
        <div class="col-sm-3">
          <a href="/removecart/{{ $item->cart_id }}"class="btn btn-warning">Ukloni iz korpe</a>
        </div>
      </div>
      @endforeach
    </div>
    <a class="btn btn-succes" href="ordernow">Poruci sad</a> <br><br>
    </div>
</div>
@endsection