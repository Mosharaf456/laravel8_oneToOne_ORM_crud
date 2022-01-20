<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- CSS only -->
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User Profile </title>
</head>
<body>
    <div class="container">
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

                <th scope="col">Profile Pic</th>
                <th scope="col">Bio</th>
                <th scope="col">Address</th>

                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->date_of_birth->diffForHumans() }}</td>
                    <td>{{$user->user_name}}</td>

                    <td>
                        {{$user->profile->peofile_pic}}
                    </td>
                    <td>
                        {{$user->profile->bio}}
                    </td>
                    <td>
                        {{$user->profile->address}}
                    </td>
                    <td>
                        <a href="/users/{{$user->id}}/edit" class="btn btn-success btn-sm">
                          Edit
                        </a>|
                        {{--  --}}
                        <form action="/users/{{$user->id}}/delete" method="POST">
                            {{--cross site request forjery ;;another doesn,t  interfare --}}
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>

                </tr>
            </tbody>
          </table>
    </div>
</body>
</html>