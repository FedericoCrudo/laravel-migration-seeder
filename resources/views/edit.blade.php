@extends('layout.app')

@section('title')
Product
@endsection

@section('content')
<div class="container ">
    <h1>Aggiungi Prodotto</h1>
<form action="{{route('account.update',$edit->id)}}" method="post">
    @method('PUT')
    @csrf
  <div class="form-group">
    <label for="nome" >Nome</label>
    <input type="text" class="form-control" value="{{$edit->name}}" id="nome" name="name" aria-describedby="emailHelp" placeholder="Nome...">
  </div>
  <div class="form-group">
    <label for="nome" >Cognome</label>
    <input type="text" class="form-control" value="{{$edit->cognome}}" id="cognome" name="cognome" aria-describedby="emailHelp" placeholder="Cognome...">
  </div>
 
  <div class="form-group">
    <label for="price">Indirizzo</label>
    <input type="text" class="form-control" value="{{$edit->indirizzo}}" id="indirizzo" name="indirizzo" placeholder="Indirizzo">
  </div>
  <div class="form-group">
    <label for="img">Data</label>
    <input type="text" class="form-control" value="{{$edit->data}}" id="data" name="data" placeholder="data">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

     
@endsection
