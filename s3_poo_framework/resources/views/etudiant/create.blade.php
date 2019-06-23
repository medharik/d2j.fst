@extends('layout')
@section('alert')
    Nouveau Etudiant
@endsection
@section('main')

<form action="{{url('/etudiant')}}" method="post">
@csrf
    <div class="form-group">


        <label>Nom </label>
        <input type="text" name="nom" class="form-control">


</div>
<div class="form-group">



<button class="btn btn-primary" >Valider </button>

</div>

</form>

@endsection
