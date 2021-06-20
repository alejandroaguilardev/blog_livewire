<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Buscar..." >   
    </div>
    @if($posts->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td width="10px">
                            <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-sm btn-primary text-white">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.posts.destroy', $post)}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $posts->links() }}
    </div>
    @else
    <div class="card-body">
        <strong> No hay ningún registro</strong>
    </div>
    @endif
</div>
