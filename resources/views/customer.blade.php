<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Customer List</title>
</head>
<body>
    <h1>All Customer List Here</h1>
    <table>
        <th>
            <td>Serial</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Email</td>
        </th>
        @foreach ($all_customer as $customer)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->email }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
