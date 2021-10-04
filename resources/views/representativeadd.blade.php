<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sales Representative</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/representative-add.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="representative-add">
      <h3>Add Representative</h3>

      <div class="container">
        @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif

        <form method="get" action="/create">
          <label for="id">ID</label>
          <input type="number" id="id" name="id" placeholder="ID">

          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" placeholder="Your Full Name">
          
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Your Email">
          
          <label for="telephone">Telephone</label>
          <input type="text" id="telephone" name="telephone" placeholder="Your Telephone">
          
          <label for="created_at">Joined Date</label>
          <input type="text" id="created_at" name="created_at" placeholder="Your Joined Date">
          
          <label for="current_route">Current Route</label>
          <select id="current_route" name="current_route">
            <option value="Colombo">Colombo</option>
            <option value="Jaffna">Jaffna</option>
            <option value="Kandy">Kandy</option>
          </select>

          <label for="comments">Comments</label>
          <textarea id="comments" name="comments" placeholder="Write something.." style="height:200px"></textarea>

          <input type="submit" value="Submit">
        </form>
      </div>

    <div>
  </body>
</html>
