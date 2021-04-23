<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Contattaci</h1>
        </div>
        <div class="col-12 col-md-6">
            <form method="POST" action="{{route('contact.submit')}}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nome Utente</label>
                  <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Descrizione</label>
                 <textarea name="message" id="exampleInputPassword1" cols="50" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
              </form>
        </div>
    </div>
</div>

</x-layout>
