@extends ('layouts.adminlayout')




@section('cont')
<div class="speaker">
          <label><b> Speaker </b></label>
          <select type="text" class= "form-control" name = "speaker_id" id = "speaker_id"  required> 

          <option value="/admin/Speaker">speaker</option>
          
         

          </select> 
        </div>
  
        <br>
    <h1><center> USERS DATA</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

            
                            <br><br>
                <table class="table table-bordered table-striped">
                <tr>
                   
                    <th width="10%">username</th>
                    <th width="10%">email</th>
                    <th width="10%">firstname</th>
                    <th width="10%">Lastname</th>
                    <th width="10%">country</th>
                    <th width="10%">company</th>
                    <th width="10%">Action</th>
                </tr>

                
                    @foreach ( $users as $user)
                    <tr>

                  
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->company}}</td>
                    <td>{{$user->country}}</td>
                   
                   
                    <td>
                       <a href = "{{route('users.edit',$user->id)}}">
                       <button type = "button" class="btn btn-primary btn-sm">Edit</button>
                       </a>

                       <form action="{{route('users.destroy', $user->id)}}" method="post">
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
