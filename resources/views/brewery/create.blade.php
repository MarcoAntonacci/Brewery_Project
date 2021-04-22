<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Inserisci la tua birreria</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 offset-md-4">
                <form method="POST" action="{{route('brewery.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome Birreria:</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo Email:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Descrizione:</label>
                        <textarea name="description" class="form-control" cols="50" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo Birreria:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="address">
                    </div>
                    <div class="mb-3 mt-5">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file"  name="img" class="form-control" id="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>



</x-layout>
