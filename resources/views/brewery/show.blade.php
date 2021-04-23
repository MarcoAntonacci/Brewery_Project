<x-layout>

<section class="container">
    <div class="row">
        <div class="col-12 col-md-4 offset-md-4">
            <h2>{{$brewery->name}}</h2>
        </div>
        <div class="col-12 col-md-4">
            <p>{{$brewery->description}}</p>
        </div>
        <div class="col-12 col-md-4">
            <img src="{{Storage::url($brewery->img)}}" alt="{{$brewery->name}}" class="img-fluid">
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <p>Inserita da: {{$brewery->user->name}}</p>
        </div>
        <h6>Le nostre birre</h6>
        <ul>
            @foreach ($brewery->beers as $beer )
                <li>{{$beer->name}}</li>
            @endforeach
        </ul>
        <div class="col-12 col-md-4">
            <a href="{{route('brewery.index')}}" class="btn btn-primary">Torna Indietro</a>
        </div>
        @if (Auth::id() == $brewery->user->id)
        <a href="{{route('brewery.edit', compact('brewery'))}}" class="btn btn-primary">Modifica</a>
            <div class="col-12 col-md-4">
                <form method="POST" action="{{route('brewery.beers', compact('brewery'))}}">
                @csrf
                <select name="beer">
                    @foreach ($beers as $beer)

                    <option value="{{$beer->id}}">{{$beer->name}}</option>
                    @endforeach
                </select>
               <button type="submit">Aggiungi Birra</button>
            </form>
            </div>
            <form method="POST" action="{{route('brewery.destroy', compact('brewery'))}}">
                @csrf
                @method('delete')
                <button class="btn btn-primary mt-1">Cancella</button>
            </form>
        @endif
    </div>
</section>





</x-layout>
