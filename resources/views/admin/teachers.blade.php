<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Teachers</title>
</head>
<body @class(['p-4',])>
  <h1 class="text-center">Teachers</h1>
  <a href="{{route('teachers.create')}}">
    <button type="button" class="btn btn-primary" >Add Teacher</button>
  </a>
  @session('success')
    <div class="alert alert-success" role="alert">
      {{ $value }}
    </div>
  @endsession
  @session('delete-successfully')
    <div class="alert alert-danger" role="alert">
      {{ $value }}
    </div>
  @endsession
  <table class="table table-striped">
    <thead>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Actions</th>
    </thead>
    <tbody>
      @forelse ($teachers as $teacher)
        <tr>
          <td>{{ $teacher->first_name }}</td>
          <td>{{ $teacher->last_name }}</td>
          <td @class([
            'd-flex', 
            'p-2', 
            'gap-3',
            ])>
            <a href="{{route('teachers.show', $teacher)}}">
              <button type="button" class="btn btn-info">Info</button>
            </a>
            <form action="{{route('teachers.destroy', $teacher)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        {{ 'No teachers' }}
      @endforelse
    </tbody>
  </table>
  {{ $teachers->links() }}
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
