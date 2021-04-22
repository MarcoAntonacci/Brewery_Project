<x-layout>


<div class="container">
    <div class="row">
        <div class="col-12 col-md-4-text-center my-5">
            <h1>Le nostre Birrerie</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($breweries as $brewery)


        <div class="col-12 col-md-3">
            <div class="card" >
                <img src="{{Storage::url($brewery->img)}}" class="card-img-top img-fluid" alt="{{$brewery->name}}">
                <div class="card-body">
                  <h5 class="card-title">{{$brewery->name}}</h5>
                  <p class="card-text">{{$brewery->address}}</p>
                  <p class="card-text">{{$brewery->email}}</p>
                  <a href="#" class="btn btn-primary">Dettaglio</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>


</x-layout>
