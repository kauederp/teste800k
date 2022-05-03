<?php
	/*
	* Verifica qual o host do site, possuí um array com os dados dos sites, após isso faça a verificação de qual o parametro foi passado e site => Politicas ou termos e é gerado o html conforme os parametros passados
	*/
	$host = urlencode(str_replace(array("https://", "https://", "www.", "www", "/", "https", "http", ":", '.com', '.br', '.net', '.org'), "", $_SERVER["HTTP_HOST"]));
	$produtos = array(
		"duragel" => array(
			"title" => 'Duragel',
			"logo" => 'duragel.png',
			'color' => '#b2100a',
			'width' => '30%',
			'res' => '50%'
		),
		'duralong' => array(
			'title' => 'Duralong',
			'logo' => 'duralong.svg',
			'color' => '#b2100a',
			'width' => '30%',
			'res' => '50%'
		),
		"essenciadecavalo" => array(
			"title" => 'Essência de Cavalo',
			"logo" => 'essencia.png',
			'color' => '#161b1e',
			'width' => '10%',
			'res' => '30%'
		),
		'tribomax' => array(
			'title' => 'TriboMax',
			'logo' => 'tribomax.png',
			'color' => '#211915',
			'width' => '30%',
			'res' => '50%'
		),
		'magrigel' => array(
			'title' => 'Magrigel',
			'logo' => 'magrigel.png',
			'color' => '#ef2c9c',
			'width' => '20%',
			'res' => '50%'
		),
		'magricaps' => array(
			'title' => 'Magricaps',
			'logo' => 'magricaps.png',
			'color' => '#ff196b',
			'width' => '50%',
			'res' => '50%'
		),
		'homemcaps' => array(
			'title' => 'HomemCaps',
			'logo' => 'homemcaps.svg',
			'color' => '#161b1e',
			'width' => '10%',
			'res' => '20%'
		),
		'tourocaps' => array(
			'title' => 'TouroCaps',
			'logo' => 'tourocaps.png',
			'color' => '#b2100a',
			'width' => '15%',
			'res' => '50%'
		),
		'alongamax' => array(
			'title' => 'AlongaMax',
			'logo' => 'alongamax.png',
			'color' => '#343a40',
			'width' => '15%',
			'res' => '50%'
		),
		"extratoafricano" => array(
			"title" => 'Extrato Africano',
			"logo" => 'extrato.png',
			'color' => '#b2100a',
			'width' => '10%',
			'res' => '50%'
		),
		"pattern" => array(
			'title' => 'AlongaMax',
			'logo' => 'alongamax.png',
			'color' => '#343a40',
			'width' => '30%',
			'res' => '50%'
		),
	);
	$title = null;
	$termos = false;
	$politicas = false;
	$host = ( isset( $produtos[$host] ) ? $produtos[$host] : $produtos["pattern"] );
	$get = ( isset($_GET["page"]) ? $_GET["page"] : 'termos');
	switch ($get) {
		case 'termos':
			$title = 'Termos e Condições';
			$termos = true;
		break;
		case 'politicas':
			$title = 'Política de Privacidade';
			$politicas = true;
		break;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title." - ".$host["title"]; ?></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<style type="text/css" media="screen">
		header {
			width: 100%;
			margin: 0 auto;
			background-color: <?php echo $host["color"]; ?>;
			border-bottom: 3px solid #000;
    		margin-bottom: 30px;
		}
		header img {
			margin: 0 auto;
			display: table;
			width: <?php echo $host["width"]; ?>;
    		padding: 10px;
		}
		@media screen and (max-width: 500px) {
			header img { width: <?php echo $host["res"]; ?> }
		}
	</style>
</head>
<body>
	<header id="header" class="">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<img src="img/<?php echo $host['logo']; ?>" class="img-responsive reponsive-img img-fluid">
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php
					if($termos) {
				?>
				<h4>Leia com atenção e garanta seus direitos!</h4>
				<br>
				<p>
					<strong>LEIA COM ATENÇÃO E CERTIFIQUE-SE DE HAVER ENTENDIDO ESTAS CONDIÇÕES E TERMOS ANTES DE SOLICITAR QUALQUER PRODUTO E / OU SERVIÇO DE NOSSO SITE</strong>
				</p>
				<p>
					<strong>ATENÇÃO:</strong> Este é um Acordo Legal (“Acordo”) entre Você – Pessoa Física, Jurídica ou Organização (“Usuário”) e <?php echo $host["title"]; ?> (“Empresa”). Solicitando, acessando, usando ou comprando <?php echo $host["title"]; ?> por meio deste Site ou de Web Sites relacionados (“Site”), o Usuário concordará em cumprir estritamente estas Condições e Termos de Uso, tornando-se, por via de consequência, parte deste Acordo. Ao prudente critério e decisão de nossa Empresa, Nós poderemos alterar, adicionar ou apagar cláusulas deste Acordo, sem notificação prévia. É de responsabilidade, única e exclusiva, do Usuário revisar este Acordo antes do uso ou compra de PRODUTOs e / ou Serviços para cientificar-se de eventuais modificações.<br><br>

					<strong>1. Condições de Entrega</strong>
					Nossos PRODUTOs serão entregues a Você via Serviço Postal, por intermédio da Empresa de Correios e Telégrafos (“Correios”). Nossa Empresa não garante as datas e / ou horários de entrega. Ademais, as entregas não serão realizadas aos sábados, domingos e / ou feriados. Caso haja quaisquer atrasos nas entrega de nossos PRODUTOs, por favor, acesse o portal Departamento de Clientes.<br><br>

					Caso haja opção por nosso serviço de prioridade (escolha do Usuário), nossa Empresa irá realizar a entrega com prioridade razoável e postará: (i) seu pedido no mesmo dia para os pedidos feitos antes das 10:00 horas; e (ii) no dia seguinte para todos os pedidos realizados após as 10:00 horas.<br><br>

					O Usuário concorda, expressamente, que os pedidos chegarão em um prazo de 30 (trinta) a 15 (quinze) dias úteis, a depender das operações dos Correios.<br><br>

					<strong>2. Geral</strong>
					Estas Condições e Termos de Uso serão aplicadas em todas as transações realizadas em nosso Site e em Web Sites relacionados. Este Acordo será validado por Assinaturas Eletrônicas, em consonância com as disposições contidas no Ato Internacional de Comércio (Act of International Trade). O Usuário manifesta que está de acordo com as Condições e Termos de Uso neste Acordo por quaisquer ações / manifestações, especialmente clicando nas opções / botões que contenham as palavras “Estou de acordo” ou expressões / palavras com igual sentido, ou simplesmente acessando o nosso Site. Nossa Empresa sugere, por segurança, que o Usuário imprima este Acordo para seu próprio arquivo.<br><br>

					Ademais, haja vista a impossibilidade de funcionamento integral e ininterrupto de qualquer sistema de telecomunicações ou de informática durante 365 (trezentos e sessenta e cinco) dias por ano, 24 (vinte e quatro) horas por dia, nesta situação de fragilidade também se incluindo a disponibilização dos serviços objeto deste Acordo em razão de sua complexidade, nossa Empresa não garante, de nenhuma forma, a prestação do serviço de forma ininterrupta e / ou isenta de erros.<br><br>

					Este Acordo não gera nenhum contrato de sociedade, de mandado, franquia ou relação de trabalho entre a nossa Empresa e o Usuário.<br><br>

					Por fim, este Acordo encontra-se em harmonia com as disposições e princípios da Lei 8.078 de 11 de Setembro de 1990 (“Código de Defesa do Consumidor”).<br><br>

					<strong>3. Informações Importantes Para Sua Saúde</strong>
					Nossa Empresa possui o compromisso de fornecer aos nossos Usuários os melhores PRODUTOs. Nós acreditamos na eficácia destes PRODUTOs. Entretanto, e em que pese o registro de nossos PRODUTOs na Agência Nacional de Vigilância Sanitária (“ANVISA”).<br><br>

					O Usuário deve cientificar-se, clara e objetivamente, que este PRODUTO não pretende diagnosticar, curar, mitigar e / ou prevenir quaisquer doenças. Por esse motivo, quaisquer informações fornecidas em nosso Site, Web Sites relacionados e e-mails não substituem consultas pessoais ao seu médico e não podem ser interpretadas como consultas médicas individuais.<br><br>

					Caso haja quaisquer mudanças em suas condições de saúde, por favor, interrompa o uso de nosso PRODUTO imediatamente e procure orientação médica.<br><br>

					O Usuário não deve usar as informações de nosso Site, Web Sites relacionados ou e-mails para diagnóstico e / ou tratamento de quaisquer problemas de saúde e / ou para prescrição a terceiros de quaisquer medicamentos e / ou tratamentos. O Usuário deve consultar seu médico ou dermatologista (i) antes de começar qualquer tipo de tratamento com cosméticos; (ii) antes de começar usar qualquer medicamento; e / ou (iii) caso tenha, ou, seja suspeito de ter problemas de saúde.<br><br>

					O Usuário não fará uso de nossos PRODUTOs e / ou Serviços caso esteja grávida, amamentando / alimentando, sofra de anorexia / bulimia, ou, seja menor de 18 (dezoito) anos.<br><br>

					O Usuário cientifica-se e está de acordo com a existência de riscos associados ao uso de cosméticos, incluindo, mas não se limitando à pele seca e / ou fria, queda de cabelo, tonturas, gota, dores de cabeça, diminuição de tolerância para frio, etc.<br><br>

					Nossa Empresa deseja fornecer as mais completas informações sobre o <strong>PRODUTO</strong>.<br><br>

					As informações que Nós fornecemos sobre o PRODUTO e / ou sua eficácia são obtidas através de terceiros e órgãos independentes – tais como, instituições educacionais, artigos científicos e / notícias, agências especializadas em nutrição, relatórios científicos e pesquisas (“Fontes de Informações”). Nossa Empresa não garante ou cientifica que as Fontes de Informações são livres de erros e não atesta, ou, se responsabiliza, pelos métodos utilizados e / ou suas conclusões. Todas as especificações, dados de desempenho e informações veiculadas em nosso Site limitam-se ao propósito informativo / ilustrativo e não consistem em garantias que confirmem tais resultados.<br><br>

					Assim, Nós não garantimos, em hipótese alguma, que o Usuário terá resultados específicos e / ou particulares, bem como benefícios com o uso de nosso PRODUTO, ou, que a sua experiência será igual a dos demais Usuários deste PRODUTO. Os resultados individuais variam de acordo com fatores genéticos e orgânicos próprios, alheios à vontade de nossa Empresa.<br><br>

					<strong>4. Redução Temporária de Preço – Promoções</strong>
					Para beneficio e conveniência dos Usuários, nossa Empresa (i) poderá reduzir, temporariamente, o preço dos pedidos nas hipóteses de promoção; e (ii) poderá garantir que sua transação de compra seja processada pela empresa do seu Cartão de Crédito.<br><br>

					Caso nossa Empresa reduza os preços do PRODUTO por meio de promoções sugeridas por nosso critério e decisão, o Usuário receberá nova fatura com o preço reduzido até o final da promoção, ou, até o final do período do pagamento do seu Cartão de Crédito. Ainda que seu pedido seja processado durante o período de preço o reduzido, um novo ciclo de fatura poderá ser processado na data do efetivo pagamento.<br><br>

					Após o período de promoção, os preços dos PRODUTOs serão restaurados aos valores commumente sugeridos por nossa Empresa, sem quaisquer avisos prévios.<br><br>

					<strong>5. Erros na Fatura do Usuário</strong>
					Caso sejam verificados erros / contradições em sua Fatura, o Usuário deverá acessar nosso Site e / ou entrar em contato telefônico com nosso Serviço de Atendimento ao Cliente.<br><br>

					Se a nossa Empresa não receber nenhuma notificação do Usuário dentro do prazo improrrogável de 7 dias após a identificação de eventuais erros, a Fatura e as resoluções feitas pelo prestador de serviço de seu Cartão de Credito serão consideradas aceitas.<br><br>

					Nossa Empresa, portanto, está isenta de toda e qualquer responsabilidade e / ou reclamações que não sejam formalizadas dentro do prazo de7 dias, após a identificação na fatura de Cartão de Crédito do Usuário.<br><br>

					<strong>6. Capacidade Para Cadastrar-se e Suas Representações</strong>
					Os PRODUTOs e Serviços oferecidos por nossa Empresa encontram-se disponíveis apenas para as pessoas que tenham capacidade legal para contratá-los. Não podem utilizá-los, por esse motivo, pessoas que não gozem dessa capacidade, inclusive menores de idade.<br><br>

					O Usuário declara e garante, neste ato, (i) ter mais de 18 (dezoito) anos; e (ii) que não permitirá que uma pessoa menor de 18 (dezoito) anos realize pedidos e / ou faça uso deste PRODUTO.<br><br>

					O Usuário garante, inclusive, que as informações fornecidas estão atualizadas, são reais e suficientes para que nossa Empresa finalize o pedido eficientemente e a tempo. Você é o único responsável pela atualização das informações veiculadas na conta e pela manutenção destes dados (incluindo a senha fornecida para acesso ao nosso Site e / ou compra de nossos PRODUTOs), informando, assim, a proteção contra acesso não autorizado.<br><br>

					O Usuário não deve, em quaisquer hipóteses, revender, redistribuir e / ou exportar os PRODUTOs adquiridos no Site de nossa Empresa.<br><br>

					O Usuário está de acordo em pagar pelo PRODUTO adquirido, incluindo tributos incidentes sobre a operação, transporte e entrega, pois estes custos são especificados em nosso Site quando do encaminhamentos da solicitação de compra. O pagamento deverá ser realizado antes da entrega e na forma das informações especificadas em nosso Site.<br><br>

					<strong>7. Rejeição, Danificação ou Perda Durante o Transporte</strong>
					O Usuário não deverá recusar o PRODUTO que lhe for entregue, excetuando-se as hipóteses em que os PRODUTOs forem danificados, no todo ou em parte, durante o transporte (seja quando os PRODUTOs forem transportados por Nós, seja mediante contratação de terceiros de nossa Empresa), e / ou quando nossa Empresa for notificada sobre os danos verificados dentro do prazo de 07 (cinco) dias úteis após o recebimento do PRODUTO.<br><br>

					Nossa Empresa não se responsabilizará por eventuais recusas imotivadas dos PRODUTOs entregues e não fará devolução das quantias eventualmente pagas nestes casos.<br><br>

					<strong>7.1 Como Devolver Seu PRODUTO Quando ele é Danificado</strong>
					Caso haja necessidade da devolução de PRODUTOs para troca e / ou em decorrência de danificações ocorridas, o Usuário deverá registrar sua Reclamação através do acesso ao nosso Serviço de Atendimento ao Cliente. O número da Reclamação só poderá ser solicitado em nosso Site ou por meio de contato telefónico com nosso Serviço de Atendimento ao Cliente.<br><br>

					Para garantir que sua Reclamação seja anotada corretamente, o Usuário deverá, ainda, remeter o PRODUTO para o endereço especificado pelo Serviço de Atendimento ao Cliente, junto com o número da Reclamação realizada. Para sua segurança, o número da Reclamação deverá ser legível na remessa do PRODUTO à nossa Empresa.<br><br>

					<strong>8. Termos de Devolução</strong>
					Você tem 7 (sete) dias corridos, a contar da entrega da sua compra, para se manifestar sobre a desistência ou defeito de fábrica.<br><br>

					Aceitamos a desistência da compra do PRODUTO quando não há violação do lacre da embalagem do PRODUTO ou qualquer indício de uso incorreto ou descuido do mesmo.<br><br>

					O processo de restituição por desistência da compra só será iniciado após o recebimento do PRODUTO em nosso escritório e checagem de suas condições. Caso não haja indícios de uso, providenciaremos a restituição da quantia paga pelo mesmo ou troca por outro PRODUTO.<br><br>

					Toda troca ou devolução deve ser comunicada para instruções detalhadas sobre o processo.<br><br>

					O prazo de substituição do PRODUTO pode ocorrer em até 7 dias.<br><br>

					Para o caso de uso do produto e insatisfação com o mesmo, você tem um prazo de 30 dias de reembolso a partir de quando você recebe o produto. Caso você use o produto e não fique satisfeito (a), para pedir o reembolso, você deve ligar para nós e nos enviar o produto de volta (tanto os frascros usados quanto os não usados), e nós iremos efetuar o reembolso.<br><br>

					Para todos os casos, você é responsável pelos pagamentos de envio dos frascros para nós.<br><br>

                    <strong>9. Código de Rastreio</strong>
                    Após a compra, dentro de um prazo de 5(cinco) dias úteis, será enviado o código de rastreio referente a compra em seu whatsapp automaticamente.<br><br>
                    É de extrema importância que você se mantenha em acompanhamento com esse código de rastreio diariamente, para evitar que ocorra problemas na entrega.<br><br>
                    Caso o produto seja devolvido por qualquer situação de entrega não realizada, você deverá arcar com o custo do frete de reenvio tabelado pelos Correios.<br><br>
                    Tendo em vista que o código de rastreio junto aos Correios só fica disponível por até 180 dias após a postagem, não é possível realizarmos nenhum processo de reenvio ou devolução caso o contato do cliente seja feito após 180 dias a contar do dia da realização do pedido.<br><br>

                    <?php
					}
					if($politicas) {
				?>
					<h4>Sua Privacidade é muito importante para nós!</h4>
				<br>
				<p>
					<strong>A presente Política de Privacidade (“Política de Privacidade”) se aplica a todos os produtos e serviços oferecidos e prestados no Site da <?php echo $host["title"]; ?> (“Empresa”).</strong>
				</p>
				<p>
					Esta Política de Privacidade demonstrará como <?php echo $host["title"]; ?> (i) recolhe as informações de todos os Usuários finais dos nossos Produtos e Serviços na Internet (“Serviços”), isto é, dos Usuários que acessam alguns dos nossos Produtos e Serviços, mas não tem contas (“Visitantes”) e dos Usuários que podem comprar Produtos e Serviços / ou pagam mensalidade para obter o Serviço (“Membros”); (ii) como <?php echo $host["title"]; ?> procede em relação às informações recolhidas e armazenadas; e (iii) as preocupações dos Visitantes em relação ao recolhimento e uso destas informações.<br><br>

					Por esse motivo, solicitamos que leia esta Política de Privacidade cuidadosamente.<br><br>

					A sua privacidade é muito importante para Nós. Dessa forma, <?php echo $host["title"]; ?> adotará todas as medidas possíveis para manter a confidencialidade e a segurança descritas nesta Política de Privacidade, não respondendo, porém, por prejuízos que possam ocorrer em razão de violações realizadas por terceiros que utilizem redes públicas e / ou a internet, subvertendo e violando sistemas de segurança para ter acesso às informações de nossos Usuários, Membros ou Visitantes.<br><br>

					<?php echo $host["title"]; ?> deseja fazer de sua experiência na Internet uma oportunidade proveitosa e compensatória. Desejamos, outrossim, que nossos Usuários – Membros e Visitantes –, usem amplas possibilidades de informações da Internet e seus instrumentos, aproveitando as oportunidades por Nós oferecidas com total privacidade.<br><br>

					Nós criamos esta Política de Privacidade para mostrar o compromisso da <?php echo $host["title"]; ?> com privacidade e segurança. Em caso de dúvidas sobre a proteção dos dados recolhidos e informados, ou para obter maiores informações acerca dos dados pessoais e os casos nos quais poderá ser quebrado o sigilo de que trata esta Política de Privacidade, entre em contato com o Serviço de Atendimento ao Cliente.<br><br>

					Informação Pessoal escolhida pela <?php echo $host["title"]; ?> e sua forma de uso.
					Ao se inscrever em uma Conta da <?php echo $host["title"]; ?> ltda, Nós solicitamos suas informações pessoais. Isto significa que Nutrahealth Research recolhe e armazena as informações dos Visitantes e Membros que acessam diversas partes dos nossos Serviços. O administrador do Setor terá acesso às informações pessoais de sua conta, incluindo seu e-mail.<br><br>

					Via de regra, nenhuma informação pessoal será fornecida para terceiros sem a permissão dos Visitantes ou Membros. Entretanto, <?php echo $host["title"]; ?> compartilhará as informações dos Usuários com outras empresas e indivíduos externos nas seguintes hipóteses excepcionais: (i) solicitação e / ou consentimento do Visitante ou Membro; (ii) satisfação de exigências legais, regulamentares e / ou de processos judiciais; (iii) solicitação governamental aplicável; (iv) violação e / ou descumprimento desta Política de Privacidade; (v) detectação, impedimento ou abordagem de quaisquer outras questões técnicas ou de segurança; e (vi) proteção de direitos, propriedades ou segurança de <?php echo $host["title"]; ?> ltda, nossos Visitantes e Membros ou Público em geral, na forma e permissão da Lei.<br><br>

					<?php echo $host["title"]; ?> limita o acesso às informações pessoais de Visitantes e Membros aos funcionários, contratantes e Agentes que precisem ter conhecimento desses dados para processá-los em nosso nome. Essas pessoas encontram-se comprometidas com as obrigações de confidencialidade e podem ser submetidas a punições, inclusive rescisão de contrato e processo criminal, caso não as cumpram.<br><br>

					A Proteção da Privacidade Infantil tem vital importância para Nós.
					Em cumprimento às disposições contidas na Lei 8.069 de 13 de Julho de 1990 (“Estatuto da Criança e do Adolescente”) e na Ata de 1998 sobre Política de Proteção Infantil On-line, <?php echo $host["title"]; ?> se compromete em observar e proteger a Privacidade Infantil.<br><br>

					Por esse motivo, <?php echo $host["title"]; ?> restringe acesso ao nosso Site e aos nossos Serviços para maiores de 18 (dezoito) anos.<br><br>

					VOCÊ DEVE TER 18 (DEZOITO) ANOS OU MAIS PARA ACESSAR ESTE SITE. CASO VOCÊ TENHA MENOS 18 (DEZOITO) ANOS, VOCÊ NÃO TERÁ ACESSO EM QUALQUER HIPÓTESE. EM RAZÃO DA RESTRIÇÃO DE IDADE PARA USO DESTE SITE, NENHUMA INFORMAÇÃO AQUI OBTIDA FARÁ PARTE DA ATA DE 1988 DE PROTEÇÃO DE PRIVACIDADE INFANTIL ONLINE (COPPA) E NÃO SERÁ MONITORADA.<br><br>

					Ademais, esta Política de Privacidade encontra-se em harmonia com as disposições e princípios da Lei 8.078 de 11 de Setembro de 1990 (“Código de Defesa do Consumidor”).<br><br>

					Esta Política de Privacidade poderá ser modificada periodicamente. Portanto, <?php echo $host["title"]; ?> reserva o direito de revisar, acrescentar e / ou modificar (i) esta Política de Privacidade; (ii) nossos Acordos e Termos de Serviços; e (iii) as demais políticas e acordos acerca de quaisquer matérias e objetos, sempre a seu prudente arbítrio, atualizando esta postagem tão logo seja possível.<br><br>

					O uso de nossos Serviços e deste Site por Usuários após as alterações operadas por <?php echo $host["title"]; ?> significará o conhecimento e aceitação das modificações.<br><br>

					Dessa forma, solicitamos, por gentileza, que o Membro ou Visitante leia, certifique-se de haver entendido e aceite todas as condições estabelecidas nesta Política de Privacidade antes do uso, inclusive para fins de acesso às modificações.<br><br>

					<strong>Ultima Atualização</strong>: Janeiro de 2020.
				<?php
					}
				?>
				</p>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>