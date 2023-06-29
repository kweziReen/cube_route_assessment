
<div class="col-lg-12">
    <div class="feature-h">
        <table class="table table-hover ">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->slug }}</td>
                        <td>
                            <a href="{{ url('product/'.$product->id) }}"><i class="bi bi-eye-fill"></i></a>
                            &nbsp;|&nbsp;
                            <a href="#" wire:click.prevent="showForm({{ $product->id }})"><i class="bi bi-pencil-square"></i></a>
                            &nbsp;|&nbsp;
                            <a href="#" wire:click.prevent="deleteProduct({{ $product->id }})"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
     {{ $products->links('pagination.bootstrap') }}
</div>
  