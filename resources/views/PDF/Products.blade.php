<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        img {
            max-width: 100px;
            /* Limit the logo's width */
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .company-info {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="header">
        {{-- To Display Logo Image --}}
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/images/logo.png'))) }}">
        <h1>Product List</h1>
    </div>

    <div class="company-info">
        <p><strong>Company Name:</strong> Stack Tips</p>
        <p><strong>Address:</strong> 123 Company St, City, Country</p>
        <p><strong>Phone:</strong> +123456789</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Buying Price</th>
                <th>Selling Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->buyingPrice }}</td>
                    <td>{{ $product->sellingPrice }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
