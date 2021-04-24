<x-layout>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card h-100">
                <img src="{{Storage::url($brewery->img)}}" alt="{{$brewery->name}}" class="img-fluid card-img-top">
                <div class="card-body">
                    <h2 class="card-title">{{$brewery->name}}</h2>
                    <p class="card-text text-color3">{{$brewery->description}}</p>
                    <h6 class="text-color">Le nostre birre</h6>
                    <ul>
                        @foreach ($brewery->beers as $beer )
                            <li>{{$beer->name}}</li>
                        @endforeach
                    </ul>
                    <p>Inserita da: {{$brewery->user->name}}</p>
                    <a href="{{route('brewery.index')}}" class="btn btn-color2 rounded-pill">Torna Indietro</a>
                    @if (Auth::id() == $brewery->user->id)
                    <a href="{{route('brewery.edit', compact('brewery'))}}" class="btn btn-color rounded-pill ms-3">Modifica</a>
                    <form method="POST" action="{{route('brewery.beers', compact('brewery'))}}">
                        @csrf
                        <button type="submit" class="btn btn-color rounded-pill mt-3">Aggiungi Birra</button>
                        <select name="beer" class="ms-3 mt-3">
                            @foreach ($beers as $beer)

                            <option value="{{$beer->id}}">{{$beer->name}}</option>
                            @endforeach
                        </select>

                    </form>

                    <form method="POST" action="{{route('brewery.destroy', compact('brewery'))}}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger mt-3">Cancella</button>
                    </form>
                @endif

                </div>
            </div>
        </div>
    </div>








    </div>
</section>





</x-layout>
