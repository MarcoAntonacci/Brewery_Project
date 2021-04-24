<x-layout>

        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
              <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                   <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center text-color fw-bold">Registrati</h5>


                @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
                @endif

                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="text-color">Nome</label>
                        <input type="text" name="name" class="form-control mt-3" id="name"  placeholder="Enter name">
                      </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="mt-2 text-color2">Indirizzo Email</label>
                        <input type="email" name="email" class="form-control mt-3" id="exampleInputEmail1"  placeholder="Enter email">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1" class="mt-2 text-color">Password</label>
                      <input type="password"  name="password" class="form-control mt-3" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="mt-2 text-color2">Conferma Password</label>
                        <input type="password"  name="password_confirmation" class="form-control mt-3" id="password_confirmation" placeholder="Password">
                      </div>
                    <button type="submit" class="btn btn-color rounded-pill mt-4">Submit</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

</x-layout>
