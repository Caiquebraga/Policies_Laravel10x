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
    @can('isAdmin', 'App/Models/Invoice')
    <a href="">Create Invoice</a>
    @endcan
    <ul>
        @foreach ($invoices as $invoice)
       
        <li>
            {{ $invoice->user->firstName }} - $ {{ number_format($invoice->value, 2, ',', '.') }}
            @can('edit', $invoice)
            <a href="">Edit</a>
            @endcan

            @can('delete', $invoice)
            <a href="">Edit</a>
            @endcan
        </li>
        
        @endforeach

    </ul>
</body>

</html>
