@extends('welcome')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        USUÁRIOS   
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-5">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro de usuários</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  method="post" action="{{ route('salvar') }}" enctype="multipart/form-data"  role="form">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" name="nome" id="exampleInputEmail1" placeholder="Nome">
                </div>
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <label>Cargo</label>
                  <select name="cargo" class="form-control">
                    <option value="Administrador" >Administrador</option>
                    <option value="Atendimento">Atendimento</option>
                    <option value="Redação">Redação</option>
                    <option value="Criação">Criação</option>
                    <option value="Social Media">Social Media</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="login">Login</label>
                  <input type="text" class="form-control" name="login" id="exampleInputPassword1" placeholder="Login">
                </div>
                <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Avatar</label>
                  <input type="file" name="avatar" id="exampleInputFile">

                  
                </div>
             </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>     
          <!-- Input addon -->
         <div class="row"></div>
      </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-7">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lista de usuários</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body" >
                <div class="form-group">
                  <div class="col-sm-10" id="user">
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
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->nome}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->login}}</td>
                                <td>{{$usuario->cargo}}</td>
                                <td>
                                @can('update', App\Usuario::class)
                                    <a href="{{route('editar', $usuario->id)}}"><i class="fa fa-pencil"></i></a>
                                    <a  data-toggle="modal" data-target="#exampleModal" href="{{route('teste', $usuario->id)}}" ><i style="color:#D43644;" class="fa fa-trash"></i></a>
                                @endcan
                                </td>                                
                            </tr>                         
                        @endforeach                                 
                    </tbody>
                </table> 
              </label>
              <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Modal body text goes here.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a type="button" href="{{route('deletar',  $usuario->id)}}"  type="button" class="btn btn-primary">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
                  </div>
                </div>
              </div>
        
           
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
         
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('shared.footer')


    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script>

</script>
     
@endsection