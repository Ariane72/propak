@extends('welcome')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar usuário   
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
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Atualização de dados</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  method="post" action="{{route ('atualizar', $usuario->id)}}"  role="form">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" name="nome" id="exampleInputEmail1" value="{{ $usuario->nome }}" placeholder="Nome">
                </div>
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{ $usuario->email }}" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <label>Cargo</label>
                  <select name="cargo" class="form-control"  value="{{ $usuario->cargo }}">
                    <option {{($usuario->cargo == 'Administrador'  ? 'selected' : '')}} >Administrador</option>
                    <option {{($usuario->cargo == 'Atendimento'  ? 'selected' : '')}}>Atendimento</option>
                    <option {{($usuario->cargo == 'Redação'  ? 'selected' : '')}}>Redação</option>
                    <option {{($usuario->cargo == 'Criação'  ? 'selected' : '')}}>Criação</option>
                    <option {{($usuario->cargo == 'Social Media'  ? 'selected' : '')}}>Social Media</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="login">Login</label>
                  <input type="text" class="form-control" name="login" value="{{ $usuario->login }}" id="exampleInputPassword1" placeholder="Login">
                </div>
                <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Digite uma nova senha ou deixe em branco para manter a antiga">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                  </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </div>     
          <!-- Input addon -->
         <div class="row"></div>
      </div>
        <!--/.col (left) -->
        <!-- right column -->
       
        
           
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

     
@endsection