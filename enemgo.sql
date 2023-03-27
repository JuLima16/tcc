-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Nov-2022 às 10:38
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `enemgo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro_pag`
--

CREATE TABLE `tb_cadastro_pag` (
  `ID` int(5) NOT NULL,
  `NOME` varchar(60) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `CELULAR` int(20) NOT NULL,
  `SENHA` varchar(25) NOT NULL,
  `IDADE` varchar(10) NOT NULL,
  `PLANO` varchar(20) NOT NULL,
  `PARCELAS` varchar(5) NOT NULL,
  `NUM_CARTAO` varchar(16) NOT NULL,
  `NOME_CARTAO` varchar(60) NOT NULL,
  `CPF` varchar(13) NOT NULL,
  `CEP` varchar(10) NOT NULL,
  `ENDERECO` varchar(40) NOT NULL,
  `NUMERO` varchar(5) NOT NULL,
  `COMPLEMENTO` varchar(40) NOT NULL,
  `BAIRRO` varchar(40) NOT NULL,
  `CIDADE` varchar(40) NOT NULL,
  `ESTADO` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cadastro_pag`
--

INSERT INTO `tb_cadastro_pag` (`ID`, `NOME`, `EMAIL`, `CELULAR`, `SENHA`, `IDADE`, `PLANO`, `PARCELAS`, `NUM_CARTAO`, `NOME_CARTAO`, `CPF`, `CEP`, `ENDERECO`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `CIDADE`, `ESTADO`) VALUES
(1, 'Isa', 'isa@gmail.com', 2147483647, 'oi', '15', 'ava', '12', '1219291921', 'Isabelle N Furui', '12919381831', '09230550', 'Rua Nilde', '31', '', 'Camilopólis', 'Santo André', 'SP'),
(4, 'jamanta', 'jamanta@gmail.com', 123293929, 'oi', '12', 'bas', '0', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_corrigirredacoes`
--

CREATE TABLE `tb_corrigirredacoes` (
  `ID` int(5) NOT NULL,
  `ID_USU` varchar(250) NOT NULL,
  `TEMA` varchar(250) NOT NULL,
  `FOTO` varchar(250) NOT NULL,
  `ID_TEMA` int(250) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_corrigirredacoes`
--

INSERT INTO `tb_corrigirredacoes` (`ID`, `ID_USU`, `TEMA`, `FOTO`, `ID_TEMA`) VALUES
(19, '1', 'Os impactos da desigualdade na distribuição das vacinas contra a Covid-19', 'ahoradaestrela.pdf', 1),
(20, '1', 'Os impactos da desigualdade na distribuição das vacinas contra a Covid-19', 'ahoradaestrela.pdf', 1),
(21, '4', 'Desafios para a implementação do nome social no Brasil', 'ahoradaestrela.docx', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_materias`
--

CREATE TABLE `tb_materias` (
  `ID` int(10) NOT NULL,
  `NOME_MATERIA` varchar(255) DEFAULT NULL,
  `QTD_MODULOS` int(5) DEFAULT NULL,
  `ICONE` varchar(255) DEFAULT NULL,
  `CATEGORIA` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_materias`
--

INSERT INTO `tb_materias` (`ID`, `NOME_MATERIA`, `QTD_MODULOS`, `ICONE`, `CATEGORIA`) VALUES
(1, 'Geografia', 64, 'public', 'Ciências Humanas'),
(2, 'Sociologia', 64, 'balance', 'Ciências Humanas'),
(3, 'História', 64, 'history_edu', 'Ciências Humanas'),
(4, 'Filosofia', 64, 'psychology_alt', 'Ciências Humanas'),
(5, 'Física', 64, 'hub', 'Ciências da Natureza'),
(6, 'Química', 64, 'science', 'Ciências da Natureza'),
(7, 'Biologia', 64, 'biotech', 'Ciências da Natureza'),
(8, 'Literatura', 64, 'menu_book', 'Linguagens'),
(9, 'Interpretação', 64, 'library_books', 'Linguagens'),
(10, 'Português', 64, 'abc', 'Linguagens'),
(11, 'Matemática', 64, 'calculate', 'Matemática'),
(12, 'Redação', 64, 'border_color', 'Redação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_planoestudos`
--

CREATE TABLE `tb_planoestudos` (
  `ID` int(5) NOT NULL,
  `DATA` varchar(10) NOT NULL,
  `MATERIA` varchar(25) NOT NULL,
  `TOPICO` varchar(100) NOT NULL,
  `VIDEO` varchar(250) NOT NULL,
  `FOTO_PROF` varchar(250) NOT NULL,
  `NOME_PROF` varchar(50) NOT NULL,
  `PDF` varchar(250) NOT NULL,
  `QUANT_EXER` varchar(5) NOT NULL,
  `ICONE` varchar(20) NOT NULL,
  `PLANO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_planoestudos`
--

INSERT INTO `tb_planoestudos` (`ID`, `DATA`, `MATERIA`, `TOPICO`, `VIDEO`, `FOTO_PROF`, `NOME_PROF`, `PDF`, `QUANT_EXER`, `ICONE`, `PLANO`) VALUES
(1, '11/10', 'Sociologia', 'Cultura', 'https://www.youtube.com/embed/XuBktCcpi84', '..\\assets\\img\\theme\\profPedroRenno.jpg', 'Pedro Rennó', '..\\assets\\img\\theme\\cultura.pdf', '13', 'balance', 'Todos'),
(2, '11/10', 'Matemática', 'Probabilidade', 'https://www.youtube.com/embed/vAheWef9mKw', '..\\assets\\img\\theme\\profAngela.jpg', 'Angela', 'https://www.youtube.com/embed/XuBktCcpi84', '20', 'calculate', 'Todos'),
(3, '11/10', 'Português', 'Gêneros Textuais', 'https://www.youtube.com/embed/Ucjv4LT8CSg', '..\\assets\\img\\theme\\profNoslen.jpg', 'Noslen', '..\\assets\\img\\theme\\generosTextuais.pdf', '25', 'abc', 'Todos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_redacaocorrigida`
--

CREATE TABLE `tb_redacaocorrigida` (
  `ID` int(5) NOT NULL,
  `ID_USU` varchar(250) NOT NULL,
  `TEMA` varchar(250) NOT NULL,
  `FOTO` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_redacaocorrigida`
--

INSERT INTO `tb_redacaocorrigida` (`ID`, `ID_USU`, `TEMA`, `FOTO`) VALUES
(1, '1', 'Os impactos da desigualdade na distribuição das vacinas contra a Covid-19', ''),
(2, '4', 'Desafios para a implementação do nome social no Brasil', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_redacoes`
--

CREATE TABLE `tb_redacoes` (
  `ID` int(5) NOT NULL,
  `TEMA` varchar(100) NOT NULL,
  `IMAGEM` varchar(250) NOT NULL,
  `TEXTOI` text NOT NULL,
  `TEXTOII` text NOT NULL,
  `TEXTOIII` text NOT NULL,
  `TEXTOIV` text NOT NULL,
  `PLANO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_redacoes`
--

INSERT INTO `tb_redacoes` (`ID`, `TEMA`, `IMAGEM`, `TEXTOI`, `TEXTOII`, `TEXTOIII`, `TEXTOIV`, `PLANO`) VALUES
(1, 'Os impactos da desigualdade na distribuição das vacinas contra a Covid-19', '..\\assets\\img\\theme\\impactosdesig.png', 'A desigualdade na distribuição da vacina contra a COVID-19 terá impacto duradouro e profundo na recuperação socioeconômica em países de renda baixa e média-baixa se não houver ação urgente para aumentar o fornecimento e garantir o acesso equitativo a todos os países, inclusive por meio do compartilhamento de doses, segundo novos dados divulgados hoje pelo PNUD, pela Organização Mundial da Saúde (OMS) e pela Universidade de Oxford.\n<br>\nAceleração no aumento da produção e na distribuição de doses suficientes de vacinas a países de baixa renda poderia ter adicionado US $ 38 bilhões à previsão do PIB desses países para 2021 se eles tivessem taxas de vacinação semelhantes às de países de alta renda. Em um momento em que as nações mais ricas gastam trilhões em estímulos para sustentar economias em declínio, é hora também de garantir que doses de vacina anti-COVID-19 sejam distribuídas rapidamente, todas as barreiras para aumentar a fabricação de vacinas sejam removidas, e o apoio financeiro seja garantido para que os imunizantes sejam distribuídos de forma equitativa, e a recuperação econômica global possa de fato ocorrer.\n<br>\nUm alto preço por dose de vacina contra COVID-19 em relação a outras vacinas e os custos de entrega – sem contar o aumento da força de trabalho na área da saúde – podem exercer forte pressão sobre sistemas sanitários frágeis e minar a imunização de rotina e serviços de saúde essenciais, além de causar picos alarmantes de sarampo, pneumonia e diarréia. Há também claro risco, em termos de oportunidades perdidas, para a expansão de outros serviços de imunização como, por exemplo, a distribuição segura e eficaz de vacinas contra o HPV. Os países de baixa renda precisam, em tempo hábil, de acesso a vacinas a preços sustentáveis e de apoio financeiro.\n<br>\nObservações como essas estão no Painel Global sobre Equidade da Vacina contra COVID-19, iniciativa conjunta do PNUD, da OMS e da Escola de Governo Blavatnik da Universidade de Oxford, que combina as informações mais recentes sobre a vacinação anti-COVID-19 com os dados socioeconômicos mais recentes para demonstrar por que acelerar a equidade da vacinação não é apenas crítico para salvar vidas, mas também para conduzir a uma recuperação mais rápida e justa da pandemia, com benefícios para todos.\n<br> <br>\nDisponível em: https://www.undp.org/pt/brazil/news/desigualdade-na-distribuicao-de-vacinas-prejudica-recuperacao-economica-mundial', 'A Organização Mundial de Saúde (OMS) voltou a destacar, em entrevista coletiva nesta quinta-feira, 7, a desigualdade “terrível” na distribuição de vacinas contra a covid-19 pelo mundo. Também presente no evento virtual, o secretário-geral da Organização das Nações Unidas (ONU), António Guterres, alertou que isso “atrasa a retomada” econômica e pediu que os países produtores e as empresas responsáveis adotem medidas para melhorar essa distribuição.\n<br>\nO diretor-geral da OMS, Tedros Adhanom Ghebreyesus, alertou para o risco de fracasso na luta global contra a pandemia, caso as vacinas não sejam mais bem distribuídas, já que áreas com menos cobertura abrem mais espaço para o surgimento de novas variantes do vírus, potencialmente mais perigosas. Ele lembrou que neste ano a OMS havia estabelecido uma meta para que todos os países tivessem vacinado ao menos 10% de suas populações até o fim de setembro. “Cinquenta e seis países não conseguiram, mas a culpa não foi deles”, ressaltou.\n<br>\nTedros Adhanom disse que mais de 6,4 bilhões de doses de vacinas já foram administradas globalmente, com quase um terço da população mundial totalmente vacinada contra a covid-19. “Esses números, porém, mascaram uma desigualdade terrível”, alertou, lembrando que os países mais ricos usaram 75% de todas as vacinas produzidas até agora e os de renda baixa, menos de 0,5% das vacinas globais. “Na África, menos de 5% das pessoas estão completamente vacinadas.”\n<br>\nA OMS e a ONU defendem, nesse contexto, transferência tecnológica para que mais países possam produzir vacinas e com isso elas cheguem aos mais pobres. Guterres mencionou a possibilidade de quebra de patentes como uma alternativa, nesse contexto.\n<br> <br>\nDisponível em: https://www.istoedinheiro.com.br/oms-e-onu-alertam-para-desigualdade-na-distribuicao-de-vacinas', 'A desigualdade vacinal segue  como  uma  das  grandes  barreiras  para  a  superação da pandemia de covid-19. Enquanto países ricos estocam vacinas e aplicam terceira dose mesmo em grupos não prioritários, regiões mais pobres do planeta sofrem com a falta de vacinas. “Apenas 20% de habitantes de países de renda baixa e média-baixa receberam a primeira dose, em comparação com 80% nos países de rendas alta e média-alta”, informa a Organização Mundial da Saúde (OMS), ao traçar expectativas ruins para o fim da pandemia.\n<br>\nDiante dos desafios, o diretor-geral da OMS, Tedros Adhanom Ghebreyesus, reforçou o apelo da entidade por uma “moratória” na aplicação das doses de reforço. A entidade pede que os países ricos apliquem terceiras doses apenas em grupos de risco, como idosos e imunossuprimidos, como fazem alguns estados brasileiros. “Não queremos ver desperdício de vacinas de reforço para pessoas saudáveis totalmente vacinadas”, disse Tedros. “Há um mês, apelei para uma moratória global das doses de reforço pelo menos até o fim de setembro. E desse modo, permitir vacinar as pessoas de maior  risco  no mundo que ainda não receberam a primeira dose. Hoje eu apelo a uma extensão pelo menos até final do ano”, completou.\n<br> <br>\nDisponível em:  https://www.redebrasilatual.com.br/saude-e-ciencia/2021/09/desigualdade-distribuicao-vacinas-dificulta-fim-pandemia/', '', 'Simples'),
(2, 'Play-to-earn: os problemas dos jogos para lucrar, e não mais se divertir', '..\\assets\\img\\theme\\playToEarn.png', 'Especulação e trabalho precarizado\n<br> <br>\nIrmãos contam que bater as metas diárias sem a possibilidade de folgar por um dia tem sido uma fonte de angústia. “Eu estou treinando o pessoal em uma scholarship (a scholarship é uma proprietária de múltiplas contas cada uma com no mínimo três personagens, no caso do Axie Infinity, distribuindo-as temporariamente para jogadores que não têm condições financeiras de fazer essa entrada no jogo ou que querem aprender a jogar antes de fazer um investimento inicial) e tem gente que fica muito estressada porque não consegue bater meta”, conta Luís. “Gente ficando muito cansada e estressada. Eu fiquei com tendinite nas duas mãos, dedão, cotovelo, ombro. A gente joga todo dia. Uma hora seu corpo começa te cobrar.”\n<br>\nEmbora seja um jogo estratégico envolvendo cartas de batalhas entre personagens, Axie Infinity é baseado em muita repetição – o que não significa que as partidas não exigem uma boa dose de atenção. “O jogador põe as cartas dele, finaliza a jogada, aí você põe as suas cartas, os axies se batem. Depois a mesma coisa. Então é extremamente repetitivo e desgastante. Não é divertido”, afirma Luís. “Você pode achar divertido durante, no máximo, uma semana.”\n<br>\nPara João, o maior impacto tem sido nos estudos. “Eu nunca tive tanta dificuldade em ler texto da faculdade quanto eu tenho hoje. É mentalmente desgastante.” Tanto que ele tem levado a questão para a terapia. “Você ganha R$ 400 reais para gastar R$ 100 com psicólogo toda semana. A minha questão com a psicóloga nas últimas semanas era a minha ansiedade para comprar uma conta própria e não ter que bater meta todo dia às 21h.”\n<br>\nA discussão sobre a relação entre jogo e trabalho é mais antiga do que os próprios videogames, e aparece em algumas obras seminais do estudo de jogos, como em Homo Ludens, do historiador holandês Johan Huizinga, publicado originalmente em 1938. Porém, com os videogames e, agora, com os jogos em blockchain, essa relação vem se estreitando.\n<br>\n“O que a gente vê acontecer nesses jogos já acontece há décadas, só que fora do hype do blockchain”, afirma Thiago Falcão, professor na Universidade Federal da Paraíba, doutor em comunicação e cultura contemporânea e pesquisador de jogos.\n<br>\n“E acontece de uma forma obscura que não é do interesse das pessoas que seja chamada atenção para ela. Tem dois lugares onde essas mecânicas de trabalho precarizado e comodificação de propriedade intelectual acontecem. O primeiro está no trabalho do escritor Julian Dibbell, que é essa coisa da mineração de ouro em MMOs em geral. Então tinha um monte de gente trabalhando nisso.” Thiago lembra que até mesmo o ex-assessor de Donald Trump e aliado de Jair Bolsonaro, Steve Bannon, investiu em uma empresa de mineração de ouro no World of Warcraft, que empregava trabalhadores chineses para executar tarefas repetitivas no jogo e gerar itens, que depois seriam vendidos a jogadores ricos, especialmente nos EUA. <br> Disponível em: https://www.overloadr.com.br/especiais/2021/12/jogos-blockchain-play-to-earn-criam-cenario-propicio-para-trabalho-informal-e-precarizado(Adaptado)', 'Lazer lucrativo: jovens aderem ao Axie Infinity, game que rende criptomoeda\n<br> <br>\nEntre os grandes interessados em criptomoedas no Brasil, os jovens estão no topo da lista – principalmente a Geração Z. De acordo com recente pesquisa da Yubo, rede social de live streaming, 35% dos adolescentes e jovens adultos brasileiros compram ou já compraram moedas digitais. \n<br>\nSurfando nesta alta onda das criptomoedas, o jogo Axie Infinity chegou com a promessa de divertir e, ao mesmo tempo, ganhar dinheiro. Baseado na tecnologia NFT (Non-Fungible Tokens), o game está vinculado às criptomoedas  Axie Infinity Shards (AXS) e Smooth Love Potions (SLP) e foi criado na rede Etherum — rede blockchain lançada em 2015 — e permite ganhos.  \n<br>\nAs duas criptomoedas do jogo podem ser negociadas em uma corretora confiável, mas também podem ser conquistadas por meio do desempenho do usuário no game. \n<br>\nApesar de ser uma gracinha — inspirado em Pokémon e Tamagotchi, brinquedo febre dos anos 1990 —, o Axie Infinity é um game exige investimento, estratégia e muita análise.\n<br>\nPara começar a jogar Axie Infinity, primeiramente é preciso comprar personagens e montar uma equipe com três axies. Para fazer isso, o usuário deve comprar criptomoedas em uma corretora – como, por exemplo, a Binance, considerada uma das mais seguras.\n<br>\nFeito isto, basta o usuário efetuar o login na carteira da Axie Infinity pelo marketplace (marketplace.axieinfinity.com/login) e vincular a carteira Ronin Wallet ou MetaMask — as oficiais do jogo. Em resumo, para começar a jogar é preciso, sim, investir um certo valor. Que pode variar conforme o tipo de personagem e o tempo, com a popularização do jogo. <br> Disponível em: https://www.sopacultural.com/noticias/lazer-lucrativo-jovens-aderem-ao-axie-infinity-game-que-rende-criptomoeda/(Adaptado)', '', '', 'Todos'),
(3, 'Feminicídio no território brasileiro', '..\\assets\\img\\theme\\feminicidio.png', '\r\nEm meio ao isolamento social, o Brasil contabilizou 1.350 casos de feminicídio em 2020 – um a cada seis horas e meia, segundo o Fórum Brasileiro de Segurança Pública. O número é 0,7% maior comparado ao total de 2019. Ao mesmo tempo, o registro em delegacias de outros crimes contra as mulheres caiu no período, embora haja sinais de que a violência doméstica, na verdade, pode ter aumentado.\r\n<br>\r\nOs casos de homicídio motivado por questões de gênero subiram em 14 das 27 unidades federativas, de acordo com o relatório. Houve crescimento acentuado em Mato Grosso (57%), Roraima (44,6%), Mato Grosso do Sul (41,7%) e Pará (38,95). Em Rondônia, os feminicídios também saltaram de sete ocorrências, em 2019, para 14 no ano passado.\r\n<br>\r\nEntre os Estados, Mato Grosso é o que tem a maior taxa de feminicídio, com 3,6 casos por 100 mil habitantes. Na situação inversa, o Distrito Federal é o responsável pelo melhor índice (0,4), seguido por Rio Grande do Norte (0,7), São Paulo (0,8), Amazonas (0,8) e Rio (0,9).\r\n<br>\r\nTrês a cada quatro vítimas de feminicídio tinham entre 19 e 44 anos. A maioria (61,8%) era negra. Em geral, o agressor é uma pessoa conhecida: 81,5% dos assassinos eram companheiros ou ex-companheiros, enquanto 8,3% das mulheres foram mortas por outros parentes.\r\n<br>\r\nAo contrário dos homicídios comuns, em que há maior prevalência de arma de fogo, as armas brancas foram mais usadas contra as mulheres. Em 55,1% das ocorrências, as mortes foram provocadas por facas, tesouras, canivetes ou instrumentos do tipo.\r\n<br>\r\nJá os registros de lesões corporais e de estupros feitos na polícia caíram em 2020. Pelo levantamento, foram notificadas 230.160 agressões contra mulheres – 7,4% a menos em relação ao ano anterior.\r\n<br> <br>\r\nDisponível em: https://www.correiobraziliense.com.br/brasil/2021/07/4937873-brasil-registra-um-caso-de-feminicidio-a-cada-6-horas-e-meia', 'O assassinato de mulheres em contextos discriminatórios recebeu uma designação própria: feminicídio. Nomear o problema é uma forma de visibilizar um cenário grave e permanente: milhares de mulheres são mortas todos os anos no Brasil. De acordo com o Mapa da Violência 2015, em 2013 foram registrados 13 homicídios femininos por dia, quase cinco mil no ano. Ainda assim, o enfrentamento às raízes dessa violência extrema não está no centro do debate público com a intensidade e profundidade necessárias diante da gravidade do problema.\r\n<br>\r\nO feminicídio é a expressão fatal das diversas violências que podem atingir as mulheres em sociedades marcadas pela desigualdade de poder entre os gêneros masculino e feminino e por construções históricas, culturais, econômicas, políticas e sociais discriminatórias.\r\n<br>\r\nEssas desigualdades e discriminações podem se manifestar desde o acesso desigual a oportunidades e direitos até violências graves – alimentando a perpetuação de casos como os assassinatos de mulheres por parceiros ou ex que, motivados por um sentimento de posse, não aceitam o término do relacionamento ou a autonomia da mulher; aqueles associados a crimes sexuais em que a mulher é tratada como objeto; crimes que revelam o ódio ao feminino, entre outros.\r\n<br><br>\r\nDisponível em: https://dossies.agenciapatriciagalvao.org.br/feminicidio/capitulos/o-que-e-feminicidio', 'No período colonial e até o século 19, vigorava no Brasil um conjunto de leis que punia e previa a execução de uma mulher adúltera. Era lícito ao homem casado matar a esposa em flagrante delito pelo argumento da defesa da honra. Assim, a Justiça brasileira absolvia maridos assassinos.\r\n<br>\r\nAté metade do século 20, era comum situações em que maridos assassinaram suas companheiras e receberem penas brandas por alegarem crimes passionais e a defesa da honra. Esses crimes seriam motivados “por amor” ou uma “forte paixão”, induzindo o réu a eliminar a vida da vítima.\r\n<br>\r\nA partir de 2015, o Brasil alterou o Código Penal Brasileiro e incluiu a Lei 13.104, que tipifica o feminicídio como homicídio, reconhecendo o assassinato de uma mulher em função do gênero. O crime de homicídio prevê pena de seis a 20 anos de reclusão. No entanto, quando for caracterizado feminicídio ele é considerado hediondo e a punição é mais severa, parte de 12 anos de reclusão.\r\n<br><br>\r\nDisponível em: https://vestibular.uol.com.br/resumo-das-disciplinas/atualidades/feminicidio-brasil-e-o-5-pais-em-morte-violentas-de-mulheres-no-mundo', '', 'Todos'),
(4, 'Desafios para a implementação do nome social no Brasil', '..\\assets\\img\\theme\\implementacaonomesocial.png', 'O que é nome social e por que deve constar nos registros de saúde\r\n<br><br>\r\nAo preencher um formulário, você pode ter se deparado com o campo “nome social”. Como o preencheu? Com o seu nome de casado? Seu apelido? Nenhuma das opções acima é a correta. O nome social é, na verdade, o nome pelo qual pessoas transexuais ou travestis se identificam e são socialmente reconhecidas. Por exemplo, você foi registrado como “Roberto dos Santos” na sua certidão de nascimento, mas se identifica como “Raquel dos Santos” devido à sua identidade de gênero. Tem, então, o direito de utilizar tal nome em documentos oficiais.\r\n<br>\r\nA adoção do nome social e o reconhecimento da identidade de gênero foi garantido pelo Decreto Nº8.727, divulgado em abril de 2016 pela Presidência da República. Ele prevê que a pessoa transgênera ou travesti tem o direito de solicitar a inclusão do seu nome social em documentos oficiais e nos registros dos sistemas de informação dos órgãos e entidades da administração pública federal. Mas para poder refazer esses documentos, ainda é necessário ingressar com um processo judicial.\r\n<br>\r\nO nome social já pode constar na carteira de identidade do travesti ou transexual que desejar, assim como no cartão do SUS (Sistema Único de Saúde). Além disso, neste último caso, o cartão pode ser impresso apenas com o nome social se o indivíduo desejar.\r\n<br>\r\nAssim, na hora de preencher o cadastro, os campos “nome civil” (registrado em nossa certidão de nascimento) e sexo devem ser omitidos. A identificação pelo nome social em todos os documentos do usuário é um direito garantido desde 2009 pela carta de Direitos dos Usuários do SUS.\r\n<br>\r\nMas por que é tão importante garantir o uso do nome social em serviços de saúde? A discriminação e, por consequência, a exclusão social sofrida por travestis e transexuais pode limitar e afastar seu acesso a esses cuidados. Por outro lado, quando a identidade é respeitada e reconhecida, o indivíduo se sente mais seguro para e confortável para comparecer às consultas e exames.\r\n<br>\r\nO papel do serviço de saúde, assim como dos profissionais, vai além de proporcionar cuidados práticos. Para que o paciente se engaje nas cuidados preventivos e tratamentos, é preciso agir com empatia e respeito. É o que chamamos de atendimento humanizado, uma união entre o conhecimento técnico e o comportamento ético dirigidos ao bem-estar do indivíduo.\r\n<br><br>\r\nDisponível em: https://peoplehealth.com.br/o-que-e-nome-social-e-por-que-deve-constar-nos-registros-de-saude/ (Adaptado)', 'Ministério do Trabalho regulamenta uso de nome social de funcionários nas empresas\r\n<br><br>\r\nNo final do ano passado, o procurador-geral do trabalho, Ronaldo Fleury, publicou a Portaria 1.036/2015, trazendo importantes conquistas para os transgêneros. Travestis, transexuais e pessoas cuja identificação civil não reflita sua identidade de gênero passam a ter direito de usar o nome social no cadastro de informações, endereços de e-mail, crachás, lista de ramais e sistemas de informática em todas as unidades do Ministério Público do Trabalho. O artigo 4º do texto, que entra em vigor em março, garante ainda o acesso a banheiros e vestiários de acordo com a\r\nidentidade de gênero escolhida pela pessoa.\r\n<br>\r\nMesmo que a medida se aplique apenas às unidades do Ministério do Trabalho, ela serve de alerta para as demais organizações. “É um estímulo às demais instituições públicas e privadas a refletir sobre o assunto”, afirma Leandro Pinto de Castro, do escritório Andrade Maia Advogados. Para o especialista, a medida pode contribuir para a inclusão de uma parcela da sociedade ainda excluída do mercado de trabalho.\r\n<br>\r\nDe acordo com a Associação Brasileira de Lésbicas, Gays, Bissexuais, Travestis e Transexuais (ABGLT), transgênero é uma terminologia utilizada para descrever pessoas cuja identidade de gênero transcende as definições convencionais. Não confunda com transexual, aquele indivíduo que, além de possuir uma identidade de gênero diferente da do sexo com que nasceu, manifesta o desejo de fazer cirurgias para reforçar sua transição. “Os executivos ainda têm dificuldade de entender a questão da identidade de gênero, tanto por conversa como de disposição para discutir o assunto”, diz Reinaldo Bulgarelli, coordenador do Fórum de Empresas e Direitos LGBT.\r\n<br><br>\r\nDisponível em: https://opiniaorh.com/2016/04/14/ministerio-do-trabalho-regulamenta-uso-de-nome-social-de-funcionarios-nas-empresas/ (Adaptado)', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_simulados`
--

CREATE TABLE `tb_simulados` (
  `ID` int(5) NOT NULL,
  `NUM_SIM` varchar(10) NOT NULL,
  `PDF` varchar(250) NOT NULL,
  `PDF_COR` varchar(250) NOT NULL,
  `PLANOS` varchar(5) NOT NULL,
  `DATA` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_simulados`
--

INSERT INTO `tb_simulados` (`ID`, `NUM_SIM`, `PDF`, `PDF_COR`, `PLANOS`, `DATA`) VALUES
(1, '1', '..\\assets\\SIMULADOS\\SimDia1.pdf', '..\\assets\\SIMULADOS\\GabSimDia1.pdf', 'Todos', '4 de Abr - 09:00 - 5 de Jun - 13:00'),
(2, '2', '..\\assets/SIMULADOS/SimDia2.pdf', '..\\assets\\SIMULADOS\\GabSimDia2.pdf', 'Todos', '6 de Jun - 09:00 - 31 de Jul - 13:00'),
(3, '3', '..\\assets\\SIMULADOS\\SimDia3.pdf', '..\\assets\\SIMULADOS\\GabSimDia3.pdf', 'Todos', '25 de Jul - 09:00 - 18 de Set - 13:00'),
(4, '4', '..\\assets\\SIMULADOS\\SimDia4.pdf', '..\\assets\\SIMULADOS\\GabSimDia4.pdf', 'Todos', '19 de Set - 09:00 - 20 de Nov - 13:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_topicos`
--

CREATE TABLE `tb_topicos` (
  `ID` int(5) NOT NULL,
  `MATERIA` varchar(25) NOT NULL,
  `TOPICO` varchar(100) NOT NULL,
  `VIDEOAULA` varchar(250) NOT NULL,
  `MAT_APOIO` text NOT NULL,
  `FOTO_PROF` varchar(250) NOT NULL,
  `NOME_PROF` varchar(50) NOT NULL,
  `PDF` varchar(250) NOT NULL,
  `QUANT_EXER` varchar(5) NOT NULL,
  `MAPA_MENTAL` varchar(250) NOT NULL,
  `PLANO` varchar(20) NOT NULL,
  `CONHECIMENTOS` varchar(40) NOT NULL,
  `ID_MATERIA` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_topicos`
--

INSERT INTO `tb_topicos` (`ID`, `MATERIA`, `TOPICO`, `VIDEOAULA`, `MAT_APOIO`, `FOTO_PROF`, `NOME_PROF`, `PDF`, `QUANT_EXER`, `MAPA_MENTAL`, `PLANO`, `CONHECIMENTOS`, `ID_MATERIA`) VALUES
(1, 'Matemática', 'Funções (1º e 2º Grau)', 'https://www.youtube.com/embed/3Z2sz81svkE', 'A função de segundo grau, também chamada de função quadrática ou função polinomial do 2° grau, é escrita como: f(x) = ax² + bx + c. Sendo os coeficientes \"a, b e c\" números reais e \"a\" diferente de 0 (zero). <br>\n<br>\nO grau da função é determinado de acordo com o maior expoente que a incógnita x assume. Ou seja, se em uma função a incógnita x não tiver nenhum expoente, ela é classificada como de primeiro grau, mas se ela tiver o número dois como maior expoente, ela é classificada como de segundo grau. <br>\n<br>\nConfira abaixo alguns tipos de funções polinomiais:  <br>\n<br>\n•    Função de primeiro grau: f(x) = ax + b. Exemplo: f(x) = 2x + 1; <br>\n•    Função de segundo grau: f(x) = ax² + bx+ c. Exemplo: f(x)= 4x² – 2x; <br>\n•    Função de terceiro grau: f(x) = ax³ + bx² + cx + d. Exemplo: f(x) 2x³ + x² + 2x + 1; ', '..\\assets\\img\\theme\\profRenato.jpg', 'Renato Oliveira', '..\\assets\\img\\theme\\funcoes.pdf', '20', '..\\assets\\img\\mapasMentais\\funcoes.jpg', 'Todos', 'Númericos', 11),
(2, 'Português', 'Gêneros Textuais', 'https://www.youtube.com/embed/Ucjv4LT8CSg', 'Os gêneros textuais são as classificações usadas para determinar os textos de acordo com suas características em relação a um contexto. O gênero textual é identificado com base no objetivo, na função e no contexto do texto. São as características do texto que determinam a qual gênero ele pertence.\n<br>\nOs gêneros variam de acordo com a intenção comunicativa e com as particularidades em relação à linguagem, à estrutura e ao conteúdo. Assim, os gêneros textuais exercem uma função social dentro de um processo de comunicação.\n<br>\nO processo de comunicação se dá através dos gêneros textuais, pois eles estão intimamente ligados à história da comunicação e da linguagem. Cada gênero textual apresenta especificidades que permitem identificar a sua classificação. Os gêneros possuem estruturas e características próprias, no entanto, vale ressaltar que eles são flexíveis e não possuem estrutura fixa.', '..\\assets\\img\\theme\\profNoslen.jpg', 'Noslen', '..\\assets\\img\\theme\\generosTextuais.pdf', '15', '..\\assets\\img\\mapasMentais\\generosTextuais.jpg', 'Todos', 'Textuais', 10),
(3, 'Geografia', 'Urbanização', 'https://www.youtube.com/embed/jPZyKuMrAj4', 'A urbanização é o processo em que a população das cidades cresce mais rapidamente do que a população dos campos. A principal força propulsora deste processo são as migrações motivadas pelo surgimento de ofertas de emprego na indústria, construção civil, comércio e demais atividades urbanas. <br>\nA urbanização é um processo muito importante, pois foi a responsável pela origem da cidade moderna, além de continuar a moldá-la até hoje. <br>\nUma das maneiras mais simples, porém mais superficiais de identificar o processo de urbanização é observar o aumento da proporção da população urbana em relação à população total.\n<br>\nEstima-se que desde início da história humana até 1800, menos de 2% da população mundial vivia em cidades. Já na década de 1950 a população urbana já atingia cerca de 30% e, em 2010, mais de 50%.\n<br>\nA Inglaterra foi a primeira sociedade a vivenciar o fenômeno da industrialização, bem como foi a pioneira na transformação de um país rural para um predominantemente urbano.\n<br>\nEntretanto, a urbanização acelerada ocorreu - não só na Inglaterra, mas na maior parte dos países desenvolvidos industrializados - a partir da segunda metade do séculos XIX, na fase da Segunda Revolução Industrial.\n<br>\nNesses países a urbanização é, portanto, mais antiga e ocorreu de forma mais lenta e integrada com a área rural. Durante o processo de urbanização, as cidades acompanharam a evolução das migrações e, com o tempo, estabeleceram todos os tipos de ferramentas de utilidade pública destinados à prestação de serviço, como: sistemas de abastecimento de água, serviços de esgoto, energia elétrica, rede telefônica e gás canalizado.\n<br>\nConsiderando que a urbanização moderna é um processo estreitamente ligado à industrialização e ao capitalismo, os países mais urbanizados do mundo são: Mônaco (100%), Bélgica (97%), Holanda (89%) e Alemanha (86,6%).\n<br>\nNo caso dos países subdesenvolvidos, a urbanização é um processo mais recente. Nesses países, a rápida industrialização ocorrida após a Segunda Guerra Mundial gerou um acentuado desequilíbrio das condições de vida entre as cidades e as zonas rurais, provocando intenso êxodo rural e rápido processo de urbanização.\n<br>\nAlguns desses países subdesenvolvidos industrializados apresentam taxas de urbanização igual ou até superiores à países desenvolvidos. A América Latina é a região mais urbanizada desse grupo de países, onde pode-se citar: Argentina (88,9%), Brasil (85%) e México (75,3%).\n<br>\nNos países subdesenvolvidos não industrializados, localizados predominantemente na África e na Ásia, há baixos índices de urbanização, devido a predominância das atividades primárias.\n<br>\nOutra parcela desse grupo de países tem apresentado intensa urbanização em razão ao intenso processo de êxodo rural, decorrente do baixo padrão de vida no campo e da falta de uma política governamental que promova a fixação e o acesso das pessoas à terra. Essas ações aliviariam a pressão populacional sobre as cidades.\n<br>\nAlguns exemplos de países subdesenvolvidos não industrializados e sua taxa de urbanização: Butão (7%), Guiné-Bissau (22%) e Paquistão (32,2%).\n<br>\nO processo de urbanização nos países subdesenvolvidos ocorreram mais recentemente e de forma muito mais acelerada em relação aos países desenvolvidos. Por esse motivo, surgiram uma gama de problemas sociais, tais como criminalidade, uso de drogas, poluição, doenças e falta de moradia.\n<br>\nEsses problemas ocorreram devido a total carência de um política de planejamento urbano e de investimento em infraestrutura e serviços públicos como transportes, escola, hospitais, saneamento básico e etc.\n<br>\nO êxodo rural, processo provocado pela mecanização do campo, dificultou a absorção da mão-de-obra rural nas cidades e transferiu a pobreza do campo para as regiões urbanas. O desenvolvimento dos setores secundário e terciário não acompanhou o ritmo de urbanização, gerando consequências como subemprego, mendicância, favelas, criminalidade e etc.', '..\\assets\\img\\theme\\profRicardo.jpg', 'Ricardo Marcílio', '..\\assets\\img\\theme\\urbanizacao.pdf', '15', '..\\assets\\img\\mapasMentais\\urbanizacao.png', 'Todos', 'Geográficos', 1),
(4, 'Geografia', 'Globalização', 'https://www.youtube.com/embed/3mBZaRPvXFI', 'Globalização é o nome dado ao fenômeno de integração do espaço mundial mediante os avanços técnicos nos setores da comunicação e dos transportes. Esse processo se intensificou com o advento da Terceira Revolução Industrial, em que se observou um aumento nos fluxos internacionais de capitais, mercadorias, pessoas e informações. <br>\n\nEsse processo é marcado pela proliferação das empresas transnacionais e pela consolidação do capitalismo financeiro, promovendo profundas transformações no sistema econômico internacional e na organização do trabalho. Na sua atual fase, foram criadas novas redes geográficas, e houve uma expansão sem precedentes das escalas de propagação de informações e também do consumo. Apesar disso, a globalização não se expandiu de maneira homogênea pelos territórios, colocando uma parte da população mundial à margem desse processo.', '..\\assets\\img\\theme\\profPedroRenno.jpg', 'Pedro Rennó', '..\\assets\\img\\theme\\globalizacao.pdf', '12', '..\\assets\\img\\mapasMentais\\globalizacao.png', 'Todos', 'Geográficos', 1),
(5, 'Sociologia', 'Sociedade', 'https://www.youtube.com/embed/VG1ikqtBSRg', 'Sociedade é uma associação entre indivíduos que compartilham valores culturais e éticos e que estão sob um mesmo regime político e econômico, em um mesmo território e sob as mesmas regras de convivência. A sociedade não é um amontoado de indivíduos, mas um sistema organizado deles e ordenado em uma estrutura social, com um arcabouço normativo e com instituições formais e informais (Estado, família, Igreja, escola etc.) — que ensinam esse repertório de prescrições, fomentam a unidade cultural, punem a transgressão das regras, socializam os indivíduos, definem uma gama de papéis que eles podem desempenhar e mantêm a coesão social, econômica e política. <br> A etimologia da palavra sociedade remete ao latim, societas, que significa associação “amistosa com outros”. Sociedade é uma palavra polissêmica, isto é, pode ter variados significados conforme o enfoque, a corrente teórica e mesmo a disciplina. O agrupamento humano sob regras e costumes comuns existe desde os primórdios da humanidade. <br>\r\n<br>\r\nSociedade e indivíduo<br>\r\n<br>\r\nOs autores clássicos têm diferentes abordagens sobre o tema. Durkheim enfatiza que a sociedade é anterior ao indivíduo e impõe-se sobre ele, suas regras (fatos sociais) são exteriores, coercitivas e gerais e exercem controle sobre os indivíduos. A participação do indivíduo na sociedade está ligada à função que ele desempenha nela.<br>\r\nMarx enfatiza a divisão de classes, sendo que a classe que domina sobre as demais produz e dissemina a ideologia que permite que as classes exploradas por meio do trabalho aceitem e validem a exploração que sofrem. A infraestrutura social corresponde à base material da sociedade, a sua formação mediante o mundo do trabalho. A superestrutura, por sua vez, corresponde à base normativa dessa sociedade, ao seu conteúdo moral, jurídico e simbólico que regula as relações materiais. Marx ressalta a capacidade de agência do indivíduo, isto é, seu poder de modificar a sociedade em que vive. <br>\r\nWeber volta sua atenção para a ação social, que seria a ação que leva em consideração o comportamento dos outros e é dotada de significado, seja ele de motivação racional, afetiva ou tradicional. Para Weber, compreender essas ações possibilita apreender os valores e as regras compartilhados por todos.', '..\\assets\\img\\theme\\profMarcos.jpg', 'Marcos Roberto', '..\\assets\\img\\theme\\sociedade.pdf', '20', '..\\assets\\img\\mapasMentais\\sociedade.jpeg', 'Todos', 'Sociais', 2),
(6, 'História', '2º Guerra Mundial', 'https://www.youtube.com/embed/4hEDjSdszSU', '[value-5]', '..\\assets\\img\\theme\\profPedroRenno.jpg', 'Pedro Rennó', '..\\assets\\img\\theme\\2guerramundial.pdf', '20', '..\\assets\\img\\mapasMentais\\2guerra.jpeg', 'Todos', 'do Século XX', 3),
(7, 'Filosofia', 'Teorias do Conhecimento', 'https://www.youtube.com/embed/rIe547sS6II', '[value-5]', '..\\assets\\img\\theme\\profBetover.png', 'Betover', '20', '20', '..\\assets\\img\\mapasMentais\\teoriadoconhecimento.png', 'Todos', 'de Epistemologia', 4),
(8, 'Física', 'Acústica', 'https://www.youtube.com/embed/Nlxs8r4xvpk', '[value-5]', '..\\assets\\img\\theme\\profBoaro.png', 'Boaro', '20', '20', '..\\assets\\img\\mapasMentais\\acustica.png', 'Todos', 'da Ondulatória', 5),
(9, 'Química', 'Ligação Iônica', 'https://www.youtube.com/embed/WRTwCeW_dv4', '[value-5]', '..\\assets\\img\\theme\\profBoaro.png', 'Michel', '[value-8]', '20', '..\\assets\\img\\mapasMentais\\ligacaoionica.png', 'Todos', 'Ligações Químicas', 6),
(10, 'Biologia', 'Fundamentos da Ecologia', 'https://www.youtube.com/embed/Z5cll6n3hHw', '[value-5]', '..\\assets\\img\\theme\\profSamuel.jpg', 'Samuel Cunha', '[value-8]', '20', '..\\assets\\img\\mapasMentais\\introducaoaecologia.png', 'Todos', 'de Ecologia', 7),
(11, 'Literatura', 'Modernismo 1º Geração', 'https://www.youtube.com/embed/WmOICqpg4Rg', '[value-5]', '..\\assets\\img\\theme\\profNoslen.jpg', 'Noslen', '[value-8]', '20', '..\\assets\\img\\mapasMentais\\modernismo.png', 'Todos', 'Modernismo', 8),
(12, 'Interpretação', 'Tipos de Texto', 'https://www.youtube.com/embed/ibwf_X3498c', '[value-5]', '..\\assets\\img\\theme\\profNoslen.jpg', 'Noslen', '[value-8]', '20', '..\\assets\\img\\mapasMentais\\tipostextuais.png', 'Todos', 'de Interpretação', 9),
(13, 'Redação', 'Estrutura de Redação', 'https://www.youtube.com/embed/jN1PzHGxom0', '[value-5]', '..\\assets\\img\\theme\\profNoslen.jpg', 'Noslen', '[value-8]', '20', '..\\assets\\img\\mapasMentais\\estruturaredacao.png', 'Todos', 'Redação', 12);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cadastro_pag`
--
ALTER TABLE `tb_cadastro_pag`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `tb_corrigirredacoes`
--
ALTER TABLE `tb_corrigirredacoes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_TEMA_FK` (`ID_TEMA`);

--
-- Índices para tabela `tb_materias`
--
ALTER TABLE `tb_materias`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `tb_planoestudos`
--
ALTER TABLE `tb_planoestudos`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `tb_redacaocorrigida`
--
ALTER TABLE `tb_redacaocorrigida`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `tb_redacoes`
--
ALTER TABLE `tb_redacoes`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `tb_simulados`
--
ALTER TABLE `tb_simulados`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `tb_topicos`
--
ALTER TABLE `tb_topicos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_materia_fk` (`ID_MATERIA`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cadastro_pag`
--
ALTER TABLE `tb_cadastro_pag`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_corrigirredacoes`
--
ALTER TABLE `tb_corrigirredacoes`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tb_materias`
--
ALTER TABLE `tb_materias`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tb_planoestudos`
--
ALTER TABLE `tb_planoestudos`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_redacaocorrigida`
--
ALTER TABLE `tb_redacaocorrigida`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_redacoes`
--
ALTER TABLE `tb_redacoes`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_simulados`
--
ALTER TABLE `tb_simulados`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_topicos`
--
ALTER TABLE `tb_topicos`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_corrigirredacoes`
--
ALTER TABLE `tb_corrigirredacoes`
  ADD CONSTRAINT `ID_TEMA_FK` FOREIGN KEY (`ID_TEMA`) REFERENCES `tb_redacoes` (`ID`);

--
-- Limitadores para a tabela `tb_topicos`
--
ALTER TABLE `tb_topicos`
  ADD CONSTRAINT `ID_MATERIA_fk` FOREIGN KEY (`ID_MATERIA`) REFERENCES `tb_materias` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
