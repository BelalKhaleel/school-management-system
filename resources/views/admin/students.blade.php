<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Students</title>
</head>
<body>
  <h1 class="text-center">Students</h1>
  <a href="{{route('students.create')}}">
    <button type="button" class="btn btn-primary" >Add Student</button>
  </a>
  <table class="table table-striped">
    <thead>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Father's Name</th>
      <th>Mother's Name</th>
      <th>Phone Number</th>
      <th>Address</th>
      <th>Date of Birth</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Nationality</th>
      <th>Class</th>
    </thead>
    <tbody>
      @forelse ($students as $student)
        <tr>
          <td>{{ $student->first_name }}</td>
          <td>{{ $student->last_name }}</td>
          <td>{{ $student->father_name }}</td>
          <td>{{ $student->mother_name }}</td>
          <td>{{ $student->phone_number }}</td>
          <td>{{ $student->address }}</td>
          <td>{{ $student->date_of_birth }}</td>
          <td>{{ $student->email }}</td>
          <td>{{ $student->gender->gender }}</td>
          <td>{{ $student->nationality->nationality }}</td>
          @isset($student->classroom)
            <td>{{ $student->classroom->room_number }}</td>
          @endisset
        </tr>
      @empty
        {{'No students'}}
      @endforelse
    </tbody>
  </table>
  {{ $students->links() }}
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
