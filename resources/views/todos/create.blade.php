@extends('todos.layouts')

@section('content')
                
                


                
<div class="card-header text-center ">What next you need to do?</div>                

                <div class="card-body">
                <x-alert/>
                <form action="{{route('todo.store')}}" method="post">
                     @csrf
                     <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " name="title"  required autocomplete="title" autofocus>
                             </div>
                      </div>          
                      <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit"  value="craete" class="btn btn-primary">create</button>
                                </div>       
                                </div>          
                            
                </form>      
                     
                

                   
                </div>
            </div>
            <a href="{{route('todo.index')}}" class=" btn btn-primary my-5 " role="button">back</a>
@endsection


    
    
    
  