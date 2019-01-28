-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jan-2019 às 09:41
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(6) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `idVenda` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `quantidade` int(100) NOT NULL,
  `precoUnitario` decimal(5,2) NOT NULL,
  `desconto` decimal(5,2) NOT NULL,
  `fotoProduto` varchar(70) NOT NULL,
  `precoTotal` decimal(5,2) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `numero` varchar(6) NOT NULL,
  `complemento` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(10) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `ano` int(4) NOT NULL,
  `editora` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `preco` decimal(5,2) NOT NULL,
  `desconto` decimal(5,2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `descricao` varchar(2000) NOT NULL,
  `estoque` int(3) NOT NULL,
  `isbn` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `ano`, `editora`, `genero`, `preco`, `desconto`, `foto`, `descricao`, `estoque`, `isbn`) VALUES
(1, 'Anna Kariênina', 'Liev Tolstói', 2017, 'Companhia Das Letras', 'Romance', '75.90', '0.00', 'anna_karienina.jpg\r\n', '“Toda a diversidade, todo o encanto, toda a beleza da vida é feita de sombra e de luz”, escreve Liev Tolstói no romance que Fiódor Dostoiévski definiu como “impecável”. Publicado originalmente em forma de fascículos entre 1875 e 1877, antes de finalmente ganhar corpo de livro em 1877, Anna Kariênina continua a causar espanto. Como pode uma obra de arte se parecer tanto com a vida? Com absoluta maestria, Tolstói conduz o leitor por um salão repleto de música, perfumes, vestidos de renda, num ambiente de imagens vívidas e quase palpáveis que têm como pano de fundo a Rússia czarista. Nessa galeria de personagens excessivamente humanos, ninguém está inteiramente a salvo de julgamento: não há heróis, tampouco fracassados, e sim pessoas complexas, ambíguas, que não se restringem a fórmulas prontas. Religião, família, política e classe social são postas à prova no trágico percurso traçado por uma aristocrata casada que, ao se envolver em um caso extraconjugal, experimenta as virtudes e as agruras de um amor profundamente conflituoso, “feito de sombra e de luz”.', 0, '9788535929225'),
(2, 'Guerra e Paz', 'Liev Tolstói', 2016, 'Seguinte', 'Romance', '31.90', '0.00', 'guerra_e_paz.jpg', 'O conflito armado entre as nações e o modo como isso afeta a vida de seus habitantes: esse é o tema, tristemente atual, de "Guerra e paz". Estamos em 1805. Napoleão planeja ampliar seus domínios e, com um exército composto de 675 mil homens de quase vinte nacionalidades diferentes, inicia sua marcha em direção à Rússia. Mas a guerra está apenas começando. Tolstói mostra o conflito de um ponto de vista inusitado, descrevendo o dia a dia das tropas e apontando como as vitórias e derrotas acontecem, muitas vezes, por mero acaso. Os bastidores do poder, o jogo da política, as intrigas da corte, as tramas da sociedade são desvendadas em linguagem sutil e irônica que esta adaptação busca preservar, permitindo ao leitor um primeiro contato proveitoso com um dos mais importantes clássicos da literatura. Tradução e adaptação: Silvana Salerno.', 0, '9788555340079'),
(3, 'Crime e Castigo', 'Fiódor Dostoiévski', 2013, 'Martin Claret', 'Romance', '56.90', '0.00', 'crime_e_castigo.png', 'Crime e castigo é um daqueles romances universais que, concebidos no decorrer do romântico século XIX, abriram caminhos ao trágico realismo literário dos tempos modernos. Contando nele a soturna história de um assassino em busca de redenção e ressurreição espiritual, Dostoiévski chegou a explorar, como nenhum outro escritor de sua época, as mais diversas facetas da psicologia humana sujeita a abalos e distorções e, desse modo, criou uma obra de imenso valor artístico, merecidamente cultuada em todas as partes do mundo. O fascinante efeito que produz a leitura de Crime e castigo — angústia, revolta e compaixão renovadas a cada página com um desenlace aliviador — poderia ser comparado à catarse dos monumentais dramas gregos.', 0, '9788572329521'),
(4, 'Lolita', 'Vladimir Nabokov', 2011, 'Anagrama', 'Romance', '79.50', '0.00', 'lolita.jpg', 'Polêmico, irônico e tocante, este romance narra o amor obsessivo de Humbert Humbert, um cínico intelectual de meia-idade, por Dolores Haze, Lolita, 12 anos, uma ninfeta que inflama suas loucuras e seus desejos mais agudos. Através da voz de Humbert Humbert, o leitor nunca sabe ao certo quem é a caça, quem é o caçador. A obra-prima de Nabokov, agora em nova tradução, não é apenas uma assombrosa história de paixão e ruína. É também uma viagem de redescoberta pela América; é a exploração da linguagem e de seus matizes; é uma mostra da arte narrativa em seu auge. Na literatura contemporânea, não existe romance como Lolita.', 0, '9788433970855'),
(5, 'Madame Bovary', 'Gustave Flaubert', 2015, 'L&PM ', 'Romance', '18.90', '0.00', 'madame_bovary.jpg', 'Considerado por muitos críticos e estudiosos como a maior realização do romance ocidental, "Madame Bovary" trata da desesperança e do desespero de uma mulher que, sonhadora, se vê presa em um casamento insípido, com um marido de personalidade fraca, em uma cidade do interior. Publicado originalmente em capítulos de jornal, em 1856, o romance mostra o crescente declínio da vida - interna e externa - de Emma Bovary, que figura na literatura ocidental no mesmo degrau que Dom Quixote, o personagem de Cervantes. Ambos não se conformam com a realidade em que vivem e tanto o cavaleiro da triste figura quanto a desolada dona-de-casa oscilam entre o status de herói e de anti-herói. Madame Bovary é sem dúvida a obra-prima de Gustave Flaubert (1821-1880), escritor francês que como nenhum outro na literatura ocidental levou o estilo à perfeição, reescrevendo inúmeras vezes o texto e procurando, como um artesão, o melhor encaixe das palavras. Flaubert identificou-se de tal forma com a sua protagonista que declarou: "Madame Bovary, c''est moi" (Madame Bovary é eu). Na sua maior obra, o escritor atingiu um grau de penetração dentro da mente da personagem principal como nunca ocorrera até então e abriu caminho para as aventuras psicológicas dos modernistas como Virginia Woolf, Marcel Proust, Clarice Lispector e James Joyce. Não por coincidência, Proust considerava Flaubert como um escritor de ruptura, por ter dado sentido e substância ao romance de análise psicológica.', 0, '8525412759'),
(6, 'Cem Anos de Solidão', 'Gabriel García Márquez', 2009, 'Record', 'Romance', '56.90', '0.00', 'cem_anos_de_solidao.jpg', '“Muitos anos depois, diante do pelotão de fuzilamento, o Coronel Aureliano Buendia havia de recordar aquela tarde remota em que seu pai o levou para conhecer a fábrica de gelo”... Com essa frase antológica, García Marquéz, Prêmio Nobel de Literatura de 1982, introduz a fantástica Macondo, um vilarejo situado em algum recanto do imaginário caribenho, e a saga dos Buendia, cujo patriarca, Aureliano, fez trinta e duas guerras civis... e perdeu todas. García Marquéz já despontava como um dos mais importantes escritores latino-americanos, no início da década de 1970, quando Cem anos de solidão começou a ganhar público no Brasil. O livro causou enorme impacto. Na época, o continente estava pontilhado de ditaduras. Havia um sentimento geral de opressão e de impotência. Então, essa narrativa em tom quase mítico, em que o tempo perde o caminho, em que os episódios testemunhados e vividos acabam se incorporando às lendas populares, evoca nos leitores uma liberdade imemorial, que não pode ser arrebatada. E tão presente. Tão familiar e necessária. Em Macondo, os mortos envelhecem à vista dos vivos e os anjos chegam, sempre, em dezembro. Entretanto, García Marquéz nunca aceitou que suas narrativas fossem rotuladas como fantasia. Talvez porque isso exilasse Macondo num outro mundo, que nem a solidão ou a liberdade pudessem alcançar. Cem anos de solidão é a mais pura história do povo latino-americano. Mas ultrapassa o momento e expõe a alma dessa história - ou como é vivenciada.', 0, '9788501078896'),
(7, 'Admirável Mundo Novo', 'Aldous Huxley', 2014, 'Biblioteca Azul', 'Romance', '27.90', '0.00', 'admiravel_mundo_novo.jpg', 'Uma sociedade inteiramente organizada segundo princípios científicos, na qual a mera menção das antiquadas palavras “pai” e “mãe” produzem repugnância. Um mundo de pessoas programadas em laboratório, e adestradas para cumprir seu papel numa sociedade de castas biologicamente definidas já no nascimento. Um mundo no qual a literatura, a música e o cinema só têm a função de solidificar o espírito de conformismo. Um universo que louva o avanço da técnica, a linha de montagem, a produção em série, a uniformidade, e que idolatra Henry Ford. Essa é a visão desenvolvida no clarividente romance distópico de Aldous Huxley, que ao lado de 1984, de George Orwell, constituem os exemplos mais marcantes, na esfera literária, da tematização de estados autoritários. Se o livro de Orwell criticava acidamente os governos totalitários de esquerda e de direita, o terror do stalinismo e a barbárie do nazifascismo, em Huxley o objeto é a sociedade capitalista, industrial e tecnológica, em que a racionalidade se tornou a nova religião, em que a ciência é o novo ídolo, um mundo no qual a experiência do sujeito não parece mais fazer nenhum sentido, e no qual a obra de Shakespeare adquire tons revolucionários. Entretanto, o moderno clássico de Huxley não é um mero exercício de futurismo ou de ficção científica. Trata-se, o que é mais grave, de um olhar agudo acerca das potencialidades autoritárias do próprio mundo em que vivemos.', 0, '9788525056009'),
(8, 'Dom Quixote', 'Miguel de Cervantes', 2012, 'Companhia das Letras', 'Romance', '80.90', '0.00', 'dom_quixote.jpg', 'Dom Quixote de La Mancha não tem outros inimigos além dos que povoam sua mente enlouquecida. Seu cavalo não é um alazão imponente, seu escudeiro é um simples camponês da vizinhança e ele próprio foi ordenado cavaleiro por um estalajadeiro. Para completar, o narrador da história afirma se tratar de um relato de segunda mão, escrito pelo historiador árabe Cide Hamete Benengeli, e que seu trabalho se resume a compilar informações. Não é preciso avançar muito na leitura para perceber que Dom Quixote é bem diferente das novelas de cavalaria tradicionais — um gênero muito cultuado na Espanha do início do século xvii, apesar de tratar de uma instituição que já não existia havia muito tempo. A história do fidalgo que perde o juízo e parte pelo país para lutar em nome da justiça contém elementos que iriam dar início à tradição do romance moderno — como o humor, as digressões e reflexões de toda ordem, a oralidade nas falas, a metalinguagem — e marcariam o fim da Idade Média na literatura.\r\nMas não foram apenas as inovações formais que garantiram a presença de Dom Quixote entre os grandes clássicos da literatura ocidental. Para milhões de pessoas que tiveram contato com a obra em suas mais diversas formas — adaptações para o público infantil e juvenil, histórias em quadrinhos, desenhos animados, peças de teatro, filmes e musicais —, o Cavaleiro da Triste Figura representa a capacidade de transformação do ser humano em busca de seus ideais, por mais obstinada, infrutífera e patética que essa luta possa parecer.', 0, '9788563560551'),
(9, 'Dom Casmurro', 'Machado de Assis', 2010, 'Bestbolso', 'Romance', '17.90', '0.00', 'dom_casmurro.jpg', 'Obra clássica do Realismo brasileiro e uma das mais famosas de Machado “Ainda hoje, mais de um século depois do surgimento do livro, leitores e críticos se debruçam sobre suas páginas na tentativa de encontrar pistas que lancem luz sobre o insolúvel ‘enigma de Capitu’.” Carlos Newton Júnior “É possivelmente o texto mais bem-acabado de nossa língua.” Carlos Sepúlveda Dom Casmurro é o romance mais estudado, comentado e discutido de Machado de Assis – o que significa dizer um dos mais estudados da nossa literatura. Publicado originalmente em 1899, o livro conta a história de Bentinho e Capitu, desde o namoro infantil até o casamento atormentado pelo ciúme e pela dúvida que virou polêmica literária: Capitu traiu o marido com o melhor amigo dele, Escobar? Os fatos são narrados por Bentinho, que relembra, já velho, episódios de sua vida. Dom Casmurro faz parte da “fase de maturidade” de Machado de Assis, juntamente com os romances Memórias póstumas de Brás Cubas (1881) e Quincas Borba (1891). A edição de bolso inclui prefácio do professor e escritor Carlos Newton Júnior.', 0, '9788577991716'),
(10, 'A Divina Comédia', 'Dante Alighieri', 2016, 'L&PM', 'Poesia', '34.90', '0.00', 'a_divina_comedia.jpg', 'A mais célebre jornada do inferno ao paraíso. Tradução do italiano, apresentação e notas de Eugênio Vinci de Moraes. A divina comédia, obra-prima de Dante Alighieri (1265-1321), fundadora da literatura de língua italiana e o mais completo compêndio sobre a civilização medieval, ganha uma nova e fluente tradução em prosa para o português brasileiro. Escrito enquanto o autor encontrava-se exilado de Florença, sua cidade natal, devido a rixas políticas, o poema narrado em primeira pessoa retrata Dante como um protagonista peregrino, uma espécie de cidadão do mundo representante do homem medieval espremido entre a cultura clássica e a tradição cristã, em busca da excelência moral e espiritual. Levado pela mão do poeta latino Virgílio, autor da Eneida, o personagem Dante conhece o inferno e o purgatório – e os pecadores que lá se encontram – para depois atingir o paraíso, em uma das obras literárias mais influentes de todos os tempos. Textos de apresentação e resumos dos cantos contextualizam a leitura da obra de Dante e servem como porta de entrada para este magistral poema narrativo, mantendo o brilho e a força deste que, segundo Italo Calvino, é um livro para ser lido e relido.', 0, '9788525433206'),
(11, 'Os Lusíadas', 'Luís de Camões', 2008, 'L&PM ', 'Poesia Épica', '16.90', '0.00', 'os_lusiadas.jpg', 'A presente edição de Os Lusíadas, de Luís Vaz de Camões, organizada pela especialista em Literatura Portuguesa Jane Tutikian, é voltada para estudantes e para todos os interessados em ler esse cânone da literatura. Traz a obra-prima de Camões acompanhada de uma apresentação que contextualiza o surgimento do texto e a vida do autor - além de abundantes notas que esclarecem vocabulário, referências a personagens e fatos históricos, bem como auxiliam na compreensão de trechos cuja sintaxe pode dificultar a leitura. Tão monumental quanto a Odisséia, de Homero, ou a Eneida, de Virgílio, Os Lusíadas é um dos mais preciosos tesouros da literatura universal. Na epopéia, publicada em 1552, recordam-se e exaltam-se os grandes feitos dos antigos navegadores lusitanos que, durante a Renascença, ampliaram os limites da Terra, mostrando ao mundo novas raças, religiões e costumes. Em sublimes versos, o bardo revela todo o erotismo da sua visão de mundo, que punha a beleza e a bravura acima de todas as coisas.', 0, '9788525417510'),
(12, 'O Príncipe', 'Nicolau Maquiavel', 2016, 'Nova Fronteira', 'Não Ficção', '14.90', '0.00', 'o_principe.jpg', 'Sob a atmosfera agitada da Renascença e dominado pela ideia da unidade italiana, Nicolau Maquiavel escreveu “O príncipe”. Na obra, que está entre as mais lidas da nossa literatura desde o século XVI, o autor tenta definir o poder, as formas de governo, as virtudes do soberano e uma nova ética do fazer político. Refletindo as condições da época, o combate às tradições medievais e uma abordagem livre de fatos históricos, esta obra é parte preponderante no legado essencial que Maquiavel deixou para a ciência política.', 0, '9788520927878'),
(13, 'A Máquina do Tempo', 'H. G. Wells', 2018, 'Suma de Letras', 'Ficção Científica', '32.90', '0.00', 'a_maquina_do_tempo.jpg', 'O primeiro e mais famoso livro sobre viagem no tempo chega em edição especial, com ilustrações inéditas, tradução primorosa e extras. Ao contar a história de um cientista inglês que embarca em uma fabulosa jornada a um mundo futuro, desconhecido e cheio de mistérios, H. G. Wells inaugura um dos principais temas da ficção científica.A bordo de sua Máquina do Tempo, o cientista que narra esta história parte do século XIX para o ano de 802701. Nesse futuro distante, ele descobre que o sofrimento da humanidade foi transformado em beleza, felicidade e paz. A Terra é habitada pelos dóceis Eloi, uma espécie que descende dos seres humanos e já formou uma antiga e enorme civilização. Mas os Eloi parecem ter medo do escuro, e têm todos os motivos para isso: em túneis subterrâneos vivem os Morlocks, seus maiores inimigos. Quando a Máquina do Tempo que levou o Viajante some, ele é obrigado a descer às profundezas para recuperá-la e voltar ao presente.Misturando uma imaginação singular, um tema inovador e muitas reviravoltas, A Máquina do Tempo foi o primeiro romance publicado por H. G. Wells, em 1895. Chamado de gênio e considerado um pioneiro, Wells abriu caminho não só para seus livros e sua visão de mundo, mas para novas possibilidades na literatura.', 0, '9788556510686'),
(14, 'A Guerra dos Mundos', 'H. G. Wells', 2000, 'Nova Fronteira', 'Romance', '24.90', '0.00', 'a_guerra_dos_mundos.jpg', 'Publicada pela primeira vez em 1898, A guerra dos mundos é considerada uma das obras fundadoras da ficção científica moderna. O romance de H.G. Wells descreve uma invasão da Inglaterra por alienígenas de Marte e pode ser lido como uma crítica feroz ao imperialismo europeu do século XIX. Esta edição traz ainda as famosas ilustrações de Henrique Alvim Corrêa.', 0, '9788520940969'),
(15, 'O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 2015, 'Giz Editorial', 'Literatura Infantil', '25.40', '0.00', 'o_pequeno_principe.jpg', 'Nesta clássica história que marcou gerações de leitores em todo o mundo, um piloto cai com seu avião no deserto do Saara e encontra um pequeno príncipe, que o leva a uma jornada filosófica e poética através de planetas que encerram a solidão humana. A edição conta com a clássica tradução do poeta imortal dom Marcos Barbosa, e é a versão mais consagrada da obra, publicada no Brasil desde 1952.', 0, '9788595081512'),
(16, 'Ulisses', 'James Joyce', 2000, 'Civilização Brasileira', 'Romance', '114.90', '0.00', 'ulisses.jpg', 'O motivo principal da excelência da tradução que Antônio Houaiss fez de Ulisses está, na opinião de Cid Silveira, em sua radicalidade. Entre verter simplesmente as idéias do texto e subverter o idioma para corresponder às invenções do original inglês, Houaiss optou pela última alternativa. E o fez, por vezes, com mais arrojo que seus predecessores (a clássica e bem-cuidada versão francesa de Augusto Morel e Stuart Gilbert, revista por Valery Larbaud e pelo próprio Joyce é, sob esse aspecto, bastante tímida).A grandeza e a autenticidade da obra de Joyce (que chegou a ser tachada, no começo do século, de “bolchevismo literário”) está em sua essência revolucionária, na sua insubmissão aos ditames lingüísticos. É impossível ser fiel ao espírito de Ulisses sem transportar a sua insubordinação lingüística para o idioma ao qual se queira vertê-la. Para Harry Levin, trata-se de “um romance para acabar com todos os romances”. É indispensável conhecer esta obra. Um escritor atual que não tenha lido Joyce é mais ou menos como um físico que ignore Einstein ou um sociólogo que não tenha tomado conhecimento de Marx.', 0, '8520000088'),
(17, 'Laranja Mecânica', 'Antony Burgess', 2004, 'Aleph', 'Ficção Científica', '35.90', '0.00', 'laranja_mecanica.jpg', 'Narrada pelo protagonista, o adolescente Alex, esta brilhante e perturbadora história cria uma sociedade futurista em que a violência atinge proporções gigantescas e provoca uma reposta igualmente agressiva de um governo totalitário. A estranha linguagem utilizada por Alex - soberbamente engendrada pelo autor - empresta uma dimensão quase lírica ao texto. Ao lado de "1984", de George Orwell, e "Admirável Mundo Novo", de Aldous Huxley, "Laranja Mecânica" é um dos ícones literários da alienação pós-industrial que caracterizou o século XX. Adaptado com maestria para o cinema em 1972 por Stanley Kubrick, é uma obra marcante: depois da sua leitura, você jamais será o mesmo. Agora em nova tradução brasileira.', 0, '8576570033'),
(18, 'Em Busca do Tempo Perdido - Vol. 1', 'Marcel Proust', 2016, 'Biblioteca Azul', 'Romance', '48.90', '0.00', 'em_busca_do_tempo_perdido.jpg', 'Esta reedição pela Biblioteca Azul de “Em busca do tempo perdido”, obra capital de Marcel Proust, um dos maiores escritores do século XX, é de grande importância para seus velhos e novos amantes. No caminho de Swann, o primeiro volume, saiu em 1948, magistralmente traduzido por Quintana. Esta nova edição ultrapassa as anteriores porque foi cuidadosamente preparada. Revista por Olgária Chaim Féres Matos, traz prefácio, cronologia, notas e resumo de Guilherme Ignácio da Silva e um valioso posfácio de Jeanne-Marie Gagnebin, professora de filosofia da PUC-SP.', 0, '9788525062093'),
(19, '1984', 'George Orwell', 2009, 'Companhia Das Letras', 'Romance', '43.90', '0.00', '1984.jpg', 'Ao lado de “A Revolução dos Bichos”, o livro “1984” é um dos mais famosos de George Orwell. A obra já ganhou versões de filmes, minisséries, quadrinhos, traduções para 65 países e uma polêmica fama, que não é à toa! Em seu último romance, o autor criou um personagem chamado Winston, que vive aprisionado em uma sociedade completamente dominada pelo Estado. Essa submissão ao poder, é relatada, inclusive, na rotina desse personagem, que trabalha com a falsificação de registos históricos, a fim de satisfazer os interesses presentes. Winston, contudo, não aceita bem essa realidade, que se disfarça de democracia, e vive questionando a opressão que o Partido e o Grande Irmão exercem sob a sociedade. A inspiração do livro vem dos regimes totalitários das décadas de 30 e 40 e, é assim, sob a ótica da ficção, que o autor faz com que seus leitores reflitam sobre o sistema de controle, que depois de tanto tempo ainda é muito questionado.', 0, '9788535914849'),
(20, 'A Revolução dos Bichos', 'George Orwell', 2007, 'Companhia Das Letras', 'Romance', '27.90', '0.00', 'a_revolucao_dos_bichos.jpg', 'Verdadeiro clássico moderno, concebido por um dos mais influentes escritores do século 20, "A Revolução dos Bichos" é uma fábula sobre o poder. Narra a insurreição dos animais de uma granja contra seus donos. Progressivamente, porém, a revolução degenera numa tirania ainda mais opressiva que a dos humanos Escrita em plena Segunda Guerra Mundial e publicada em 1945 depois de ter sido rejeitada por várias editoras, essa pequena narrativa causou desconforto ao satirizar ferozmente a ditadura stalinista numa época em que os soviéticos ainda eram aliados do Ocidente na luta contra o eixo nazifascista. De fato, são claras as referências: o despótico Napoleão seria Stálin, o banido Bola-de-Neve seria Trotsky, e os eventos políticos - expurgos, instituição de um estado policial, deturpação tendenciosa da História - mimetizam os que estavam em curso na União Soviética. Com o acirramento da Guerra Fria, as mesmas razões que causaram constrangimento na época de sua publicação levaram A revolução dos bichos a ser amplamente usada pelo Ocidente nas décadas seguintes como arma ideológica contra o comunismo. O próprio Orwell, adepto do socialismo e inimigo de qualquer forma de manipulação política, sentiu-se incomodado com a utilização de sua fábula como panfleto.', 0, '9788535909555'),
(21, 'As Viagens de Gulliver', 'Jonathan Swift', 2013, 'Martin Claret', 'Literatura Infantil', '25.90', '0.00', 'as_viagens_de_gulliver.jpg', 'As viagens de Gulliver é um clássico da literatura inglesa, escrito por Jonathan Swift em 1726. A narrativa de aventura conta as viagens de Lemuel Gulliver por países um tanto excêntricos, onde conhece culturas e povos jamais imagináveis. O que parece uma literatura inocente é uma reflexão categórica e simbólica da Inglaterra e mesmo da sociedade europeia do século XVIII. A narrativa de Jonathan Swift é notável, pois é leve e envolvente, tornando-a uma literatura atemporal.', 0, '9788572329637'),
(22, 'A República', 'Platão', 2017, 'Lafonte', 'Filosofia', '20.00', '0.00', 'a_republica.jpg', 'A República é a obra mais importante de Platão filósofo grego que vivem entre os séculos V e IV antes de Cristo. De caráter político, prega um Estado ideal governado por líderes justos, sábios e instruídos. Para Platão, o homem capaz de reunir essas qualidades seria o filósofo. Ele mesmo teve a oportunidade de colocar em prática suas ideias, por três, todas fracassadas. Em A República Platão passa em revista todos os sistemas de governo existentes na época e analisa sobretudo a aristocracia, a oligarquia, a democracia e a ditadura. Ainda que reconheça que sua república é uma utopia, defende que esse seria o único caminho para uma sociedade perfeita. À parte alguns princípios sociais inaceitáveis hoje, tudo é de tamanha atualidade que até parece retratar os nossos dias, apesar de ter sido escrita há mais de 2.300 anos.', 0, '9788581862538'),
(23, 'O Milagre da Manhã', 'Hal Elrod', 2012, 'Best Seller', 'Autoajuda', '21.51', '0.00', 'o_milagre_da_manha.jpg', 'Conheça o método simples e eficaz que vai proporcionar a vida dos sonhos — antes das 8 horas da manhã! Hal Elrod explica os benefícios de acordar cedo e desenvolver todo o nosso potencial e as nossas habilidades. O milagre da manhã permite que o leitor alcance níveis de sucesso jamais imaginados, tanto na vida pessoal quanto profissional. A mudança de hábitos e a nova rotina matinal proposta por Hal vai proporcionar melhorias significativas na saúde, na felicidade, nos relacionamentos, nas finanças, na espiritualidade ou quaisquer outras áreas que necessitem ser aprimoradas.', 0, '9788576849940'),
(24, 'Mindset', 'Carol Dweck', 2017, 'Objetiva', 'Psicologia', '38.90', '0.00', 'mindset.jpg', 'Carol S. Dweck, professora de psicologia na Universidade Stanford e especialista internacional em sucesso e motivação, desenvolveu, ao longo de décadas de pesquisa, um conceito fundamental: a atitude mental com que encaramos a vida, que ela chama de “mindset”, é crucial para o sucesso. Dweck revela de forma brilhante como o sucesso pode ser alcançado pela maneira como lidamos com nossos objetivos. O “mindset” não é um mero traço de personalidade, é a explicação de por que somos otimistas ou pessimistas, bem-sucedidos ou não. Ele define nossa relação com o trabalho e com as pessoas e a maneira como educamos nossos filhos. É um fator decisivo para que todo o nosso potencial seja explorado.', 0, '9788547000240'),
(25, 'Seja Foda!', 'Caio Carneiro', 2017, 'Buzz', 'Administração', '27.90', '0.00', 'seja_foda.jpg', 'Aposto que você quer, no final da sua vida, olhar para trás, bater no peito com o coração cheio de felicidade, sem falsa modéstia, com plena convicção e serenidade, e dizer: minha vida foi FODA. Mas calma, encontrar este livro é só o começo. Agora, você precisa levá-lo com você. Com ele, você vai aprender comportamentos e atitudes necessários para conquistar, em todos os aspectos da sua vida, resultados incríveis. Ele vai provocar e inspirar você não só a ter o espírito elevado e sonhar com coisas inimagináveis, mas também se tornar consciente do que precisa fazer para realizar cada um desses sonhos. Vamos juntos?', 0, '9788593156298'),
(26, 'O Poder da Ação', 'Paulo Vieira', 2015, 'Gente', 'Administração', '23.90', '0.00', 'o_poder_da_acao.jpg', 'É comum sentir insatisfação em algum momento da vida, seja com o trabalho, com os estudos, com o corpo ou até com as pessoas que você convive. Porém, é errado que essa insatisfação permaneça por muito tempo. Diante disso, Paulo Vieira criou “O Poder da Ação”, um livro que promete fazer sua vida ideal sair do papel. A obra mostra pesquisas e uma ampla investigação científica, realizada pelo próprio autor, que visa auxiliar os leitores à realmente mudarem de vida. Ao longo do livro, você vai encontrar incentivos, desafios e até exercícios que te ajudarão a começar uma nova etapa e, consequentemente, atingir o sucesso profissional e pessoal.', 0, '9788545200345'),
(27, 'O Poder do Hábito', 'Charles Duhigg', 2012, 'Objetiva', 'Administração', '47.90', '0.00', 'o_poder_do_habito.png', 'Este livro é um verdadeiro e profundo estudo dos hábitos. Porém, além de mostrar como eles funcionam, o autor Charles Duhigg também consegue explicar como eles podem ser transformados. E cá entre nós, ter o controle total das ações, sejam costumes ou não, facilita diversos aspectos da vida. Quer ver? Conseguir mudar o hábito de pegar o elevador, pelo hábito de subir lances de escada e fazer mais exercícios, pode influenciar a sua saúde futura. Fora a saúde, com pequenas mudanças de hábito, esse livro mostra que é possível ter resultados positivos na sua produtividade, na estabilidade financeira e até mesmo na sua felicidade.', 0, '9788539004119'),
(28, 'Sapiens - Uma Breve História da Humanidade', 'Yuval Noah Harari', 2015, 'L&PM ', 'Ciências', '36.81', '0.00', 'sapiens.jpg', 'O autor repassa a história da humanidade, ou do homo sapiens, desde o surgimento da espécie durante a pré-história até o presente, mas em vez de apenas “inventariar” os fatos históricos ele os relaciona com questões do presente e os questiona de maneira surpreendente. Além disso, para cada fato ou crença que temos como certa hoje em dia, o autor apresenta as diversas interpretações existentes a partir de diferentes pontos de vista, inclusive as muito atuais, e vai além, sugerindo interpretações muitas vezes desconcertantes. Yuval Noah Harari é professor do departamento de história da Universidade Hebraica de Jerusalém. É especialista em história mundial, medieval e militar.', 0, '9788525432186'),
(29, 'Homo Deus - Uma Breve História do Amanhã', 'Yuval Noah Harari', 2016, 'Companhia das Letras', 'Ciências', '44.90', '0.00', 'homo_deus.jpg', 'Neste “Homo Deus”: uma breve história do amanhã, Yuval Noah Harari, autor do estrondoso best-seller Sapiens: uma breve história da humanidade, volta a combinar ciência, história e filosofia, desta vez para entender quem somos e descobrir para onde vamos. Sempre com um olhar no passado e nas nossas origens, Harari investiga o futuro da humanidade em busca de uma resposta tão difícil quanto essencial: depois de séculos de guerras, fome e pobreza, qual será nosso destino na Terra? A partir de uma visão absolutamente original de nossa história, ele combina pesquisas de ponta e os mais recentes avanços científicos à sua conhecida capacidade de observar o passado de uma maneira inteiramente nova. Assim, descobrir os próximos passos da evolução humana será também redescobrir quem fomos e quais caminhos tomamos para chegar até aqui.', 0, '9788535928198'),
(30, '21 Lições Para o Século 21', 'Yuval Noah Harari', 2018, 'Companhia das Letras', 'História', '44.90', '0.00', '21_licoes_para_o_seculo_21.jpg', 'O novo livro do autor de Sapiens e Homo Deus explora as grandes questões do presente e o que podemos fazer para melhorálo. Como podemos nos proteger de guerras nucleares, cataclismos ambientais e crises tecnológicas? O que fazer sobre a epidemia de fake news ou a ameaça do terrorismo? O que devemos ensinar aos nossos filhos? Em Sapiens, Yuval Noah Harari mostrou de onde viemos; em Homo Deus, para onde vamos. 21 lições para o século 21 explora o presente e nos conduz por uma fascinante jornada pelos assuntos prementes da atualidade. Seu novo livro trata sobre o desafio de manter o foco coletivo e individual em face a mudanças frequentes e desconcertantes. Seríamos ainda capazes de entender o mundo que criamos?', 0, '9788535930917'),
(31, 'Poesia com Rapadura', 'Bráulio Bessa', 2017, 'Cene', 'Poesia', '29.90', '0.00', 'poesia_com_rapadura.jpg', 'Uma compilação de poemas nacionalmente conhecidos pelo público através das telas de TV, e tantos outros inéditos e guardados no coração do poeta. Um apanhado de afetos que versam do Nordeste, do amor, da fé, de tudo que há de belo na vida ou como bem diz, Bráulio Bessa: “uma ruma de sentimentos e pensamentos de um fazedor de poesias”.', 0, '9788568941058'),
(32, 'Poesia Que Transforma', 'Bráulio Bessa', 2018, 'Sextante', 'Poesia', '24.90', '0.00', 'poesia_que_transforma.jpg', 'Bráulio Bessa conquistou o Brasil com seus cordéis no programa Encontro com Fátima Bernardes. O livro inclui o poema Recomece e ilustrações do artista baiano Elano Passos. “O Bráulio mexe com nossas memórias, nossos sentimentos, faz aflorar o melhor da gente. É poesia que sai do coração. Que alegria tê-lo toda semana no meu programa!” - Fátima Bernardes “Cada palavra que sai da boca do Bráulio Bessa toca minha alma de uma forma raríssima.” - Milton Nascimento “Bráulio Bessa é um hipnotizador de palavras. Tem o coração rimado. Quando fala, o verbo venta verso.” - Fabrício Carpinejar “Gosto de comparar a poesia a um abraço, que consegue fazer um carinho na alma sem nem saber qual é a dor que você está sentindo. A poesia se adapta à sua dor. É um abraço cego e despretensioso, como quem diz: ‘Venha! Tá doendo? Pois deixe eu dar um arrocho, que vai lhe fazer bem.’” - Bráulio Bessa', 0, '9788543105758'),
(33, 'Pega a Visão', 'Rick Chesther', 2018, 'Buzz', 'Autoajuda', '29.90', '0.00', 'pega_a_visao.jpg', '"Incomodado com aqueles que insistiam no discurso da vitimização, um vendedor de água nas areias de Copacabana faz um rápido vídeo no Instagram para estimular as pessoas a driblar a crise com garra e criatividade. O que ficou conhecido depois como o ‘vídeo da água’ viraliza para milhões de pessoas em poucos dias. Atrai a atenção de Flávio Augusto da Silva, o autor do livro que o vendedor tinha acabado de ler, Geração de Valor. Ele será entrevistado pelas redes de televisão, e do dia para a noite torna-se uma referência para todos aqueles que, assim como você, decidiram empreender para superar a crise. Acaba de fazer uma palestra em Harvard. Em “Pega a Visão”, você saberá agora toda a história dele, desde o tempo em que vendia verduras que ele mesmo havia plantado no quintal de sua casa, aos 8 anos. Sem jamais deixar de reconhecer o que chamou de Lei da Semeadura, a atuação do Ser Superior em nossas vidas, a vida de Rick nos ensina que não há lugar no topo para quem para de lutar ou vive na eterna transferência de responsabilidades. Rick Chesther não é um empresário ou milionário. Mas sempre foi um líder, alguém que decidiu que ninguém iria escolher os seus sonhos. É um mensageiro que nos diz: “Ao empreender, você pode sair de qualquer situação e chegar aonde quiser.”', 0, '9788593156724'),
(34, 'Origens - Catorze Bilhões de Anos de Evolução Cósmica', 'Neil deGrasse Tyson', 2015, 'Planeta do Brasil', 'Ciências', '40.90', '0.00', 'origens.jpg', 'Em Origens - 14 bilhões de anos de evolução cósmica, os autores traçam o roteiro de uma ampla jornada científica aos aspectos macro e micro do universo. Neil deGrasse Tyson e Donald Goldsmith nos conduzem tanto pelo surgimento das galáxias e da estrutura cósmica e pelo nascimento das estrelas e dos planetas quanto ao quase infinitamente microscópico começo da vida, nos ambientes da microbiologia.Iniciando com o Big Bang, passando pelo início da vida na terra e a busca da vida extraterrestre, os autores avançam até a primeira imagem do nascimento de uma galáxia e seguem até a exploração de Marte pela sonda Spirit, sem deixar de fora eventos como a descoberta de água em uma das luas de Júpiter.', 0, '9788542205442'),
(35, 'Morte No Buraco Negro e Outros Dilemas Cósmicos', 'Neil deGrasse Tyson', 2016, 'Planeta do Brasil', 'Ciências', '65.90', '0.00', 'morte_no_buraco_negro.jpg', 'Neil de Grasse Tyson é um dos mais populares e queridos cientistas de todo o mundo porque sabe guiar seus fãs através dos mistérios do universo com clareza e entusiasmo. Reunindo mais de quarenta dos seus ensaios favoritos, Buraco Negro explora uma miríade de tópicos da astronomia. Desde a vida astral nas fronteiras da astrobiologia até como seria estar dentro de um buraco negro literalmente! Passeando pelos mais diversos temas, Tyson mostra como a indústria cinematográfica retrata a vida extraterrestre ao mesmo tempo que examina a relação entre ciência e religião no contexto de conflitos históricos. Ele também narra a história da progressão do planeta Terra, desde a sua localização no centro do universo até o estado atual: um pequeno e insignificante grão de pó no cosmos. Seus programas na TV e na internet e seus livros fazem muito sucesso porque o mais famoso astrofísico da atualidade é um professor nato que simplifica as complexidades da astrofísica ao partilhar uma visão contagiante pelo universo.', 0, '9788542207538'),
(36, 'Astrofísica Para Apressados', 'Neil deGrasse Tyson', 2017, 'Planeta do Brasil', 'Ciências', '26.90', '0.00', 'astrofisica_para_apressados.jpg', 'Entenda os mistérios do universo e seu lugar no espaço. Quem nunca olhou para o céu numa noite estrelada e se perguntou: que lugar ocupo no espaço? O que tudo isso significa? Como funciona? Em Astrofísica para apressados, o aclamado astrofísico e pesquisador Neil deGrasse Tyson responde a essas e outras perguntas que certamente todos já fizeram sobre o universo. De forma clara e sucinta, Tyson traduz o cosmos numa obra organizada em capítulos enxutos, escritos para quem tem Pressa, mas que oferecem conhecimentos fundamentais sobre todas as principais ideias e descobertas relacionadas ao universo. Um guia para todos aqueles que apreciam ciência, astrofísica e se interessam pelos mistérios do espaço universal, tão bem revelado ao público por este autor best-seller.', 0, '9788542210996'),
(37, 'Uma Breve História Da Ciência', 'William Bynum', 2014, 'L&PM', 'Ciências', '29.90', '0.00', 'uma_breve_historia_da_ciencia.jpg', 'A ciência é uma aventura! “Uma superacessível introdução à ciência.” - Booklist Este é, na verdade, um livro de aventura – é o que sentimos ao acompanhar os principais episódios da evolução científica e seus protagonistas. Leva os leitores às estrelas por meio do telescópio, quando o Sol substitui a Terra como o centro do universo. Mergulha sob a crosta terrestre, mapeia a evolução da tabela periódica, explica a eletricidade, a gravidade e a estrutura dos átomos. Relata as pesquisas que revelaram a molécula de DNA, abrindo inimagináveis novas perspectivas de exploração genética. Um tesouro para quem se interessa por saber de onde viemos, como chegamos aqui e para onde estamos indo.', 0, '9788525434449'),
(38, 'Bilhões e Bilhões', 'Carl Sagan', 2008, 'Companhia de Bolso', 'Ciências', '24.90', '0.00', 'bilhoes_e_bilhoes.jpg', 'Último livro escrito por Sagan, e publicado postumamente por Ann Druyan, sua mulher e colaboradora, Bilhões e bilhões traz dezenove artigos dedicados a temas variados. Une-os o fio da racionalidade no exame das coisas do mundo. Por exemplo: por que se deve ser a favor do direito de decisão da mulher em relação ao aborto; por que os problemas ambientais devem ser abordados a partir de uma plataforma de máxima inteligibilidade a respeito da ciência, da tecnologia e de seu papel social, e não com base em pressupostos emocionais muitas vezes resultantes da falta de informação. Sagan fala também sobre a possibilidade de haver vida em Marte, sobre o aquecimento global e sobre sua impressionante luta contra a doença que acabou por vencê-lo. O tema que une os artigos reunidos em Bilhões e bilhões é, enfim, a vida e a morte: do planeta, do Universo, do ser humano coletivo e individual.', 0, '9788535911947'),
(39, 'Cosmos', 'Carl Sagan', 2017, 'Companhia das Letras', 'Ciências', '50.90', '0.00', 'cosmos.jpg', 'Escrito por um dos maiores divulgadores de ciência do século XX, Cosmos retraça 14 bilhões de anos de evolução cósmica, explorando tópicos como a origem da vida, o cérebro humano, hieróglifos egípcios, missões espaciais, a morte do sol, a evolução das galáxias e as forças e indivíduos que ajudaram a moldar a ciência moderna. Numa prosa transparente, Carl Sagan revela os segredos do planeta azul habitado por uma forma de vida que apenas começa a descobrir sua própria identidade e a se aventurar no vasto oceano do espaço sideral. Aqui, o tratamento dos temas científicos está sempre imbricado com outros campos de estudo tradicionais, como história, antropologia, arte e filosofia. Publicado pela primeira vez em 1980, Cosmos reúne alguns dos conhecimentos mais avançados da época sobre a natureza, a vida e o Universo — e se mantém até hoje como uma das mais importantes obras de divulgação científica da história. Embora diversas descobertas fascinantes tenham ocorrido nos últimos quarenta anos, o tema central deste livro nunca estará desatualizado: nosso fascínio pelo conhecimento e a prática da ciência como atividade cultural.', 0, '9788535929881'),
(40, 'A Sutil Arte De Ligar O Foda-Se', 'Mark Manson', 2017, 'Intríseca', 'Autoajuda', '23.90', '0.00', 'a_sutil_arte_de_ligar_o_foda_se.jpg', 'Chega de tentar buscar um sucesso que só existe na sua cabeça. Chega de se torturar para pensar positivo enquanto sua vida vai ladeira abaixo. Chega de se sentir inferior por não ver o lado bom de estar no fundo do poço. Coaching, autoajuda, desenvolvimento pessoal, mentalização positiva — sem querer desprezar o valor de nada disso, a grande verdade é que às vezes nos sentimos quase sufocados diante da pressão infinita por parecermos otimistas o tempo todo. É um pecado social se deixar abater quando as coisas não vão bem. Ninguém pode fracassar simplesmente, sem aprender nada com isso. Não dá mais. É insuportável. E é aí que entra a revolucionária e sutil arte de ligar o foda-se. Mark Manson usa toda a sua sagacidade de escritor e seu olhar crítico para propor um novo caminho rumo a uma vida melhor, mais coerente com a realidade e consciente dos nossos limites. E ele faz isso da melhor maneira. Como um verdadeiro amigo, Mark se senta ao seu lado e diz, olhando nos seus olhos: você não é tão especial. Ele conta umas piadas aqui, dá uns exemplos inusitados ali, joga umas verdades na sua cara e pronto, você já se sente muito mais alerta e capaz de enfrentar esse mundo cão. Para os céticos e os descrentes, mas também para os amantes do gênero, enfim uma abordagem franca e inteligente que vai ajudar você a descobrir o que é realmente importante na sua vida, e f*da-se o resto. Livre-se agora da felicidade maquiada e superficial e abrace esta arte verdadeiramente transformadora.', 0, '9788551002490');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `dataNascimento` date NOT NULL,
  `cep` varchar(9) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `numero` varchar(6) NOT NULL,
  `complemento` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `numCartao` varchar(19) NOT NULL,
  `nomeCartao` varchar(50) NOT NULL,
  `validadeCartao` varchar(5) NOT NULL,
  `codigoCartao` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `celular`, `cpf`, `dataNascimento`, `cep`, `rua`, `numero`, `complemento`, `cidade`, `estado`, `numCartao`, `nomeCartao`, `validadeCartao`, `codigoCartao`) VALUES
(1, 'Rodrigo', 'rodrigo.dmferreira@gmail.com', '123456', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0),
(2, 'Pedrinho', 'pedrinho@mail.com', '63ab910cb3a7bc89faae5a46aa337aa22f5f4d30', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `idCarrinho` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `dataCompra` date NOT NULL,
  `boletoLinha` varchar(60) NOT NULL,
  `boletoVencimento` varchar(10) NOT NULL,
  `boletoValor` decimal(5,2) NOT NULL,
  `numCartao` varchar(19) NOT NULL,
  `nomeCartao` varchar(50) NOT NULL,
  `validadeCartao` varchar(5) NOT NULL,
  `codigoCartao` int(3) NOT NULL,
  `frete` decimal(5,2) NOT NULL,
  `precoTotal` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCliente` (`idUsuario`),
  ADD KEY `idProduto` (`idProduto`),
  ADD KEY `idCliente_2` (`idUsuario`),
  ADD KEY `idCliente_3` (`idUsuario`),
  ADD KEY `idVenda` (`idVenda`),
  ADD KEY `idProduto_2` (`idProduto`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCarrinho` (`idCarrinho`),
  ADD KEY `idCliente` (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`idVenda`) REFERENCES `venda` (`id`),
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`idProduto`) REFERENCES `livros` (`id`),
  ADD CONSTRAINT `carrinho_ibfk_3` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
