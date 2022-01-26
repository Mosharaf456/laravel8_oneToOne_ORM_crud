
{{--  1st way
<h1>Welcome</h1>

<p> {{ $obj->message }}</p> 

<h4> {{$var}}</h4>
--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- CSS only -->
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

    <title>SHow All Users</title>
</head>
<body>
    <div class="container">

      {{-- Odd id show --}}
      @foreach ($obj->users as $user)    
          @if ( $user->id % 2 != 0)
          <br>
            <td>ODD_ID:{{$user->id}}</td>
            <br>
          @endif
      @endforeach
       {{-- All details --}}
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">User Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach ($obj->users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->date_of_birth->diffForHumans() }}</td>
                    <td>{{$user->user_name}}</td>
                    <td>
                      <a href="/users/{{$user->id}}/show">
                        Show Profile
                      </a>
                    </td>
                </tr>
              @endforeach

              
            </tbody>
          </table>
    </div>
</body>
</html>