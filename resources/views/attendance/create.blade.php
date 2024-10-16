
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Attendance</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Add New Attendance</h1>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Attendance form -->
        <form action="{{ route('attendance.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_number">ID Number</label>
                <input type="text" class="form-control" id="id_number" name="id_number" value="{{ old('id_number') }}" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="present" {{ old('status') == 'present' ? 'selected' : '' }}>Present</option>
                    <option value="absent" {{ old('status') == 'absent' ? 'selected' : '' }}>Absent</option>
                    <option value="on_leave" {{ old('status') == 'on_leave' ? 'selected' : '' }}>On Leave</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Attendance</button>
            <a href="{{ route('attendance.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>
