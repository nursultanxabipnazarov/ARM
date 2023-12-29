<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>

<h1>Students List</h1>

<table id="studentsTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Gender</th>
            <th>Birth Date</th>
            <th>Student ID Number</th>
            <th>Image</th>
            <th>Department</th>
            <th>Specialty</th>
            <th>Group</th>
            <th>Level</th>
            <th>Semester</th>
            <th>Education Year</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students['data']['items'] as $student)
            <tr>
                <td>{{ $student['id'] }}</td>
                <td>{{ $student['full_name'] }}</td>
                <td>{{ $student['gender']['name'] }}</td>
                <td>{{ date('Y-m-d', $student['birth_date']) }}</td>
                <td>{{ $student['student_id_number'] }}</td>
                <td><img src="{{ $student['image'] }}" alt="Student Image"></td>
                <td>{{ $student['department']['name'] }}</td>
                <td>{{ $student['specialty']['name'] }}</td>
                <td>{{ $student['group']['name'] }}</td>
                <td>{{ $student['level']['name'] }}</td>
                <td>{{ $student['semester']['name'] }}</td>
                <td>{{ $student['educationYear']['name'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
