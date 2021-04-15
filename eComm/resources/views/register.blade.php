@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4" >
            <form action="register" method ="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Korisnicko ime</label>
                    <input type="text" name ="name"class="form-control" id="exampleInputEmail1" placeholder="Korisnicko ime">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" name ="email"class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Lozinka</label>
                    <input type="password" name = "password"class="form-control" id="exampleInputPassword1" placeholder="Lozinka">
                </div>
                <br>
                <button type="submit" class="btn btn-default">Registruj se</button>
            </form>
        </div>
    </div>
</div>
@endsection