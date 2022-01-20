<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Users</title>
</head>
<body>
    {{--  {{$user->id}}  {{$user->lastname}} {{$user->email}} {{$user->phone}}
                    {{$user->date_of_birth->diffForHumans() }} {{$user->user_name}} {{$user->profile->peofile_pic}} 
                    {{$user->profile->address}} --}}
    <div class="container">
        <h2>User Create</h2>
        <form action="/users/{{$user->id}}/edit" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
              <label for="">First Name </label>
              <input type="text" class="form-control" name="firstname" id="" value=" {{$user->firstname}} " placeholder="First Name">
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input type="text" class="form-control" name="lastname" value=" {{$user->lastname}} "  id="" placeholder="Last Name">
            </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" value=" {{$user->email}} "  id="" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" class="form-control" name="phone" value=" {{$user->phone}} "  id="" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <label for="">Date of Birth</label>
                <input type="text" class="form-control" name="date_of_birth" value=" {{$user->date_of_birth}} "  id="" placeholder="Date of birth">
              </div>
              <div class="form-group">
                <label for="">User Name</label>
                <input type="text" class="form-control" name="user_name" value=" {{$user->user_name}} "  id="" placeholder="User Name">
              </div>

              <hr>
             <h1>Your  Profile Information:</h1>
              <div class="form-group">
                <label for="">Profile images </label>
                <input type="text" class="form-control" name="peofile_pic" value=" {{$user->profile->peofile_pic}}  "  id="" aria-describedby="emailHelp" placeholder="Profile Images">
              </div>
              <div class="form-group">
                <label for="">Bio </label>
                <input type="text" class="form-control" name="bio" value="  {{$user->profile->bio}} "  id="" aria-describedby="emailHelp" placeholder="Bio">
              </div>
              <div class="form-group">
                <label for="">Address </label>
                <input type="text" class="form-control" name="address" value="  {{$user->profile->address}} "  id="" aria-describedby="emailHelp" placeholder="Address">
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
  
    </div>
    

</body>
</html>