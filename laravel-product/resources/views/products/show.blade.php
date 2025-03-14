<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Product Details</title>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen p-4">

    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-lg">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Product Details</h1>

        <div class="card border-0 shadow-md">
            <div class="card-body">
                <h5 class="card-title text-xl font-bold text-gray-900">{{ $product->name }}</h5>
                <p class="card-text text-gray-700 mt-2">{{ $product->description }}</p>
                <p class="card-text text-gray-800 mt-2"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                <p class="card-text text-gray-800"><strong>Stock:</strong> {{ number_format($product->stock) }}</p>
            </div>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-primary w-full mt-4 py-2 text-lg rounded-lg shadow-md hover:bg-blue-600 transition">Back to List</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
