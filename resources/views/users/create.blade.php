<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create Users</title>
</head>
<body>
    <div class="container">
        <h2>User Create</h2>
        <form action="/users/create" method="post">
            @csrf
            <div class="form-group">
              <label for="">First Name </label>
              <input type="text" class="form-control" name="firstname" id="" aria-describedby="emailHelp" placeholder="First Name">
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input type="text" class="form-control" name="lastname" id="" placeholder="Last Name">
            </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" class="form-control" name="phone" id="" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <label for="">Date of Birth</label>
                <input type="date" class="form-control" name="date_of_birth" id="" placeholder="Date of birth">
              </div>
              <div class="form-group">
                <label for="">User Name</label>
                <input type="text" class="form-control" name="user_name" id="" placeholder="User Name">
              </div>

              <hr>
             <h1>Your  Profile Information:</h1>
              <div class="form-group">
                <label for="">Profile images </label>
                <input type="text" class="form-control" name="peofile_pic" id="" aria-describedby="emailHelp" placeholder="First Name">
              </div>
              <div class="form-group">
                <label for="">Bio </label>
                <input type="text" class="form-control" name="bio" id="" aria-describedby="emailHelp" placeholder="First Name">
              </div>
              <div class="form-group">
                <label for="">Address </label>
                <input type="text" class="form-control" name="address" id="" aria-describedby="emailHelp" placeholder="First Name">
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
  
    </div>
    

</body>
</html>