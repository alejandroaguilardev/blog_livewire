<div>
    <div class="card">
        <div class="card-header">
            <input wire:model='search' class="form-control" type="search" name="search" placeholder="Buscar Usuario"  />
        </div>
        @if($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td width="10px">
                                <a class="btn btn-primary" href="{{route('admin.users.edit', $user)}}">Editar</a>
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="card-body">
            <p class="text-center"><strong>No hay Usuarios Disponible</strong></p>
        </div>
        @endif
        <div class="card-footer">
            {{ $users->links() }}
        </div>
    </div>
</div>
 