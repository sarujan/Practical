<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sales Representative</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="table-list">
        <a href="{{url('/add')}}">
            <button class="btn btn-add">Add New</button>
        </a>
    </div>
    <div class="table-list">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Telephone</th>
          <th>Current Route</th>
          <th>View</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>

      <tbody>
        @foreach($representativeList as $representative)
        <tr>
          <td>{{$representative->id}}</td>
          <td>{{$representative->name}}</td>
          <td>{{$representative->email}}</td>
          <td>{{$representative->telephone}}</td>
          <td>{{$representative->current_route}}</td>
          <td>
              <a href="{{url('/view/'.$representative->id)}}">
                  <button class="btn btn-view">View</button>
              </a>
            </td>
            <td>
              <a href="{{url('/edit/'.$representative->id)}}">
                  <button class="btn btn-edit">Edit</button>
              </a>
            </td>
            <td>
              <a href="{{url('/delete/'.$representative->id)}}">
                <button class="btn btn-delete">Delete</button>
              </a>
            </td>
        </tr>
        @endforeach
        
      </tbody>      
    </table>
</div>
  </body>
</html>
