@extends('layout.app')

@section('title')
Product
@endsection

@section('content')
<div class="container ">
    <h1>Aggiungi Prodotto</h1>
    @if (session('success') )
  
    @endif
<form action="{{route('account.store')}}" method="post">
    @method('POST')
    @csrf
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="name" aria-describedby="emailHelp" placeholder="Nome...">
  </div>
  <div class="form-group">
    <label for="cognome">Cognome</label>
    <textarea type="text" class="form-control" id="cognome" name="cognome" placeholder="Cognome"></textarea>
  </div>
  <div class="form-group">
    <label for="price">Indirizzo</label>
    <input type="text" class="form-control" id="indirizzo" name="indirizzo" placeholder="Indirizzo">
  </div>
  <div class="form-group">
    <label for="img">data</label>
    <input type="text" class="form-control" id="data" name="data" placeholder="data">
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

     
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  @if(session('add')) 
        <script>
           Swal.fire({
         
            icon: 'success',
        title: 'Elemento Aggiunto con successo',
        showConfirmButton: false,
        timer: 1500
})
      </script>
  @endif

@endsection