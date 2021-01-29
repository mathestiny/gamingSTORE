@extends('layouts.app')

@section('Title')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
                <h4>Mon Profil</h4>
                <hr>
                <form action="">
                    
                        <div class="form-group">
                            <label for="">Prenom</label> 
                            <input type="text" class="form-control" value="{{ Auth::user()->name }}">
                        </div>   
                    
                    
                        <div class="form-group">
                            <label for="">Nom</label> 
                            <input type="text" class="form-control" value="{{ Auth::user()->nom }}">
                           
                   
                   
                        <div class="form-group">
                            <label for="">Date</label> 
                            <input type="text" class="form-control" value="{{ Auth::user()->date }}">
                          
                    
                    
                        <div class="form-group">
                            <label for="">Solde</label> 
                            <input type="text" class="form-control" value="{{ Auth::user()->solde }}">
                         
                   
                    
                        <div class="form-group">
                            <label for="">Email</label> 
                            <input type="text" class="form-control" readonly value="{{ Auth::user()->email }}">
                            <button type="submit" class="btn btn-primary">Mettre à jour le profil</button>
                        </div>   
                    </div>
                  
                </form>
            </div>
          </div>
        </div>
    </div>
</section>


@endsection
