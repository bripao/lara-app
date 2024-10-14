<x-layout>
    <h1>New Product</h1>
<!-- 
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif -->
<x-errors />
    <form method="POST" action="{{ route('products.store') }}">
        
        <x-products.form />

    </form>
</x-layout>