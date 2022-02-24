<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> </head>
<body>



    <form action="/users" method="POST">
        @csrf

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"  >

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">password</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">

  </div>

  <button type="submit"   class="btn btn-primary"> Add </button>
</form>
</body>
</html>
