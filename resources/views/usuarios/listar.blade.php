<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Login</th>
                            <th>Cargo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>            
                    <tbody>            
                        @foreach($dados as $usuario)
                            <tr>
                                <td>{{$usuario->nome}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->login}}</td>
                                <td>{{$usuario->cargo}}</td>
                                <td>
                                @can('update', App\Usuario::class)
                                    <a href="{{route('editar', $usuario->id)}}"><i class="fa fa-pencil"></i></a>
                                    <a data-toggle="modal" data-target="#exampleModal" ><i style="color:#D43644;" class="fa fa-trash"></i></a>
                                @endcan
                                </td>                                
                            </tr>                         
                        @endforeach                                 
                    </tbody>
                </table> 