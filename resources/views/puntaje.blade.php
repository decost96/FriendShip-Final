@extends('layouts.app')
@section('content')
<div class="container">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="table" >
              <thead class="thead-dark">
                <tr>
                  <th scope="col" style="color:#f6922e" ><h4>Nombre</h4></th>
                  <th scope="col" style="color:#f6922e"><h4>Puntaje</h4></th>
                </tr>
              </thead>
              <tbody>
              @foreach($puntaje as $key =>  $score)
                <tr >
                  <td><h5>  {{$score->nickName}}</h5></td>
                  <td><h5>{{$score->puntaje}}</h5></td>
            </tr>
                @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
@endsection
