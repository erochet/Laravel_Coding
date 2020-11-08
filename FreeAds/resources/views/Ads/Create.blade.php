@extends('ads.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Ads</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('ads.index') }}" class="btn btn-primary">Retour</a>
        </div>  
    </div>
</div>

@if ($errors->any())

<div class="alert alert-danger">
<strong>Ooups!</strong> Il y a une erreur sur les informations indiquées.<br><br>
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
</ul>
</div>
@endif

<form action="{{ route('ads.store') }}" method="POST">

@csrf

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>adTitle:</strong>
            <input type="text" name="adTitle" class="form-control" placeholder="Titre">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>adDescription:</strong>
            <input type="text" name="adDescription" class="form-control" placeholder="Déscription">
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