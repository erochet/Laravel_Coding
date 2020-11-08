@extends('ads.layout')

@section('content')

<div class="pull-left">
    <h2>Ads Crud</h2>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-sucess" href="{{ route('ads.create') }}">Create New Ads</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-sucess">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Departement</th>
        <th>Price</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($ads as $ad)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $ad->adid</td>
        <td>{{ $ad->adTitle</td>
        <td>{{ $ad->adDescription</td>
        <td>{{ $ad->adDepartement</td>
        <td>{{ $ad->adPrice</td>
            <td>
                <form action="{{ route('ads.destroy' ,$ad->id }}" method="POST">
                    <a class="btn btn-info" href="{{ route('ads.show' ,$ad->id) }}">Show Ads</a>
                    <a class="btn btn-primary" href="{{ route('ads.edit' ,$ad->id) }}">Edit Ads</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Suprrimer</button>
                
                </form>
            </td>
    </tr>
    @endforeach
        </table>