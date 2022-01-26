<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Send Mails</title>
</head>
<body>
    <div class="container">

        <h2>Send Mail to user confimation</h2>
                
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="/users/sendmail" method="post">
            @csrf

            <div class="form-group">
              <label for="">Email To </label>
              <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" name="email" value="{{old('email')}}" id=""  placeholder="Receiver Mail">

              @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email')}}</strong>
              </span>
              @endif

            </div>

            <div class="form-group">
              <label for="">Body</label>
              <textarea
                 name="body" class="form-control  {{ $errors->has('body') ? 'is-invalid' : ''}}" 
                   id="" placeholder="Your message"
                   rows="10" cols = "10"> {{old('body')}}</textarea>
   
              @if ($errors->has('body'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('body')}}</strong>
              </span>
              @endif

            </div>

            <button type="submit" class="btn btn-primary">Send</button>
          </form>
  
    </div>
    

</body>
</html>