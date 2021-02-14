<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Atletas Admin</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
</style>
<script type="text/javascript">

	$('#editEmployeeModal').on('show.bs.modal', function(e) {

    //get data-id attribute of the clicked element
    var bookId = $(e.relatedTarget).data('book-id');

    //populate the textbox
    $(e.currentTarget).find('input[name="bookId"]').val(bookId);
});

$(document).ready(function(){

	
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});


</script>

</head>
<body>
    <div class="container-fluid" width='100%'>
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h1>Atletas Admin</h1>
						<h2>Modulo Médico</h2>	
					</div>
					<div class="col-sm-12">
						<a href="#addEmployeeModal" class="btn btn-success btn-lg" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Cadastrar Novo Atleta</span></a>						
					</div>
                </div>
            </div>

            @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif 
            		


           <p>Pesquisa Por Nome</p>
            <div class="table-responsive">

            	<div class="col-md-4">

            		<form action="/pesquisa" method="get">
            			<div class="form-group">

            				<input type="search" class="form-control" name="pesquisa">
            			</div>	
            			<a href="/crud"><button  type="button" class="btn btn-info">Listar Todos</button></a>
            	</div>  
            	<span class="form-group-btn">  
            	<button type="submit" class="btn btn-primary">Pesquisar</button>   
            	</span> 
            	</form>	
            <table class="table table-striped table-hover">
            	
                <thead>
                    <tr>
                        <!-- <th>Foto</th> -->
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Apelido</th>
						<th>Data de Nascimento</th>
                        <th>Clube Anterior</th>
                        <th>Posição</th>
                        <th>Perna Dominante</th>
                        <th>Nacionalidade</th>
                        <th>Naturalidade</th>
                        <th>Estado Civil</th>
                        <th>Email</th>
                        <th>Telefone</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($dados as $dados_atleta)

                <!-- <form method="POST" action="/delete"> -->
                    <tr>
						<td><img src="{{asset('uploads/' . $dados_atleta->foto)}}" alt="foto" width="100px" height="100px" /></td>
						<!-- <td>{{$dados_atleta->foto}}</td> -->
                        <td>{{$dados_atleta->nome}}</td>
                        <td>{{$dados_atleta->apelido}}</td>
						<td>{{date('d/m/Y',strtotime($dados_atleta->data_nasc))}}</td>
                        <td>{{$dados_atleta->clube_anterior}}</td>	
                        <td>{{$dados_atleta->posicao}}</td>
                        <td>{{$dados_atleta->perna_dominante}}</td>
                        <td>{{$dados_atleta->nacionalidade}}</td>
                        <td>{{$dados_atleta->naturalidade}}</td>
                        <td>{{$dados_atleta->estado_civil}}</td>
                        <td>{{$dados_atleta->email}}</td>
                        <td>{{$dados_atleta->telefone}}</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal" data-book-id="{{$dados_atleta->id}}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="/delete/{{$dados_atleta->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach

                <!-- </form>   -->  
                </tbody>
            </table>
        </div>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="/cadastro" enctype=	"multipart/form-data">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Novo Atleta</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nome</label>
							<input type="text" name="nome" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Apelido</label>
							<input type="text" name="apelido" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Data de Nascimento</label>	
							<input type="date" name="data_nasc" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Clube Anterior</label>
							<input type="text" name="clube_anterior" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Posição :</label>
							<select name="posicao" id="posicao" class="form-group">
                                <option value="zagueiro">zagueiro</option>
                                <option value="lateral esquerdo">lateral esquerdo</option>
                                <option value="lateral direito">lateral direito</option>
                                <option value="meia">meia</option>
                                <option value="gandula">gandula</option>
                                <option value="atacante">atacante</option>
                                <option value="goleiro">goleiro</option>
                            </select>		
						</div>	
						<label>Perna Dominante :</label>
						<select name="perna_dominante" id="posicao" class="form-group">
                                <option value="esquerda">Esquerda</option>
                                <option value="direita">direita</option>
                            </select>
						<div class="form-group">
							<label>Nacionalidade</label>
							<input type="text" name="nacionalidade" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Naturalidade</label>
							<input type="text" name="naturalidade" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Estado Civil :</label>
							
							<select name="estado_civil" id="posicao" class="form-group">
                                <option value="casado">Casado</option>
                                <option value="solteiro">Solteiro</option>
                            </select>
						</div>	
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Telefone</label>
							<input type="text"  name="telefone" id="phone-mask" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input type="file"  name="foto" class="form-control" required>
						</div>

					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Adicionar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="/atualizar" enctype="multipart/form-data">
					<!-- @csrf -->		
					<div class="modal-header">						
						<h4 class="modal-title">Alterar Dados</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nome</label>
							<input type="text" name="nome" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Apelido</label>
							<input type="text" name="apelido" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Data de Nascimento</label>	
							<input type="date" name="data_nasc" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Clube Anterior</label>
							<input type="text" name="clube_anterior" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Posicao</label>
							<select name="posicao" id="posicao" class="form-group">
                                <option value="zagueiro">zagueiro</option>
                                <option value="lateral esquerdo">lateral esquerdo</option>
                                <option value="lateral direito">lateral direito</option>
                                <option value="meia">meia</option>
                                <option value="atacante">atacante</option>
                                <option value="goleiro">goleiro</option>
                            </select>		
						</div>	
						<label>Perna Dominante</label>
						<select name="perna_dominante" id="posicao" class="form-group">
                                <option value="esquerda">Esquerda</option>
                                <option value="direita">Direita</option>
                            </select>
						<div class="form-group">
							<label>Nacionalidade</label>
							<input type="text" name="nacionalidade" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Naturalidade</label>
							<input type="text" name="naturalidade" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Estado Civil</label>
							
							<select name="estado_civil" id="posicao" class="form-group">
                                <option value="casado">Casado</option>
                                <option value="solteiro">Solteiro</option>
                            </select>
						</div>	
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Telefone</label>
							<input type="tel" name="telefone" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input type="file"  name="foto" class="form-control" required>
						</div>
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Atualizar">
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>                                		