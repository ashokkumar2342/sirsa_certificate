<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="{{url('address')}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="email">Name</label>
      <input type="text" class="form-control"  placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="text">Father</label>
      <input type="text" class="form-control" placeholder="Enter Father" name="father">
    </div>
    <div class="form-group">
      <label for="email">Mobile</label>
      <input type="number" class="form-control" id="email" placeholder="Enter Mobile" name="mobile">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
