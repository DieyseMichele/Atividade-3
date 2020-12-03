<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<title> Atividade 3 </title>
		<script src="js/jquery.js" defer></script>
		<script src="js/atv.js" defer></script>
		<link rel = "stylesheet" href = "css/bootstrap.css"/>
		<link rel = "stylesheet" href = "css/style.css"/> 
		
	</head>
	<body>
		<div class="container">
			<div id= "cabecalho" class ="row" align="center" >
				<div class="col-sm-12" id="logo">
					<img src= "img/logo.png" alt="Logotipo do Vitual IF" title="Vitual IF" >
				</div>
			</div>
			<hr id="linha">
			
			<div id= "corpo" class="row" >
				<form action="processos.php" method="POST" target="">

						<div class="col-12 form-group">
							<label for="nome" class="control-label">Nome: </label>
							<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo">
						</div>
						<div class="row col-12 ">
							<div class="col-6 form-group">
								<label for="dataNascimento" class="control-label">Data de Nascimento: </label>
								<input type="date" class="form-control" id="dataNascimento" name="dataNascimento">	
							</div>
							
							<div class="col-6 form-group">
								<label for="anoCursa" class="control-label">Ano que cursa: </label>
								<input type="month" class="form-control" id="anoCursa" name="anoCursa">
							</div>
							
						</div>	
						<div class="row col-12">
							<div class="col-6 form-group">
								<label for="periodo" class="control-label">Período: </label>
								<select id="periodo" name="periodo" class="form-control">
									<option value="periodo1">1º período </option>
									<option value="periodo2">2º período</option>
									<option value="periodo3">3º período</option>
									<option value="periodo4">4º período</option>
									<option value="periodo5">5º período</option>
									<option value="periodo6">6º período</option>
								</select>
							</div>							
						</div>
						<div class="col-6 form-group" >						
							<label for="materiaPreferida" class="control-label">Matéria Preferida: </label>
						</div>
						<div id="pai">							
							<div class="col-12 form-group" id="periodo1">							
								<input type="checkbox"  id="materia1" name="materias[]" value="ALP">
								<label for="materia1"> Algoritmo e Lógica de Programação</label><br>
								
								<input type="checkbox" id="materia2" name="materias[]" value="Calculo1">
								<label for="materia2"> Cálculo I</label><br>
								
								<input type="checkbox"  id="materia3" name="materias[]" value="Ingles">
								<label for="materia3"> Inglês Instrumental</label><br>
								
								<input type="checkbox" id="materia4" name="materias[]" value="IHC">
								<label for="materia3"> IHC</label><br>
								
								<input type="checkbox" id="materia5" name="materias[]" value="IC">
								<label for="materia5"> Introdução a Computação</label><br>
								
								<input type="checkbox" id="materia6" name="materias[]" value="MTP">
								<label for="materia6"> Métodos e Técnicas de Pesquisa</label><br>
								
								<input type="checkbox" id="materia7" name="materias[]" value="IntroducaoComputacao">
								<label for="materia7"> Português</label><br>
							</div>							
							<div class="col-12 form-group" id="periodo2">								
								<input type="checkbox"  id="materia1" name="materias[]" value="Algebra">
								<label for="materia1"> Álgebra</label><br>
								
								<input type="checkbox" id="materia2" name="materias[]" value="AOC">
								<label for="materia2"> Arquitetura e Organização de Computadores</label><br>
								
								<input type="checkbox"  id="materia3" name="materias[]" value="Calculo2">
								<label for="materia3"> Cálculo II</label><br>
								
								<input type="checkbox" id="materia4" name="materias[]" value="ES">
								<label for="materia3"> Engenharia de Software</label><br>
								
								<input type="checkbox" id="materia5" name="materias[]" value="ED">
								<label for="materia5"> Estrutura de Dados</label><br>
								
								<input type="checkbox" id="materia6" name="materias[]" value="MBD">
								<label for="materia6"> Modelagem de Banco de Dados</label><br>
								
							</div>
							<div class="col-12 form-group" id="periodo3">							
								<input type="checkbox"  id="materia1" name="materias[]" value="BD">
								<label for="materia1"> Banco de Dados</label><br>
								
								<input type="checkbox" id="materia2" name="materias[]" value="Empreendedorismo">
								<label for="materia2"> Empreendedorismo</label><br>
								
								<input type="checkbox"  id="materia3" name="materias[]" value="ED2">
								<label for="materia3"> Estrutura de Dados II</label><br>
								
								<input type="checkbox" id="materia4" name="materias[]" value="MD">
								<label for="materia3"> Matemática Discreta</label><br>
								
								<input type="checkbox" id="materia5" name="materias[]" value="PE">
								<label for="materia5"> Probabilidade e Estatística</label><br>
								
								<input type="checkbox" id="materia6" name="materias[]" value="POO">
								<label for="materia6"> Programação Orientada a Objetos</label><br>
								
								<input type="checkbox" id="materia7" name="materias[]" value="QS">
								<label for="materia7"> Qualidade de Software</label><br>
								
							</div>
							<div class="col-12 form-group" id="periodo4">							
								<input type="checkbox"  id="materia1" name="materias[]" value="ABD">
								<label for="materia1"> Administração de Banco de dados</label><br>
								
								<input type="checkbox" id="materia2" name="materias[]" value="DAW">
								<label for="materia2"> Desenvolvimento de Aplicações Web</label><br>
								
								<input type="checkbox"  id="materia3" name="materias[]" value="MS">
								<label for="materia3"> Modelagem de Software</label><br>
								
								<input type="checkbox" id="materia4" name="materias[]" value="POE">
								<label for="materia3"> Programação Orientada a Eventos</label><br>
								
								<input type="checkbox" id="materia5" name="materias[]" value="RC">
								<label for="materia5"> Rede de Computadores</label><br>
								
								<input type="checkbox" id="materia6" name="materias[]" value="SO">
								<label for="materia6"> Sistemas Operacionais</label><br>
								
							</div>
							<div class="col-12 form-group" id="periodo5">						
								<input type="checkbox"  id="materia1" name="materias[]" value="DAW2">
								<label for="materia1"> Desenvolvimento de Aplicações Web</label><br>
								
								<input type="checkbox" id="materia2" name="materias[]" value="GPS">
								<label for="materia2"> Gerência de Projetos de Software</label><br>
								
								<input type="checkbox"  id="materia3" name="materias[]" value="IM">
								<label for="materia3"> Implantação de Servidores</label><br>
								
								<input type="checkbox" id="materia4" name="materias[]" value="IA">
								<label for="materia3"> Inteligência Artificial</label><br>
								
								<input type="checkbox" id="materia5" name="materias[]" value="MF">
								<label for="materia5"> Matemática Financeira</label><br>
								
								<input type="checkbox" id="materia6" name="materias[]" value="PDM">
								<label for="materia6"> Programação para Dispositivos Móveis</label><br>
								
								<input type="checkbox" id="materia7" name="materias[]" value="TCC">
								<label for="materia7"> Trabalho de Conclusão de Curso</label><br>
								
							</div>
							<div class="col-12 form-group" id="periodo6">							
								<input type="checkbox"  id="materia1" name="materias[]" value="ELC">
								<label for="materia1"> Ética, Legislação e Cidadania</label><br>
								
								<input type="checkbox" id="materia2" name="materias[]" value="GE">
								<label for="materia2"> Gestão Empresarial</label><br>
								
								<input type="checkbox"  id="materia3" name="materias[]" value="Marketing">
								<label for="materia3"> Marketing</label><br>
								
								<input type="checkbox" id="materia4" name="materias[]" value="SR">
								<label for="materia3"> Segurança em Redes</label><br>
								
								<input type="checkbox" id="materia5" name="materias[]" value="SD">
								<label for="materia5"> Sistemas Distribuídos</label><br>
								
								<input type="checkbox" id="materia6" name="materias[]" value="TADS">
								<label for="materia6"> Tópicos Avançados em Desenvolvimento de Software</label><br>
								
								<input type="checkbox" id="materia7" name="materias[]" value="TCC2">
								<label for="materia7"> Trabalho de Conclusão de Curso II</label><br>
								
							</div>
						</div>
						<br><br>
						<div class="row col-12 ">
							<div class="col-6"></div>
							<div class="col-3 form-group">
								<input id="botao-enviar" type="submit" class="btn btn-success" value="Enviar"></input>								
							</div>	
							<div class="col-3 form-group">						
								<input id="botao-limpar" type="reset" class="btn btn-info" value="Limpar"></input>
							</div>
						</div>
				</form>
				<div class ="col-6">
					<table class="table">
						<thead>
							<tr>
								<div class="col-12 row "> 
									<div class=" form-group">						
										<form method="POST" action="pesquisar.php">
											<input type="text" class="form-control" name="pesquisar" placeholder="PESQUISAR">									
										</form>
									</div>
									<div class=" form-group">
										<input type="submit"  class="btn btn-info"value="Pesquisar">
									</div>
								</div>
							</tr>
							<tr>
								<th>Nome:</th>
								<th>Matérias Preferidas:</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$conexao = new mysqli("localhost","root", "","atividade3");
								$tabela = $conexao->query("SELECT nome, materiaPreferida FROM cadastro");
								
								while($linha = $tabela->fetch_assoc())
								{
							?>
							<tr>
								<td><?=$linha["nome"];?></td>
								<td><?=$linha["materiaPreferida"];?></td>
							</tr>
								<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
	
				
		</div>
	</body>
	</html>