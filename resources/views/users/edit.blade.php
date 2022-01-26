{{--  --}}

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
    <div class="container">

        <h2>Edit Users</h2>
                
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="/users/{{$user->id}}/edit" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
              <label for="">First Name </label>
              <input type="text" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : ''}}" value=" {{$user->firstname}} " name="firstname" id=""  placeholder="First Name">
              @if ($errors->has('firstname'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('firstname')}}</strong>
              </span>
              @endif
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input type="text" name="lastname" class="form-control  {{ $errors->has('lastname') ? 'is-invalid' : ''}}" value=" {{$user->lastname}} "  id="" placeholder="Last Name">
   
              @if ($errors->has('lastname'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('lastname')}}</strong>
              </span>
              @endif

            </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control  {{ $errors->has('email') ? 'is-invalid' : ''}}" value=" {{$user->email}} "  name="email" id="" placeholder="Email">
                @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email')}}</strong>
              </span>
              @endif
              </div>
              <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" class="form-control  {{ $errors->has('phone') ? 'is-invalid' : ''}}" value=" {{$user->phone}} " name="phone" id="" placeholder="Phone Number">
                @if ($errors->has('phone'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('phone')}}</strong>
              </span>
              @endif
              </div>

              <div class="form-group">
                <label for="">Date of Birth</label>
                {{-- date-date-format="DD MMMM YYYY" --}}
                <input type="text" class="form-control  {{ $errors->has('date_of_birth') ? 'is-invalid' : ''}}" value=" {{$user->date_of_birth}} " name="date_of_birth" id=""  placeholder="dd/mm/yyyy">
                @if ($errors->has('date_of_birth'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('date_of_birth')}}</strong>
                </span>
                @endif
              </div>
              <div class="form-group">
                <label for="">User Name</label>
                <input type="text" class="form-control  {{ $errors->has('user_name') ? 'is-invalid' : ''}}" value=" {{$user->user_name}} " name="user_name" id="" placeholder="User Name">
                @if ($errors->has('user_name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('user_name')}}</strong>
                </span>
                @endif
              </div>

      
            <div class="form-group">
              <label for="">Pasword</label>
              <input type="password" class="form-control  {{ $errors->has('password') ? 'is-invalid' : ''}}" value=" {{$user->password}} " name="password" id="" placeholder="User Name">
              @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password')}}</strong>
              </span>
              @endif
            </div>
         
          <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" class="form-control  {{ $errors->has('password_confirmation') ? 'is-invalid' : ''}}" value="{{old('password_confirmation')}}" name="password_confirmation" id="" placeholder="User Name">
            @if ($errors->has('password_confirmation'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password_confirmation')}}</strong>
            </span>
            @endif
          </div>

              <hr>

             <h1>Your  Profile Information:</h1>
              <div class="form-group">
                <label for="">Profile images </label>
                <input type="text" class="form-control" value="{{$user->profile->peofile_pic}} " name="peofile_pic" id=""  placeholder="Profile Pic">
              </div>
              <div class="form-group">
                <label for="">Bio </label>
                <input type="text" class="form-control" value="{{$user->profile->bio}}" name="bio" id=""  placeholder="Bio">
              </div>
              <div class="form-group">
                <label for="">Address </label>
                <input type="text" class="form-control" value="{{$user->profile->address}}" name="address" id=""  placeholder="Address">
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
  
    </div>
    

</body>
</html>