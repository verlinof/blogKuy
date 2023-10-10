@extends('layouts.main')

@section('root')
    <div class="container-fluid my-5 text-center">
        <div class="row pt-3">
            <h1 class="fw-bold">Blog<span class="kuy">Kuy</span></h1>
        </div>
        <div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                  <div class="card-body p-4 p-sm-5">
                    <h3 class="fw-bold text-center mb-3 fw-light">Login</h3>
                    <form>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Username</label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
                      <div class="d-grid">
                        <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Login</button>
                        <p>Doesn't have an account yet? <a href="/register">Register Now!</a></p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection