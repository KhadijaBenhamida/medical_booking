<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DOCTORS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Doctor Name</th>
                <th>Speciality</th>
                <th>Country</th>
                <th>City</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
            <tr>
                <td>{{ $doctor['Doctor Name'] }}</td>
                <td>{{ $doctor['Speciality'] }}</td>
                <td>{{ $doctor['Country'] }}</td>
                <td>{{ $doctor['City'] }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>