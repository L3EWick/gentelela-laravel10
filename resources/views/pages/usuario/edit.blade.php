@extends('gentelella.layouts.app')

<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css"> 
@section('content')
<div class="x_panel modal-content ">
    <div class="x_title">
        <h2>Editar Licença</h2>
       
        <div class="clearfix"></div>
    </div>
    <div class="x_panel ">
        <div class="x_content">
            <form action="{{route('user.update', $user->id)}}"  method="POST"> 
                {{ csrf_field() }}
                @method('PUT')

                <div class="card-body pt-4 p-3">
                    <div class="form-group row">
                        <div class="form-group col-md-4 col-sm-4 col-xs-12">
                            <label class="control-label" >Nome</label>
                            <input  type="text" id="contratante" name="name" value="{{$user->name}}" class="form-control" placeholder="Contratante" minlength="4" maxlength="100" required >	
                        </div>

                        <div class="form-group col-md-4 col-sm-4 col-xs-12">
                            <label class="control-label" >Email</label>
                            <input type="email" id="dns" name="email"  class="form-control" value="{{$user->email}}" placeholder="email " minlength="4" maxlength="100" required >	
                        </div>
                        <div class="form-group col-md-4 col-sm-4 col-xs-12">     
                            <label class="control-label" >Permissão</label>
                            <select name="nivel" id="nivel" class="form-control"  required>
                            
                                @if (Auth::user()->nivel == "Admin")
                                    <option value="User">User</option>
                                    <option selected value="Admin">Admin</option>
                                @endif
                                @if (Auth::user()->nivel == "Super-Admin")
                                    <option value="User">User</option>
                                    <option value="Admin">Admin</option>
                                    <option selected value="Super-Admin">Super-Admin</option>
                                @endif
                                @if ($user->nivel == "User")
                                    <option selected value="User">User</option>
                                    <option value="Admin">Admin</option>
                                @endif
                            
                            
                            
                            </select>
                    </div>

                    </div>

                </div>

            

        
            
            <div class="clearfix"></div>
                <div class="ln_solid"> </div>
                    <div class="footer text-right"> 
                        <button hidden type="submit"></button>
                        <button id="btn_cancelar" class="botoes-acao btn btn-round btn-warning" >
                            <span class="icone-botoes-acao mdi mdi-backburger"></span>   
                            <span class="texto-botoes-acao"> CANCELAR </span>
                            <div class="ripple-container"></div>
                        </button>
                
                        <button type="submit" id="btn_salvar" class="botoes-acao btn btn-round btn-success ">
                            <span class="icone-botoes-acao mdi mdi-send"></span>
                            <span class="texto-botoes-acao"> SALVAR </span>
                            <div class="ripple-container"></div>
                        </button>
                    </div>

        </form>

        </div>
    </div>
</div>

    
@endsection



@push('js')
<script src="assets/js/jquery.dataTables.min.js"></script>
<script>
    var myTable = $("#myTable").DataTable({
        language: {
            'url' : '{{ asset('assets/js/portugues.json') }}',
			"decimal": ",",
			"thousands": ".",
        },
        stateSave: true,
        stateDuration: -1,
        responsive: true,
    })
</script>
@endpush
   