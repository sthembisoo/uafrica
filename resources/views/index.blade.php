@extends('layout')
@section('content')
<br>
<div class="container">
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
          <h2>Stock  <b>ticker</b></h2>
        </div>
        <div class="col-sm-6">
          <a href="/refresh" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Refresh</span></a>
        </div>
      </div>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr class="table-info">
        <th>{{$stock[0][0]}}</th>
          <th>{{$stock[0][1]}}</th>
          <th>{{$stock[0][2]}}</th>
        </tr>
      </thead>
      <tbody>
      @for ($i = 1; $i < count($stock); $i++)
        <tr>
            <td>{{$stock[$i][0]}}</td>
            <td>{{$stock[$i][1]}}</td>
            <td>{{$stock[$i][2]}}</td>
        </tr>
        @endfor
      </tbody>
    </table>
  </div>
</div>
