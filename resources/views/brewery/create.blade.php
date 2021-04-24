<x-layout>


        <div class="container">
            <div class="row">
               <div class="col-lg-10 col-xl-9 mx-auto">
                  <div class="card card-signin flex-row my-5">
                        <div class="card-img-left d-none d-md-flex">
                             <!-- Background image for card set in CSS! -->
                        </div>
                        <div class="card-body">
                        <h1 class="text-color my-5 fs-1">Inserisci la <span class="text-color2">tua birreria</span></h1>
                        <form method="POST" action="{{route('brewery.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-color fs-5">Nome Birreria:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label text-color2 fs-5">Indirizzo Email:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label text-color fs-5">Descrizione:</label>
                                <textarea name="description" class="form-control" cols="50" rows="10"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label text-color2 fs-5">Indirizzo Birreria:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="address">
                            </div>
                            <div class="mb-3 mt-5">
                                <label for="image" class="form-label text-color fs-5">Immagine</label>
                                <input type="file"  name="img" class="form-control" id="image">
                            </div>
                            <button type="submit" class="btn btn-color rounded-pill mb-5">Submit</button>
                        </form>
                </div>
            </div>
          </div>
        </div>
      </div>


</x-layout>
