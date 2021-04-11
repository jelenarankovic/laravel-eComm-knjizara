@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4" >
            <form action="login" method ="POST">
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" name ="email"class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Lozinka</label>
                    <input type="password" name = "password"class="form-control" id="exampleInputPassword1" placeholder="Lozinka">
                </div>
                <br>
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
