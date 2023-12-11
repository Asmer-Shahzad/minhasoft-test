<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consignments PDF</title>
</head>
<body>
    <h1>Consignments</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Company</th>
                <th>Contact</th>
                <th>Address Line 1</th>
                <th>Address Line 2</th>
                <th>Address Line 3</th>
                <th>City</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach($consignments as $consignment)
                <tr>
                    <td>{{ $consignment->company ? $consignment->company  : ''  }}</td>
                    <td>{{ $consignment->contact ? $consignment->contact : '' }}</td>
                    <td>{{ $consignment->address_line_1 ? $consignment->address_line_1: '' }}</td>
                    <td>{{ $consignment->address_line_2 ?$consignment->address_line_2 : ''}}</td>
                    <td>{{ $consignment->address_line_3 ?$consignment->address_line_3  : ''}}</td>
                    <td>{{ $consignment->city ? $consignment->city : '' }}</td>
                    <td>{{ $consignment->country ?$consignment->country : '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
