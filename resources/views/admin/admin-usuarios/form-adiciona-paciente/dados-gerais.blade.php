@section('dados-gerais')

<hr>
                  <h4>Cadastro de Usuário - GERAL</h4>
                  <hr>
                  <form class="formulario-de-inclusao" role="form" method="POST" action="{{ url('/*') }}">
                          {{ csrf_field() }}

                          <div class="form-group form-usuario">
                              <label for="nome" class="col-md-4 control-label">Nome</label>

                              <div class="col-md-6">
                                  <input id="nome" type="text" class="form-control" name="nome" required autofocus>

                
                              </div>
                          </div>
                          <br>

                           <div class="form-group form-usuario">
                              <label for="nascimento" class="col-md-4 control-label">Data de Nascimento</label>

                              <div class="col-md-6">
                                  <input id="nascimento" type="date" class="form-control" name="nascimento" required autofocus>

                
                              </div>
                          </div>

                            <div class="form-group form-usuario">
                              <label for="sexo" class="col-md-4 control-label">Sexo</label>

                              <div class="col-md-6">
                          <label class="form-check-inline">
                           <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="masculino"> Masculino
                          </label>
                          <label class="form-check-inline">
                          <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="feminino"> Feminino
                          </label>
                          </div>
                          </div>
                          <div class="form-group form-usuario">
                              <label for="email" class="col-md-4 control-label">Email</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" required autofocus>

                
                              </div>
                          </div>
                          <div class="form-group form-usuario">
                              <label for="observacoes" class="col-md-4 control-label">Observações</label>

                              <div class="col-md-6">
                               <textarea class="form-control" id="observações" rows="5"></textarea>
                               <small><i>*essa informação será visivel apenas para você</i></small>
                                  
                              </div>
                          </div>
                          <div class="form-group form-usuario">
                       <label for="seletor-conheceu" class="col-md-4 control-label">Como conheceu</label>
  <div class="col-md-3">
                       <select id="tipoq" name="tipoq" class="select-box-customizado  show-tick" data-style="btn-info" ">
     <option>Encaminhamento Médico</option>
    <option>Guia Médico</option>
    <option>Hospital</option>
    <option>Indicação de Paciente</option>
    <option>Internet</option>
    <option>Outro</option>
  </select>



  </div>
   <label for="seletor-conheceu-obs" class="col-md-1 control-label">Observação</label>
  <div class="col-md-2">
     <input id="seletor-conheceu-obs" type="tex" class="form-control" name="seletor-conheceu-obs">

  </div>
  </div>
  <div class="col-md-12">
  <hr>
  <h4>TELEFONES</h4>
  <hr>
  </div>
   <div class="form-group form-usuario">
                              <label for="celular" class="col-md-4 control-label">Celular</label>

                              <div class="col-md-6">
                                <input id="celular" type="tel" class="form-control" name="celular" placeholder="1-(555)-555-5555" required autofocus>
                                  
                              </div>

                             
                          </div>
  <div class="form-group form-usuario">
                              <label for="residenciaç" class="col-md-4 control-label">Residencial</label>

                              <div class="col-md-6">
                                <input id="residencial" type="tel" class="form-control" name="residencial" placeholder="1-(555)-555-5555" required autofocus>
                                  
                              </div>
                              </div>
                            <div class="form-group form-usuario">
                              <label for="comercial" class="col-md-4 control-label">Comercial</label>

                              <div class="col-md-6">
                                <input id="comercial" type="tel" class="form-control" name="comercial" placeholder="1-(555)-555-5555" required autofocus>
                                  
                              </div>
                              </div>

                          <div class="col-md-12">
  <hr>
  <h4>Endereços</h4>
  <hr>
  </div>
   <div class="form-group form-usuario">
                              <label for="cep" class="col-md-4 control-label">Cep</label>

                              <div class="col-md-6">
                                <input id="cep" type="tel" class="form-control" name="cep" placeholder="_______-__" required autofocus>
                                  
                              </div>
                              </div>
  <div class="form-group form-usuario">
                              <label for="endereco" class="col-md-4 control-label">Endereco</label>

                              <div class="col-md-4">
                                <input id="endereco" type="text" class="form-control" name="endereco" placeholder="Rua, avenida,etc" required autofocus>
                                  
                              </div>
                              <label for="endereco" class="col-md-1 control-label">Numero</label>

                              <div class="col-md-1">
                                <input id="endereco-num" type="tel" class="form-control" name="endereco-num" placeholder="ex:89" required autofocus>
                                  
                              </div>
                              </div>

                              <div class="form-group form-usuario">
                              <label for="complemento" class="col-md-4 control-label">Complemento</label>

                              <div class="col-md-3">
                                <input id="complemento" type="text" class="form-control" name="complemento" placeholder="condominio, lote, etc" required autofocus>
                                  
                              </div>
                              <label for="bairro" class="col-md-1 control-label">Bairro</label>

                              <div class="col-md-2">
                                <input id="bairro" type="tel" class="form-control" name="bairro" placeholder="Copacabana" required autofocus>
                                  
                              </div>
                              </div>
                               <div class="form-group form-usuario">
                              <label for="estado-select" class="col-md-4 control-label">Estado</label>

                              <div class="col-md-3">
                                <select id="estado-select"  default="MG" name="estado-select" class="select-box-customizado  show-tick" data-style="btn-info" ">
    
  </select>
                                  
                              </div>
                              <label for="cidade" class="col-md-1 control-label">Cidade</label>

                              <div class="col-md-1">
                                <select id="cidade-select" name="cidade-select" class="select-box-customizado  show-tick" data-style="btn-info" ">
     
  </select>
                    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="/vendor/artesaos/cidades/js/scripts.js"></script>

                   <script>
        $('#estado-select').ufs({
            onChange: function(uf){
                $('#cidade-select').cidades({uf:uf});
            }
        });
     </script>               
                              </div>
                              </div>

                              <div class="form-group form-usuario">
                             
                              <div class="col-md-6">
                               
                              <button id="botao-salvar-adiciona" name="botao-salvar-adiciona" type="button" class="btn btn-secondary">Salvar e adicionar outro</button>
                              <button id="botao-salvar-continua" name="botao-salvar-continua" type="button" class="btn btn-secondary">Salvar e continuar editando</button>
                                  <button id="botao-salvar" name="botao-salvar" type="button" class="btn btn-success">Salvar</button>
                              </div>
                              </div>
                              
                          </form>

@endsection