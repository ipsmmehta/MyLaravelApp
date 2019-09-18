@extends('layout.app')
@section('SlideBar')
    @include('layout.slides')<hr>
@endsection
@section('leftSideBar')
    <div class="card" style="width:100%;">
            <div class="card-header" >
            Featured
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
@endsection
@section('content')
    <div class="jumbotron">
        <h1> This Is Lalit Laravel App</h1>
        <p> As you may aware that Mr. Lalit is an ITRA employee </p>
    </div>
@endsection