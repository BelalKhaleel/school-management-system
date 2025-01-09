<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Teacher</title>
</head>
<body>
  <h1 class="text-center">Teacher Info</h1>
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
      <th>Class(es)</th>
      <th>Subject(s)</th>
    </thead>
    <tbody>
      <tr>
        <td>{{ $teacher->first_name }}</td>
        <td>{{ $teacher->last_name }}</td>
        <td>{{ $teacher->father_name }}</td>
        <td>{{ $teacher->mother_name }}</td>
        <td>{{ $teacher->phone_number }}</td>
        <td>{{ $teacher->address }}</td>
        <td>{{ $teacher->date_of_birth }}</td>
        <td>{{ $teacher->email }}</td>
        <td>{{ $teacher->gender->gender }}</td>
        <td>{{ $teacher->nationality->nationality }}</td>
        <td>{{ !empty($classes) ? implode(", ", $classes) : 'not assigned yet' }}</td>
        <td>{{ !empty($subjects) ? implode(", ", $subjects) : 'not assigned yet' }}</td>        
      </tr>
    </tbody>
  </table> 
  <a href="{{route('teachers.index')}}">Back to teachers</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
