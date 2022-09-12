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
    <!-- <div class="clearfix">
      <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
      <ul class="pagination">
        <li class="page-item disabled"><a href="#">Previous</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item active"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
      </ul>
    </div> -->
  </div>
</div>
