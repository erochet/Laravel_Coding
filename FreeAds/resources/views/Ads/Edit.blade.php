@extends('ads.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Ads</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('ads.index') }}">Retour</a>
        </div>
    </div> 
</div>

@if($errors->any())

<div class="alert alert-danger">

<strong>Ooups!</strong>Il y a un problème sur les données rentrées.<br><br>

<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>

</div>
@endif

<form action="{{ route('ads.update',$ad->id) }}" method="POST">
    
    @csrf
    @method('PUT')

    <div class="row">
    
    <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
             <strong>Ads Title:</strong>
             <input type="text" name="adTitle" value="{{$ad->adTitle }}" class="form-control" placeholder="Title">
         </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
             <strong>Ads Description:</strong>
             <input type="text" name="adDescription" value="{{ $ad->adDescription }}" class="form-control" placeholder="Description">
         </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>adDepartement:</strong>
            <input type="text" name="adDepartement" class="form-control" placeholder="Département">
        </div>
    </div>    
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>adPrice:</strong>
            <input type="text" name="adPrice" class="form-control" placeholder="Prix">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div> 
</div>
</form>
@endsection