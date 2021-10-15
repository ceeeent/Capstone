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
                   
                    <th scope ="col">speaker_name</th>
                    <th scope ="col">profession</th>
                    <th scope ="col">company</th>
                    <th scope ="col">position</th>
                    <th scope ="col">image_url</th>
                    <th scope ="col">Action </th>
                    
                </tr>

                
                    @foreach ( $speaker as $speakers)
                    <tr>

                  
                    <td>{{$speakers->speaker_name}}</td>
                    <td>{{$speakers->profession}}</td>
                    <td>{{$speakers->company}}</td>
                    <td>{{$speakers->position}}></td>
                    <td>{{$speakers->image_url}}</td>
                   
                   
                    
                    <td>
                       <a href = "{{route('Speaker.edit',$speakers->id)}}">
                       <button type = "button" class="btn btn-primary btn-sm">Edit</button>
                       </a>

                       <form action="{{route('Speaker.destroy', $speakers->id)}}" method="post">
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
