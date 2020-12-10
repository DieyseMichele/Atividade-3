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
							<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required>
						</div>
						<div class="row col-12 ">
							<div class="col-6 form-group">
								<label for="dataNascimento" class="control-label">Data de Nascimento: </label>
								<input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>	
							</div>
							
							<div class="col-6 form-group">
								<label for="anoCursa" class="control-label">Ano que cursa: </label>
								<input type="month" class="form-control" id="anoCursa" name="anoCursa" required>
							</div>
							
						</div>	
						<div class="row col-12">
							<div class="col-6 form-group">
								<label for="periodo" class="control-label">Período: </label>
								<select id="periodo" name="periodo" class="form-control">
									<option value="">Selecione o período</option>
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
								<input type="checkbox"  id="materia8" name="materias[]" value="Algebra">
								<label for="materia8"> Álgebra</label><br>
								
								<input type="checkbox" id="materia9" name="materias[]" value="AOC">
								<label for="materia9"> Arquitetura e Organização de Computadores</label><br>
								
								<input type="checkbox"  id="materia10" name="materias[]" value="Calculo2">
								<label for="materia10"> Cálculo II</label><br>
								
								<input type="checkbox" id="materia11" name="materias[]" value="ES">
								<label for="materia11"> Engenharia de Software</label><br>
								
								<input type="checkbox" id="materia12" name="materias[]" value="ED">
								<label for="materia12"> Estrutura de Dados</label><br>
								
								<input type="checkbox" id="materia13" name="materias[]" value="MBD">
								<label for="materia13"> Modelagem de Banco de Dados</label><br>
								
							</div>
							<div class="col-12 form-group" id="periodo3">							
								<input type="checkbox"  id="materia14" name="materias[]" value="BD">
								<label for="materia14"> Banco de Dados</label><br>
								
								<input type="checkbox" id="materia15" name="materias[]" value="Empreendedorismo">
								<label for="materia15"> Empreendedorismo</label><br>
								
								<input type="checkbox"  id="materia16" name="materias[]" value="ED2">
								<label for="materia16"> Estrutura de Dados II</label><br>
								
								<input type="checkbox" id="materia17" name="materias[]" value="MD">
								<label for="materia17"> Matemática Discreta</label><br>
								
								<input type="checkbox" id="materia18" name="materias[]" value="PE">
								<label for="materia18"> Probabilidade e Estatística</label><br>
								
								<input type="checkbox" id="materia19" name="materias[]" value="POO">
								<label for="materia19"> Programação Orientada a Objetos</label><br>
								
								<input type="checkbox" id="materia20" name="materias[]" value="QS">
								<label for="materia20"> Qualidade de Software</label><br>
								
							</div>
							<div class="col-12 form-group" id="periodo4">							
								<input type="checkbox"  id="materia21" name="materias[]" value="ABD">
								<label for="materia21"> Administração de Banco de dados</label><br>
								
								<input type="checkbox" id="materia22" name="materias[]" value="DAW">
								<label for="materia22"> Desenvolvimento de Aplicações Web</label><br>
								
								<input type="checkbox"  id="materia23" name="materias[]" value="MS">
								<label for="materia23"> Modelagem de Software</label><br>
								
								<input type="checkbox" id="materia24" name="materias[]" value="POE">
								<label for="materia24"> Programação Orientada a Eventos</label><br>
								
								<input type="checkbox" id="materia25" name="materias[]" value="RC">
								<label for="materia25"> Rede de Computadores</label><br>
								
								<input type="checkbox" id="materia26" name="materias[]" value="SO">
								<label for="materia26"> Sistemas Operacionais</label><br>
								
							</div>
							<div class="col-12 form-group" id="periodo5">						
								<input type="checkbox"  id="materia27" name="materias[]" value="DAW2">
								<label for="materia27"> Desenvolvimento de Aplicações Web</label><br>
								
								<input type="checkbox" id="materia28" name="materias[]" value="GPS">
								<label for="materia28"> Gerência de Projetos de Software</label><br>
								
								<input type="checkbox"  id="materia29" name="materias[]" value="IM">
								<label for="materia29"> Implantação de Servidores</label><br>
								
								<input type="checkbox" id="materia30" name="materias[]" value="IA">
								<label for="materia30"> Inteligência Artificial</label><br>
								
								<input type="checkbox" id="materia31" name="materias[]" value="MF">
								<label for="materia31"> Matemática Financeira</label><br>
								
								<input type="checkbox" id="materia32" name="materias[]" value="PDM">
								<label for="materia32"> Programação para Dispositivos Móveis</label><br>
								
								<input type="checkbox" id="materia33" name="materias[]" value="TCC">
								<label for="materia33"> Trabalho de Conclusão de Curso</label><br>
								
							</div>
							<div class="col-12 form-group" id="periodo6">							
								<input type="checkbox"  id="materia34" name="materias[]" value="ELC">
								<label for="materia34"> Ética, Legislação e Cidadania</label><br>
								
								<input type="checkbox" id="materia35" name="materias[]" value="GE">
								<label for="materia35"> Gestão Empresarial</label><br>
								
								<input type="checkbox"  id="materia36" name="materias[]" value="Marketing">
								<label for="materia36"> Marketing</label><br>
								
								<input type="checkbox" id="materia37" name="materias[]" value="SR">
								<label for="materia37"> Segurança em Redes</label><br>
								
								<input type="checkbox" id="materia38" name="materias[]" value="SD">
								<label for="materia38"> Sistemas Distribuídos</label><br>
								
								<input type="checkbox" id="materia39" name="materias[]" value="TADS">
								<label for="materia39"> Tópicos Avançados em Desenvolvimento de Software</label><br>
								
								<input type="checkbox" id="materia40" name="materias[]" value="TCC2">
								<label for="materia40"> Trabalho de Conclusão de Curso II</label><br>
								
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
								<form method="GET" action="">
									<div class="col-12 row "> 
										<div class=" form-group">						
										
											<input type="text" id="pesquisar" class="form-control" name="pesquisar" placeholder="PESQUISAR">									
										
										</div>
										<div class=" form-group">
											<input type="submit" id="pesquisa" class="btn btn-info"value="Pesquisar">
										</div>										
									</div>
								</form>
							</tr>
							<tr>
								<th>Nome:</th>
								<th>Matérias Preferidas:</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$conexao = new mysqli("localhost","root", "","atividade3");
								
								$pesquisar = $_GET["pesquisar"];
								
								if(isset($pesquisar))
								{
									$tabela = $conexao->query("SELECT nome, materiaPreferida FROM cadastro WHERE nome LIKE '%$pesquisar%'");									
								}
								else
								{
									$tabela = $conexao->query("SELECT nome, materiaPreferida FROM cadastro");
								}
															
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
