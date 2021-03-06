@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Cena</td>
                <td>{{ $total }} din.</td>
              </tr>
              <tr>
                <td>Postarina</td>
                <td>250 din.</td>
              </tr>
              <tr>
                <td>Ukupna cena</td>
                <td>{{ $total+ 250}} din.</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Unesite svoju adresu"class="form-control" id="email"></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Nacin placanja</label><br>
                  <input type="radio" value="card" name="payment">Placanje platnom karticom<span></span><br><br>
                  <input type="radio" value="cash" name="payment">Placanje po uzecu<span></span> <br><br>
                  <input type="radio" value="paper" name="payment">Placanje uplatnicom<span></span><br><br>
                </div>
                <button type="submit" class="btn btn-default">Poruci sad</button>
              </form>
          </div>
    </div>
</div>
@endsection