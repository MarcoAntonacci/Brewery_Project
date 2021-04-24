<x-layout>

    <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
              <div class="card-img-left d-none d-md-flex">
                 <!-- Background image for card set in CSS! -->
              </div>
              <div class="card-body">
                <h5 class="card-title text-center text-color fw-bold">Modifica</h5>
                    <form method="POST" action="{{route('brewery.update', compact('brewery'))}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome Birreria:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$brewery->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Indirizzo Email:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$brewery->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Descrizione:</label>
                            <textarea name="description" class="form-control" cols="50" rows="10">value="{{$brewery->description}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Indirizzo Birreria:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="address" value="{{$brewery->address}}">
                        </div>
                        <div class="mb-3 mt-5">
                            <label for="image" class="form-label">Immagine</label>
                            <input type="file"  name="img" class="form-control" id="image">
                        </div>
                        <button type="submit" class="btn btn-color rounded-pill">Modifica</button>

                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
</x-layout>
