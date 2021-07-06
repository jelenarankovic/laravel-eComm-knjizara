@extends('master')
@section("content")

<style>
    body{
        background:url("https://images.unsplash.com/photo-1516979187457-637abb4f9353?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MzF8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80");
        background-repeat: no-repeat;
        background-size: 1600px 700px;
    }
</style>
<body>
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
</body>

@endsection
