<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Policies</title>
</head>

<body>
    <h2>Invoices</h2>
    <form action="{{ route('invoice.store') }}" method="post">
     @csrf
     <button type="submit">Create Invoice</button>
    </form>
</body>

</html>
