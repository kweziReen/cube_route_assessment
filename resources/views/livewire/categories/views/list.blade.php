
<div class="col-lg-8">
    <div class="feature-h">
        <table class="table table-hover ">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Meta Title</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->meta_title }}</td>
                        <td>
                            <a href="{{ url('category/'.$category->id) }}"><i class="bi bi-eye-fill"></i></a>
                            &nbsp;|&nbsp;
                            <a href="#" wire:click.prevent="showForm({{ $category->id }})"><i class="bi bi-pencil-square"></i></a>
                            &nbsp;|&nbsp;
                            <a href="#" wire:click.prevent="deleteCategory({{ $category->id }})"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
  