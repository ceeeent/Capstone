@extends ('layouts.adminlayout')




@section('cont')

        <br>
    <h1><center> USERS DATA</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

            
                            <br><br>
                <table class="table table-bordered table-striped">
                <tr>
                   
                    <th scope ="col">title</th>
                    <th scope ="col">description</th>
                    <th scope ="col">admission</th>
                    <th scope ="col">date</th>
                    <th scope ="col">venue</th>
                    <th scope ="col">image_url</th>
                    <th scope ="col">Action </th>
                    
                </tr>

                
                    @foreach ( $trainings as $training)
                    <tr>

                  
                    <td>{{$training->title}}</td>
                    <td>{{$training->description}}</td>
                    <td>{{$training->admission}}</td>
                    <td>{{$training->date}}></td>
                    <td>{{$training->venue}}></td>
                    <td>{{$training->image_url}}</td>
                   
                   
                    
                    <td>
                       <a href = "{{route('Trainings.edit',$training->id)}}">
                       <button type = "button" class="btn btn-primary btn-sm">Edit</button>
                       </a>

                       <form action="{{route('Trainings.destroy', $training->id)}}" method="post">
                        @csrf
                        @method('Delete')

                        <button type = "submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </tr>
                    </td>

                    
                    @endforeach
                    </table>
                    
                  
           </div>
        </div>
    </div>
 </div>

 
@endsection
