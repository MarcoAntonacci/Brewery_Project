<x-layout>
    <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
              <div class="card-img-left d-none d-md-flex">
                 <!-- Background image for card set in CSS! -->
              </div>
              <div class="card-body">
                <h5 class="card-title text-center text-color fw-bold">Contattaci</h5>

                    <form method="POST" action="{{route('contact.submit')}}">
                        @csrf
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-color">Nome Utente</label>
                        <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-color2">Indirizzo Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-color">Descrizione</label>
                        <textarea name="message" id="exampleInputPassword1" class="form-control" cols="50" rows="10"></textarea>
                        </div>

                        <button type="submit" class="btn btn-color rounded-pill">Invia</button>
                    </form>

                </div>
            </div>
          </div>
        </div>
      </div>

</x-layout>
