<x-layout>

        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
              <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                   <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center text-color fw-bold">Login</h5>


                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1" class="fs-5 text-color2">Indirizzo Email</label>
                      <input type="email" name="email" class="form-control mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1" class="mt-2 fs-5 text-color">Password</label>
                      <input type="password"  name="password" class="form-control mt-3" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-color rounded-pill mt-4">Submit</button>
                  </form>

                </div>
            </div>
          </div>
        </div>
      </div>


</x-layout>

