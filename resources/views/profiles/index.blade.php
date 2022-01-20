<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- CSS only -->
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>SHow All Profiles</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Profile Pic</th>
                <th scope="col">Bio</th>
                <th scope="col">Address</th>
                <th scope="col">Profile Owner</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
             
            @foreach ($profiles as $profile)
                <tr>
                    <td>{{$profile->id}}</td>
                    <td>{{$profile->peofile_pic}}</td>
                    <td>{{$profile->bio}}</td>
                    <td>{{$profile->address}}</td>
                    {{-- 1st way as laravel convention --}}
                    {{-- <td>{{$profile->owner->user_name}}</td> --}}
                    <td>{{$profile->user->user_name}}</td>
                </tr>
              @endforeach
              
            </tbody>
          </table>
    </div>
</body>
</html>