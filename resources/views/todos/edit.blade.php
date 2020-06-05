@extends('todos.layouts')

@section('content')
                
                


                
<div class="card-header text-center ">Edit Todo list</div>                

                <div class="card-body">
                <x-alert/>
                <form action="{{ route('todo.update',$todo->id) }}" method="post">
                     @csrf
                     @method('patch')
                     <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control " value="{{$todo->title}}" name="title"  required autocomplete="title" autofocus>
                             </div>
                      </div>          
                      <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit"  value="update" class="btn btn-primary">update</button>
                            </div>       
                      </div>          
                            
                </form>      
                     
                

                   
                </div>
            </div>
            <a href="{{route('todo.index')}}" class=" btn btn-primary my-5 " role="button">back</a>
@endsection


    
    
    
  