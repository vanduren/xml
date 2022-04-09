<div class="container bg-silver-100">
    <div>
        {{ $product->name }}
    </div>
    <div>
        <form action={{ route('pdf.download', $product) }}>
            <input type="submit" value="maak pdf">
        </form>
    </div>
</div>
