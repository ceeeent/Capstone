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
                   
                    <th scope ="col">name</th>
                    <th scope ="col">description</th>
                    <th scope ="col">youtube_url</th>
                    <th scope ="col">image_url</th>
                    <th scope ="col">pdf_url</th>
                    <th scope ="col">Action  </th>
                    
                </tr>

                
                    @foreach ( $Trainnow as $trainnows)
                    <tr>

                  
                    <td>{{$trainnows->name}}</td>
                    <td>{{$trainnows->description}}</td>
                    <td>{{$trainnows->youtube_url}}</td>
                    <td>{{$trainnows->image_url}}></td>
                    <td>{{$trainnows->pdf_url}}</td>
                   
                   
     
                    <td>
                       <a href = "{{route('Trainnow.edit',$trainnows->id)}}">
                       <button type = "button" class="btn btn-primary btn-sm">Edit</button>
                       </a>

                       <form action="{{route('Trainnow.destroy', $trainnows->id)}}" method="post">
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
