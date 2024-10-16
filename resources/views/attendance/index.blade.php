<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Records</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Attendance Records</h1>

        <!-- Tombol untuk kembali ke halaman dashboard -->
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
            <a href="{{ route('attendance.create') }}" class="btn btn-primary">Add New Attendance</a>
        </div>

        <!-- Display success or error messages -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Table to list attendance records -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Number</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendances as $attendance)
                    <tr>
                        <td>{{ $attendance->id }}</td>
                        <td>{{ $attendance->id_number }}</td>
                        <!-- Pastikan bahwa $attendance->date adalah objek DateTime atau Carbon -->
                        <td>{{ \Carbon\Carbon::parse($attendance->date)->format('Y-m-d') }}</td>
                        <td>{{ ucfirst($attendance->status) }}</td>
                        <td>
                            <a href="{{ route('attendance.edit', $attendance->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('attendance.destroy', $attendance->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $attendances->links() }} <!-- Pagination links -->
    </div>
</body>
</html>
