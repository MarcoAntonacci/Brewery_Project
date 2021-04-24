<x-layout>


<div class="container">
    <div class="row">
        <div class="col-12 col-md-4-text-center my-5">
            <h1 class="h1-color fs-1">Le nostre Birrerie</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($breweries as $brewery)


        <div class="col-12 col-md-3">
            <div class="card mb-5" >
                <img src="{{Storage::url($brewery->img)}}" class="card-img-top img-fluid" alt="{{$brewery->name}}">
                <div class="card-body">
                  <h5 class="card-title fs-4 text-color text-center my-2">{{$brewery->name}}</h5>
                  <p class="card-text fs-5 text-color3">{{$brewery->address}}</p>
                  <p class="card-text fs-5 text-color3">{{$brewery->email}}</p>
                  <p class="card-text fs-5 text-color2">Inserita il {{$brewery->created_at->format('d-m-Y')}}</p>
                  <a href="{{route('brewery.show', compact('brewery'))}}" class="btn btn-color rounded-pill">Dettaglio</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>


</x-layout>
