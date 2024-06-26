<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.3/dist/bootstrap-table.min.css">
</head>

<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.22.3/dist/bootstrap-table.min.js"></script>
<body>
<div style="margin: 30px;">
    <h2>Detail contact</h2>
    <button class="btn btn-success"><a style="text-decoration: none; color: white" href="{{route('list')}}">Back</a></button>
    <table class="table table-bordered" style="margin: 10px;">
        <tr>
            <td>ID</td>
            <td>First name</td>
            <td>Last name</td>
            <td>Phone number</td>
            <td>Email</td>
            <td>Address</td>
        </tr>
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->first_name }}</td>
                <td>{{ $contact->last_name }}</td>
                <td>{{ $contact->phone_number }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->address }}</td>
            </tr>
    </table>
</div>
</body>
</html>