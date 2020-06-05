@extends('todos.layouts')



@section('body')

  
            

            <x-alert/>
               
            <table class="table table-bordered py-5">
            
             <thead class="thead-dark px-5">
             <tr>
                <th>Todo</th>
                <th>Update</th>
                <th>Complete</th>
                <th>Delete</th>


             </tr>
             </thead>
             @foreach($todos as $todo)
               <tr>
                 @if($todo->completed)
                     <td class="text-success">{{$todo->title}}</td>
                 @else
                   <td class="text-danger" > {{$todo->title}}</td>
                 @endif  
                 
             <td class="text-center"> <a href="{{route('todo.edit',$todo->id)}}" class=" btn btn-outline-warning " role="button">update</a></td>
             <td>
             @if($todo->completed)
            
                 <button type="button" class="btn btn-outline-success" onclick="event.preventDefault();document.getElementById('form-incomplete-{{$todo->id}}').submit()">completed</button>
                 <form style="display:none"id="{{'form-incomplete-'.$todo->id}}" method="post" action="{{route('todo.incomplete',$todo->id)}}">
                    @csrf
                    @method('put')
                
                </form>
            @else
                <button type="button" class="btn btn-outline-danger" 
                onclick="event.preventDefault();document.getElementById('form-complete-{{$todo->id}}').submit()">Incomplete</button>
                <form style="display:none"id="{{'form-complete-'.$todo->id}}" method="post" action="{{route('todo.complete',$todo->id)}}">
                    @csrf
                    @method('put')
                
                </form>
               
                                                                          
             @endif
             </td>
             <td>
             <button  type="button" class="btn btn-outline-dark" 
                onclick="event.preventDefault();
                if(confirm('Are you really want to delete?')){
                document.getElementById('form-delete-{{$todo->id}}').submit() }">delete</button>
                <form style="display:none"id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('todo.destroy',$todo->id)}}">
                    @csrf
                    @method('put')
                
                </form>
             
             </td>
             </tr>
             @endforeach
            
             </table> 
             <a href="{{route('todo.create')}}" class=" btn btn-primary my-2 " role="button">create new</a>
            
             
@endsection
                 



            
                           
                
                    
                     





    
    
    
 




