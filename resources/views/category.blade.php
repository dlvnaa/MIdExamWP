@extends('main')

@section('container')

<div class="p-3">
    <div class="Navbar-Category d-flex flex-row justify-content-center align-items-center gap-2">
        @foreach ($all_coffee as $item)
            <div class="p-2 rounded border border-secondary-subtle">
                <a href="/category/{{$item->id}}" class="text-decoration-none text-black">{{$item->name}}</a>
            </div>
        @endforeach
    </div>
    <hr>
    <div>
        <h3>Coffee Category : {{$category_name}}</h3>
    </div>
    <div class="Menu-Coffee d-flex flex-wrap justify-content-center align-items-center gap-5 p-5">
        @foreach ($coffee_category as $item)
            <div class="p-5 rounded" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5); width:300px;">
                <img src="/images/{{$item->coffee->images}}" alt="gambar kopi" class="w-100 rounded-circle">
                <hr>
                <h3>{{$item->coffee->name}}</h3>
                <br>
                <p>{{$item->coffee->description}}</p>
            </div>
        @endforeach
    </div>

</div>


@endsection
