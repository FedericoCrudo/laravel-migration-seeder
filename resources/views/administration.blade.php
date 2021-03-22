@extends('layout.app')

@section('title')
Administration
@endsection

@section('content')
 

        

    <div class="adds">
        <button type="button" class="btn btn-success"> <a class="text-white text-decoration-none"  href="{{route('account.create')}}">Aggiungi prodotto</a></button>
        
    </div>
    <div class="container">
        <table class="table">
    <thead>
        <tr>
        <th scope="col">#ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Cognome</th>
        <th scope="col">Indirizzo</th>
        <th scope="col">Data</th>
        <th scope="col">Operazioni</th>
        </tr>
    </thead>
    <tbody>
    @foreach($user as $items)
        <tr>
        <th scope="row">{{$items->id}}</th>
        <td>{{$items->name}}</td>
        <td>{{$items->cognome}}</td>
        <td>{{$items->indirizzo}}</td>
        <td>{{$items->data}}</td>
        <td>
            <button class="btn btn-info"><a class="text-white text-decoration-none"href=" {{route('account.show',['account'=>$items->id])}}">Info</a></button>
            <button type="button" class="btn btn-warning"><a class="text-white text-decoration-none"href=" {{route('account.edit',['account'=>$items->id])}}">Edit</a></button>
            <form action="{{route('account.destroy', $items->id)}}" class="d-inline-block" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><a class="text-white text-decoration-none">Delete</a></button>       

            </form>
        </td>
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>

  
     
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  @if(session('delete')) 
        <script>
           Swal.fire({
         
            icon: 'success',
        title: 'Elemento eliminato con successo',
        showConfirmButton: false,
        timer: 1500
})
      </script>
  @endif

@endsection