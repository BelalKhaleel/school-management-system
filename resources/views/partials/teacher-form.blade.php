<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Add Teacher</title>
</head>
<body>
  <h1 class="text-center">Add Teacher</h1>
  <form action="{{route('teachers.store')}}" method="POST" @class([
    'w-25',
    'mx-auto',
  ])>
    @csrf
    <!-- First Name -->
    <div class="mb-3">
      <label for="first_name" class="form-label">First Name</label>
      <input 
        type="text" 
        class="form-control" 
        id="first_name" 
        name="first_name" 
        value="{{ old('first_name') }}">
      @error('first_name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Last Name -->
    <div class="mb-3">
      <label for="last_name" class="form-label">Last Name</label>
      <input 
        type="text" 
        class="form-control" 
        id="last_name" 
        name="last_name" 
        value="{{ old('last_name') }}">
      @error('last_name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Father's Name -->
    <div class="mb-3">
      <label for="father_name" class="form-label">Father's Name</label>
      <input 
        type="text" 
        class="form-control" 
        id="father_name" 
        name="father_name" 
        value="{{ old('father_name') }}">
      @error('father_name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Mother's Name -->
    <div class="mb-3">
      <label for="mother_name" class="form-label">Mother's Name</label>
      <input 
        type="text" 
        class="form-control" 
        id="mother_name" 
        name="mother_name" 
        value="{{ old('mother_name') }}">
      @error('mother_name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Phone Number -->
    <div class="mb-3">
      <label for="phone_number" class="form-label">Phone Number</label>
      <input 
        type="text" 
        class="form-control" 
        id="phone_number" 
        name="phone_number" 
        value="{{ old('phone_number') }}">
      @error('phone_number')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Address -->
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input 
        type="text" 
        class="form-control" 
        id="address" 
        name="address" 
        value="{{ old('address') }}">
      @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Date of Birth -->
    <div class="mb-3">
      <label for="date_of_birth" class="form-label">Date of Birth</label>
      <input 
        type="date" 
        class="form-control" 
        id="date_of_birth" 
        name="date_of_birth" 
        value="{{ old('date_of_birth') }}">
      @error('date_of_birth')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Email -->
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input 
        type="email" 
        class="form-control" 
        id="email" 
        name="email" 
        value="{{ old('email') }}">
      @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Password -->
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input 
        type="password" 
        class="form-control" 
        id="password" 
        name="password">
      @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Gender ID -->
    <div class="mb-3">
      <label for="gender_id" class="form-label">Gender</label>
      <select class="form-select" id="gender_id" name="gender_id">
        <option value="" disabled>Select Gender</option>
        @foreach ($genders as $gender)
          <option value="{{$gender->id}}">{{$gender->gender}}</option>
        @endforeach
      </select>
      @error('gender_id')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Nationality ID -->
    <div class="mb-3">
      <label for="nationality_id" class="form-label">Nationality</label>
      <select class="form-select" id="nationality_id" name="nationality_id">
        <option value="" disabled>Select Nationality</option>
        @foreach ($nationalities as $nationality)
          @if ($nationality->nationality === 'Lebanese')
          <option value="{{$nationality->id}}" selected>{{$nationality->nationality}}</option>
          @endif
          <option value="{{$nationality->id}}">{{$nationality->nationality}}</option>
        @endforeach
      </select>
      @error('nationality_id')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Class(es) ID -->
    <div class="mb-3">
      <label for="classroom_id" class="form-label">Classroom(s)</label>
      <select class="form-select" id="classroom_id" name="classroom_ids[]" multiple>
        <option value="" disabled>Select Classroom(s)</option>
        @foreach ($classrooms as $classroom)
          <option value="{{$classroom->id}}" >{{$classroom->room_number}}</option>
        @endforeach
      </select>
      @error('classroom_id')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Subject(s) ID -->
    <div class="mb-3">
      <label for="subject_id" class="form-label">subject(s)</label>
      <select class="form-select" id="subject_id" name="subject_ids[]" multiple>
        <option value="" disabled>Select Subject(s)</option>
        @foreach ($subjects as $subject)
          <option value="{{$subject->id}}" >{{$subject->subject}}</option>
        @endforeach
      </select>
      @error('subject_id')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>