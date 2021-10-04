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
      <h3>Edit Representative</h3>

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

        <form method="get" action="/submit/{{$representative[0]->id}}">
          <label for="id">ID</label>
          
          <input value="{{$representative[0]->id}}" type="number" id="id" name="id" placeholder="ID">

          <label for="name">Full Name</label>
          <input value="{{$representative[0]->name}}" type="text" id="name" name="name" placeholder="Your Full Name">
          
          <label for="email">Email</label>
          <input value="{{$representative[0]->email}}" type="email" id="email" name="email" placeholder="Your Email">
          
          <label for="telephone">Telephone</label>
          <input value="{{$representative[0]->telephone}}" type="text" id="telephone" name="telephone" placeholder="Your Telephone">
          
          <label for="created_at">Joined Date</label>
          <input value="{{$representative[0]->created_at}}" type="text" id="created_at" name="created_at" placeholder="Your Joined Date">
          
          <label for="current_route">Current Route</label>
          <select  value="{{$representative[0]->current_route}}" id="current_route" name="current_route">
            <option value="Colombo">Colombo</option>
            <option value="Jaffna">Jaffna</option>
            <option value="Kandy">Kandy</option>
          </select>

          <label for="comments">Comments</label>
          {{$representative[0]->comments}}
          <textarea id="comments" name="comments" placeholder="Write something.." style="height:200px">{{$representative[0]->comments}}</textarea>

          <input type="submit" value="Submit">
        </form>
      </div>

    <div>
  </body>
</html>
