<x-layout>
    <h1>New Product</h1>

<x-error />
    <form method="POST" action="{{ route('products.store') }}">
        
        <x-products.form />

    </form>
</x-layout>
