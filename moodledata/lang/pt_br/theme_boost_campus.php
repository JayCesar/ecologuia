<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'theme_boost_campus', language 'pt_br', version '3.6'.
 *
 * @package     theme_boost_campus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addablockpositionsetting'] = 'Posição da ferramenta "Adicionar um bloco"';
$string['addablockpositionsetting_desc'] = 'Com esta configuração, você pode gerenciar onde a ferramenta "Adicionar um bloco" será exibida.

Se você selecionar "Na parte inferior da gaveta de navegação", a ferramenta para adicionar novos blocos é exibido no painel de navegação deslizante esquerdo, como no tema Boost.

Se você selecionar "Na parte inferior da região de blocos padrão", a ferramenta para adicionar novos blocos será exibido na região de bloco padrão. Observação: esta opção, quando o modo de edição está ativo, possui o efeito colateral de exibir a ferramenta "Adicionar um bloco" nas páginas de configurações da atividade.';
$string['addablockwidgetheadingsetting'] = 'Posição da ferramenta "Adicionar um bloco"';
$string['additionallayoutsettings'] = 'Configurações adicionais de layout';
$string['additionalresourcesheadingsetting'] = 'Recursos adicionais';
$string['additionalresourcessetting'] = 'Adicione recursos adicionais';
$string['additionalresourcessetting_desc'] = 'Com esta configuração, você pode carregar recursos adicionais ao tema. Você pode fazer referência a esses recursos usando um link. O url ficará assim:
"/pluginfile.php/1/theme_boost_campus/additionalresources/0/nome-do-seu-arquivo.extensão-do-arquivo"<br/>
A vantagem de enviar arquivos para esta área de arquivos é que eles poderão ser entregues a usuários não autenticados. E por isso você só deve adicionar arquivos que não sejam críticos, onde todos podem ter permissão de acesso e cujo acesso não requeira um usuário com cadastro válido.<br/>
Um exemplo de caso de uso pode ser encontrado no arquivo README.md (dentro da pasta do plugin).';
$string['backgroundimage_desc_note'] = '</br><strong>Observação:</strong> esta opção não substituirá a configuração "theme_boost_campus | loginbackgroundimage", o que significa que as imagens enviadas para o plano de fundo da página de login serão exibidas de qualquer maneira.';
$string['blockcolumnwidthdashboardsetting'] = 'Largura da coluna de blocos no Painel';
$string['blockcolumnwidthdashboardsetting_desc'] = 'Com esta configuração, você pode alterar a largura (em pixels) da coluna de blocos no Painel.';
$string['blockcolumnwidthdefault'] = 'A largura padrão do Moodle 3.6 em diante é 360px, até o Moodle 3.5 a largura era 250px.';
$string['blockcolumnwidthsetting'] = 'Bloquear a largura da coluna em todas as outras páginas';
$string['blockcolumnwidthsetting_desc'] = 'Com esta configuração, você pode alterar a largura (em pixels) da coluna de blocos em todas as outras páginas, exceto o Painel.';
$string['blockdesignheadingsetting'] = 'Blocos';
$string['blockiconsetting'] = 'Ícone de bloco';
$string['blockiconsetting_desc'] = 'Com essa configuração, você pode adicionar um ícone padrão Font Awesome na frente do título do bloco. Se marcado, fornecemos adicionalmente substituições de ícones individuais para muitos blocos principais do Moodle e também alguns blocos amplamente usados. Você também pode alterar os ícones facilmente para cada bloco individualmente em seu SCSS bruto por meio da alteração do conteúdo Font Awesome. Para todos ver os ícones disponíveis, visite <a href="https://www.w3schools.com/" target="_blank">https://fontawesome.com/v4.7.0/</a> e use o valor Unicode do ícone para substituir o padrão.<br/>
O código para alterar o ícone se parece com este exemplo de alteração para o bloco "Pessoas":
<br/>';
$string['blockiconsetting_desc_code'] = '```.block_people .card-block .card-title::before { content: \'\\f0c0\' ; }```';
$string['brandcolorheadingsetting'] = 'Cores de marca';
$string['branddangercolorsetting'] = 'Cor da marca para perigo';
$string['branddangercolorsetting_desc'] = 'Esta cor é usada, por exemplo, em nas validações de formulários.';
$string['brandinfocolorsetting'] = 'Cor da marca para informação';
$string['brandinfocolorsetting_desc'] = 'Esta cor é usada, por exemplo, para informações de disponibilidade de atividades ou recursos do curso.';
$string['brandsuccesscolorsetting'] = 'Cor da marca para sucesso';
$string['brandsuccesscolorsetting_desc'] = 'Esta cor é usada, por exemplo, em nas validações de formulários.';
$string['brandwarningcolorsetting'] = 'Cor da marca para aviso';
$string['brandwarningcolorsetting_desc'] = 'Esta cor é usada, por exemplo, para textos de aviso.';
$string['breakpointheadingsetting'] = 'Ponto de quebra';
$string['breakpointsetting'] = 'Altera o ponto de quebra';
$string['cachedef_imagearea'] = 'Cache para itens da área de imagem';
$string['catchcmdarrowdownsetting'] = 'Atalho Cmd + Seta para baixo';
$string['catchcmdarrowdownsetting_desc'] = 'Esta configuração captura o atalho "Cmd + seta para baixo" (MAC),';
$string['catchctrlarrowdownsetting'] = 'Atalho Ctrl + Seta para baixo';
$string['catchctrlarrowdownsetting_desc'] = 'Esta configuração captura o atalho "Ctrl + Seta para baixo" (Windows),';
$string['catchendkeysetting'] = 'Tecla "End"';
$string['catchendkeysetting_desc'] = 'Esta configuração captura a tecla "End" (deve funcionar em todos os navegadores e sistemas operacionais principais),';
$string['catchkeyboardcommandsheadingsetting'] = 'Capture os comandos do teclado';
$string['catchkeyboardcommandsheadingsetting_desc'] = 'As seguintes configurações destinam-se a atender às necessidades de usuários avançados, especialmente se seu site Moodle tiver um rodapé grande.<br/>
Os usuários avançados provavelmente usarão os atalhos do teclado para navegar pelos sites. Eles podem usar isso para chegar ao final da página na intenção de ir rapidamente ao tópico mais recente do curso (para adicionar conteúdo ou dar nota às atividades mais recentes). Se o rodapé não for muito pequeno, eles precisarão rolar para cima novamente.<br/>
Com essas configurações, você pode permitir que os atalhos descritos abaixo sejam capturados e apenas rolem até o final do conteúdo do curso principal.';
$string['catchkeys_desc_addition'] = 'evita a rolagem padrão para o final da página da web e altera o comportamento para rolar apenas para o final do conteúdo do curso principal.';
$string['choosereadme'] = 'O Theme Boost Campus é um tema filho para ser usado em campi universitários.';
$string['configtitle'] = 'Configurações do Boost Campus';
$string['coursehintsheadingsetting'] = 'Dicas relacionadas ao curso';
$string['courselayoutsettings'] = 'Configurações de layout do curso';
$string['coursesettingsheadingsetting'] = 'Configurações do curso';
$string['darknavbarsetting'] = 'Navbar escuro';
$string['darknavbarsetting_desc'] = 'Ao marcar esta configuração, você pode inverter a
o padrão de cores da barra de navegação, do padrão claro para uma escuro com links brancos.';
$string['dashboardontopsetting'] = 'Item de menu "Painel" no topo';
$string['dashboardontopsetting_desc'] = 'Ao marcar esta configuração, o item de menu "Painel" estará sempre localizado na parte superior da gaveta de navegação. Por padrão, este já é o caso em todas as páginas do Moodle, exceto nas páginas dos cursos. Lá, o curso atual e seu conteúdo são colocados no topo. Isso pode quebrar as expectativas do usuário quanto ao posicionamento do link da página inicial padrão.';
$string['defaulthomepageontopsetting'] = 'Página inicial padrão no topo';
$string['defaulthomepageontopsetting_desc'] = 'Ao marcar esta configuração, o link da página inicial padrão (Painel ou Página inicial do site) sempre estará localizado na parte superior da gaveta de navegação. Por padrão, este já é o caso em todas as páginas do Moodle, exceto nas páginas dos cursos. Lá, o curso atual e seu conteúdo são colocados no topo. Isso pode quebrar as expectativas do usuário quanto ao posicionamento do link da página inicial padrão.';
$string['designsettings'] = 'Configurações de Design';
$string['faviconsetting_desc'] = 'Você pode enviar uma imagem (formato .ico ou .png) que o navegador irá mostrar como o favicon do seu site Moodle.';
$string['fontdesignheadingsetting'] = 'Fontes';
$string['fontfilessetting'] = 'Arquivos de fontes';
$string['fontfilessetting_desc'] = 'Nesta área de arquivos, você pode enviar seus próprios arquivos de fonte. O envio é restrito aos arquivos de fonte do tipo .eot, .woff, .woff2, .ttf e .svg.


<strong>Importante:</strong> para usar as fontes carregadas dentro deste tema, você deve adicionar o código relacionado a sua área "Raw SCSS" na guia "Configurações avançadas". Um exemplo completo pode ser encontrado no arquivo README.md (dentro da pasta do plugin).';
$string['footerblocks0columnssetting'] = 'Sem blocos no rodapé';
$string['footerblocks1columnssetting'] = 'Um coluna de blocos no rodapé';
$string['footerblocks2columnssetting'] = 'Duas colunas de blocos no rodapé';
$string['footerblocks3columnssetting'] = 'Três colunas de blocos no rodapé';
$string['footerblocksheadingsetting'] = 'Blocos do rodapé';
$string['footerblockssetting'] = 'Blocos do rodapé';
$string['footerblockssetting_desc'] = 'Você pode escolher se deseja ativar a possibilidade de colocar blocos no rodapé. Se habilitado, você pode escolher entre uma, duas ou três colunas de blocos. Essas colunas são exibidas apenas em telas grandes. Em telas pequenas, as colunas serão automaticamente reduzidas a uma coluna para melhor legibilidade e layout.';
$string['footerhidehelplinksetting'] = 'Esconder o link para a documentação do Moodle';
$string['footerhidehomelinksetting'] = 'Ocultar link para a página inicial';
$string['footerhidelogininfosetting'] = 'Ocultar informações de login';
$string['footerhideusertourslinksetting'] = 'Ocultar link para redefinir o tour do usuário';
$string['footerlayoutsettings'] = 'Configurações de layout do rodapé';
$string['footerlinks_desc'] = 'Se marcado, o link não será exibido no rodapé. Se não estiver marcado (padrão), ele será mostrado.';
$string['footerlinksheadingsetting'] = 'Links de rodapé padrão';
$string['footerlinksheadingsetting_desc'] = 'O Moodle fornece alguns links padrão no rodapé: Link para a documentação do Moodle, informações de login e um link para a página inicial.<br/> Com as três configurações a seguir, você pode decidir se deseja ocultar links específicos, caso acredite que seus usuários não precisarão deles em seu site.';
$string['footnoteheadingsetting'] = 'Nota de rodapé';
$string['footnoteheadingsetting_desc'] = 'A configuração a seguir permite adicionar uma região adicional para exibir uma nota de rodapé.';
$string['footnotesetting'] = 'Nota de rodapé';
$string['footnotesetting_desc'] = 'Tudo o que você adicionar a esta área de texto será exibido no final do rodapé, em todas as páginas que renderizem o rodapé padrão do tema (para os layouts "2 colunas" e "login").<br/>
O conteúdo desta área pode ser, por exemplo, os direitos autorais, os termos de uso e o nome da sua organização.<br/>
Se você deseja remover a nota de rodapé novamente, apenas deixe em branco a área de texto.';
$string['helptextheadingsetting'] = 'Textos de ajuda';
$string['helptextmodalsetting'] = 'Mostrar textos de ajuda em um diálogo modal';
$string['helptextmodalsetting_desc'] = 'A solução padrão para exibir textos de ajuda em "popover" leva a diferentes problemas. Por exemplo, os "popovers" não são roláveis e podem ultrapassar a área de visualização da janela. <br/>
Por esta razão e com esta configuração você pode decidir que os textos de ajuda devem ser exibidos em uma caixa de texto dedicada (diálogo modal), que aparecerá no meio de a página com espaço suficiente para conter até mesmo textos de ajuda longos.';
$string['hidefooterheadingsetting'] = 'Ocultando o rodapé';
$string['hidefooteronloginpagesetting'] = 'Ocultando o rodapé na página de login';
$string['hidefooteronloginpagesetting_desc'] = 'Ao habilitar esta configuração, você pode ocultar o rodapé na página de login. Observe que isso só ocultará a seção de rodapé, não a seção de nota de rodapé (se usada).';
$string['imageareaheadingsetting'] = 'Área de imagem';
$string['imageareaheadingsetting_desc'] = 'As configurações a seguir permitem adicionar uma região adicional para exibir imagens como logotipos. Esta região será adicionada abaixo do rodapé padrão e acima da região opcional da nota de rodapé. Se as imagens forem carregadas, essa área será exibida em todos os sites que usam o layout de 2 colunas.';
$string['imageareaitemsmaxheightsetting'] = 'Altura máxima dos itens da área de imagem';
$string['imageareaitemsmaxheightsetting_desc'] = 'Com esta configuração, você pode alterar a altura em pixels das imagens enviadas. Todas as imagens terão a mesma altura máxima e sua largura será redimensionada proporcionalmente. O valor padrão é definido como 100 pixels.';
$string['imageareaitemssetting'] = 'Itens da área de imagem';
$string['imageareaitemssetting_desc'] = 'Com esta ferramenta, você pode enviar suas imagens e elas serão exibidas na área de imagem adicional. As imagens serão classificadas e exibidas em ordem alfabética pelo nome do arquivo. Para remover esta região, simplesmente exclua todas as imagens carregadas.';
$string['incoursesettingsswitchtorolepositionsetting'] = '"Mudar papel para ..." localização(ões)';
$string['incoursesettingsswitchtorolesettingboth'] = 'Em ambos os locais: no menu do usuário e nas configurações do curso';
$string['incoursesettingsswitchtorolesettingjustcourse'] = 'Apenas nas configurações do curso';
$string['incoursesettingsswitchtorolesettingjustmenu'] = 'Apenas no menu do usuário';
$string['loginbackgroundimagesetting'] = 'Imagens de fundo da página de login';
$string['loginbackgroundimagesetting_desc'] = 'As imagens carregadas nesta configuração serão exibidas aleatoriamente na página de login como imagens de fundo.';
$string['loginbackgroundimagetextsetting'] = 'Exibir texto para as imagens de fundo da página de login';
$string['loginbackgroundimagetextsetting_desc'] = 'Com esta configuração opcional, você pode adicionar, por exemplo, um texto de aviso sobre direitos autorais para suas imagens de fundo.


Cada linha consiste no identificador do arquivo (o nome do arquivo) e no texto que deve ser exibido, separados por uma barra vertical. Cada declaração precisa ser escrita em uma nova linha. Por exemplo:
<br/>
```background-image-1.jpg | Copyright: CC0```


Você pode declarar textos a uma quantidade arbitrária de suas imagens de fundo carregadas. Os textos serão adicionados apenas às imagens que correspondam a seu nome de arquivo com o identificador declarado nesta configuração.';
$string['loginform'] = 'Formulário de login';
$string['loginform_desc'] = 'Com esta configuração, você pode otimizar o formulário de login para se ajustar a uma maior variedade de imagens de fundo (se marcado). Isso significa que o formulário de login será movido para a esquerda da página de login, ficará menor em largura e receberá um fundo levemente transparente que deixa a imagem de fundo "brilhar".


O formulário de login será colocado à esquerda porque muitas imagens têm seu conteúdo principal ao centro e, portanto, mantemos esse conteúdo visível.


Nota: Você também pode ativar esta configuração se nenhuma imagem de fundo for carregada, é claro.';
$string['loginpagedesignheadingsetting'] = 'Página de login';
$string['navdrawerfullwidthsetting'] = 'Gaveta de navegação de largura total em telas pequenas';
$string['navdrawerfullwidthsettings_desc'] = 'Ao marcar esta configuração, você pode ampliar o menu da gaveta de navegação para a largura da página inteira ao ser aberto em telas pequenas. Isso pode ser desejável porque em telas pequenas apenas uma pequena parte da área de conteúdo principal em segundo plano é visível. E um menu de largura total pode atender às expectativas dos usuários sobre como os menus são exibidos em telas pequenas.';
$string['navdrawerheadingsetting'] = 'Menu da gaveta de navegação';
$string['presetheadingsetting'] = 'Predefinições de tema';
$string['region-footer-left'] = 'Rodapé (esquerda)';
$string['region-footer-middle'] = 'Rodapé (meio)';
$string['region-footer-right'] = 'Rodapé (direita)';
$string['region-side-pre'] = 'Direita';
$string['section0titlesetting'] = 'Seção 0: Título';
$string['section0titlesetting_desc'] = 'Esta configuração pode alterar o comportamento do Moodle para exibir o título da primeira seção do curso.

O Moodle não o exibe o título da primeira seção (Geral) enquanto o título padrão não for alterado. Assim que um usuário altera o título, ele passa a aparecer.

Com esta configuração (a opção está marcada), você pode obter um comportamento consistente, sempre mostrando o título da seção 0.';
$string['settingsaddablockpositionbottomblockregion'] = 'Na parte inferior da região de blocos padrão';
$string['settingsaddablockpositionbottomnavdrawer'] = 'Na parte inferior da gaveta de navegação';
$string['showhintcourseguestaccessgeneral'] = 'Você está vendo este curso como <strong>{$a->role}</strong>.';
$string['showhintcourseguestaccesslink'] = 'Para ter acesso total ao curso, você pode <a href="{$a->url}">se inscrever neste curso</a>.';
$string['showhintcourseguestaccesssetting_desc'] = 'Com esta configuração, uma dica aparecerá no cabeçalho do curso quando um usuário acessá-lo como visitante.

Se o curso fornecer uma autoinscrição ativa, um link para essa página também será apresentado ao usuário.';
$string['showhintcoursehiddengeneral'] = 'Este curso está atualmente <strong>oculto</strong>. Apenas professores matriculados podem acessar este curso quando oculto.';
$string['showhintcoursehiddensetting'] = 'Mostrar dica em cursos ocultos';
$string['showhintcoursehiddensetting_desc'] = 'Com esta configuração, uma dica aparecerá no cabeçalho do curso quando a visibilidade do curso estiver oculta.


Isso ajuda a identificar o estado de visibilidade de um curso rapidamente, sem a necessidade de examinar as configurações do curso.';
$string['showhintcoursehiddensettingslink'] = 'Você pode alterar a visibilidade nas <a href="{$a->url}">configurações do curso</a>.';
$string['showhintcoursguestaccesssetting'] = 'Mostrar dica para acesso de visitante';
$string['showsettingsincoursesetting'] = 'Menu de configurações do curso';
$string['showsettingsincoursesetting_desc'] = 'Com esta configuração, você pode alterar a exibição dos menus de contexto.

No tema Boost, há um menu de contexto "dropdown" ao lado do ícone de engrenagem.

Ao habilitar essa configuração, as opções aparecerão diretamente abaixo do cabeçalho do curso. As configurações são organizadas em guias (abas), para que seja mais fácil para o usuário chegar à configuração desejada em vez de examinar uma longa lista de itens de menu. Também ocultamos o ícone de configurações padrão na página dos participantes, pois as entradas dele são duplicadas no menu de configurações do curso e, portanto, não são necessárias.

Observe que esta alteração não afeta os usuários que desativaram o "javascript" em seus navegadores - eles ainda obterão o comportamento padrão do Moodle com um menu "dropdown" de contexto do curso.';
$string['showswitchedroleincoursesetting'] = 'Posição das informações de mudança de papel';
$string['showswitchedroleincoursesetting_desc'] = 'Com esta configuração, você pode escolher exibir informações sobre qual o papel atual do usuário.<br/>

Se não estiver marcada (valor padrão), as informações sobre o papel atual serão exibidas logo abaixo do nome do usuário no "Menu do usuário" (como no tema Boost). Se marcada, essa informação - junto com um link para voltar ao papel original - será exibida abaixo do título do curso, pois essa funcionalidade está relacionada ao curso.';
$string['sitehomeontopsetting'] = 'Item de menu inicial do site no topo';
$string['sitehomeontopsetting_desc'] = 'Ao marcar esta configuração, o item de menu "Página inicial" do site estará sempre localizado na parte superior da gaveta de navegação.<br/>
Por padrão, este já é o caso em todas as páginas do Moodle, exceto nas páginas dos cursos. Lá, o curso atual e seu conteúdo são colocados no topo. Isso pode quebrar as expectativas do usuário quanto ao posicionamento do link da página inicial.';
$string['switchedroleto'] = 'Você está visualizando este curso atualmente com o papel:';
$string['switchroleto'] = 'Mudar papel para';
$string['userdefinedontopsetting'] = 'Página inicial definida pelo usuário no topo';
$string['userdefinedontopsetting_desc'] = 'Ao marcar esta configuração, o item do menu Painel ou "Página inicial" (depende das preferências do usuário) estará sempre localizado na parte superior da gaveta de navegação.

Por padrão, este já é o caso em todas as páginas do Moodle, exceto nas páginas dos cursos. Lá, o curso atual e seu conteúdo são colocados no topo. Isso pode quebrar as expectativas do usuário quanto ao posicionamento do link da página inicial padrão.';
