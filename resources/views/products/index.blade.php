<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
@foreach ($products as $product)
    <a href="{{ route('products.show', $product->id) }}">
        <div class="mx-5">
            <div class="my-3 bg-purple-100">
                {{ $product->name }}
            </div>
        </div>
@endforeach
