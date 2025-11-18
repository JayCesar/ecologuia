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
 * Strings for component 'auth_oidc', language 'pt_br', version '3.6'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cfg_autoappend_key'] = 'Anexar automaticamente';
$string['cfg_clientid_key'] = 'ID do cliente';
$string['cfg_customicon_desc'] = 'Se você preferir utilizar seu próprio ícone, faça o upload aqui. Com isso, qualquer ícone escolhido acima será substituído.<br /><br /><b>Observações sobre o uso de ícones personalizados:</b><ul><li>Esta imagem <b>não</b> será redimensionada na página de login, por isso, recomendamos o upload de uma imagem de até 35x35 pixels.</li><li>Se você carregou um ícone personalizado e deseja voltar para um ícone padrão, clique no ícone personalizado na caixa acima, clique em "Excluir" e, em seguida, clique em "OK" e em "Salvar alterações" na parte inferior desse formulário. O ícone padrão que foi selecionado irá aparecer na página de login do Moodle.</li></ul>';
$string['cfg_customicon_key'] = 'Ícone personalizado';
$string['cfg_debugmode_desc'] = 'Se habilitado, informações que podem ajudar na identificação de problemas serão registradas no log do Moodle.';
$string['cfg_debugmode_key'] = 'Gravar mensagem de depuração';
$string['cfg_domainhint_key'] = 'Dica de domínio';
$string['cfg_err_invalidauthendpoint'] = 'Endpoint de autorização inválido';
$string['cfg_err_invalidclientid'] = 'ID do cliente inválido';
$string['cfg_err_invalidclientsecret'] = 'Senha do cliente inválida';
$string['cfg_err_invalidtokenendpoint'] = 'Token do Endpoint inválido';
$string['cfg_icon_desc'] = 'Um ícone que será exibido ao lado do nome do provedor da página de login.';
$string['cfg_icon_key'] = 'Ícone';
$string['cfg_iconalt_check'] = 'Ícone de marca de seleção';
$string['cfg_iconalt_go'] = 'Círculo verde';
$string['cfg_iconalt_group'] = 'Ícone do grupo';
$string['cfg_iconalt_group2'] = 'Ícone do grupo alternativo';
$string['cfg_iconalt_key'] = 'Ícone de chave';
$string['cfg_iconalt_lock'] = 'Ícone de cadeado';
$string['cfg_iconalt_locked'] = 'Ícone bloqueado';
$string['cfg_iconalt_mnet'] = 'Ícone MNET';
$string['cfg_iconalt_plus'] = 'Ícone de adição';
$string['cfg_iconalt_rightarrow'] = 'Ícone de seta para a direita';
$string['cfg_iconalt_stop'] = 'Círculo vermelho';
$string['cfg_iconalt_user'] = 'Ícone do usuário';
$string['cfg_iconalt_user2'] = 'Ícone do usuário alternativo';
$string['cfg_iconalt_userlock'] = 'Usuário com ícone de cadeado';
$string['cfg_opname_desc'] = 'Esta é a etiqueta voltada para o usuário final que identifica o tipo de credenciais que o usuário deve usar para fazer login. Este rótulo é usado em todas as partes deste plugin voltadas para o usuário, para a identificação do seu provedor.';
$string['cfg_redirecturi_key'] = 'URI de redirecionamento';
$string['cfg_userrestrictions_key'] = 'Restrições de usuário';
$string['errorauthdisconnectemptypassword'] = 'A senha não pode estar vazia';
$string['errorauthdisconnectemptyusername'] = 'O nome de usuário não pode estar vazio';
$string['errorauthdisconnectifmanual'] = 'Se estiver usando o método de login manual, insira as credenciais abaixo.';
$string['errorauthdisconnectinvalidmethod'] = 'Método de login inválido recebido.';
$string['errorauthdisconnectnewmethod'] = 'Usar método de login';
$string['errorauthdisconnectusernameexists'] = 'Esse nome de usuário já está em uso. Por favor, escolha um diferente.';
$string['errorauthgeneral'] = 'Ocorreu um problema ao fazer login. Entre em contato com o administrador para obter assistência.';
$string['errorauthinvalididtoken'] = 'ID_token inválido recebido.';
$string['errorauthloginfailednouser'] = 'Login inválido: Usuário não encontrado no Moodle. Se este site tiver a configuração "authpreventaccountcreation" habilitada, isso pode significar que você precisa de um administrador para criar uma conta para você primeiro.';
$string['errorauthnoauthcode'] = 'Nenhum código de autorização foi recebido do servidor de identidade. Os logs de erro podem ter mais informações.';
$string['errorauthnohttpclient'] = 'Defina um cliente HTTP.';
$string['errorauthnoidtoken'] = 'OpenID Connect id_token não recebido.';
$string['errorauthunknownstate'] = 'Estado desconhecido.';
$string['errorauthuseralreadyconnected'] = 'Você já está conectado a um usuário OpenID Connect diferente.';
$string['errorauthuserconnectedtodifferent'] = 'O usuário OpenID Connect autenticado já está conectado a um usuário Moodle.';
$string['errorbadloginflow'] = 'Tipo de autenticação especificada inválida. Note: Se você estiver recebendo isso após uma instalação ou atualização, limpe seu cache no Moodle.';
$string['errorinvalidredirect_message'] = 'Você está tentando redirecionar para um URL que não existe.';
$string['errorjwtbadpayload'] = 'Não foi possível ler o payload JWT.';
$string['errorjwtcouldnotreadheader'] = 'Não foi possível ler o cabeçalho JWT.';
$string['errorjwtempty'] = 'JWT recebido vazio ou sem string.';
$string['errorjwtinvalidheader'] = 'Cabeçalho JWT inválido.';
$string['errorjwtmalformed'] = 'JWT recebido inválido.';
$string['errorjwtunsupportedalg'] = 'JWS Alg ou o JWE não suportado.';
$string['errornodisconnectionauthmethod'] = 'Não é possível desconectar pois não há nenhum plugin de autenticação habilitado para o qual retornar. (O método de login anterior do usuário ou o método de login manual).';
$string['erroroidccall'] = 'Erro no OpenID Connect. Verifique os registros para obter mais informações.';
$string['erroroidccall_message'] = 'Erro no OpenID Connect: {$a}';
$string['erroroidcclientinsecuretokenendpoint'] = 'O Endpoint do token deve estar usando SSL/TLS para isso.';
$string['erroroidcclientinvalidendpoint'] = 'URI do Endpoint recebido é inválido.';
$string['erroroidcclientnoauthendpoint'] = 'Nenhum endpoint de autorização definido. Por favor, defina com $this->setendpoints';
$string['erroroidcclientnocreds'] = 'Defina as credenciais do cliente com setcreds';
$string['erroroidcclientnotokenendpoint'] = 'Nenhum token endpoint definido. Por favor, defina com $this->setendpoints';
$string['erroroidcnotenabled'] = 'O plugin de autenticação OpenID Connect não está habilitado.';
$string['errorrestricted'] = 'Este site tem restrições em vigor sobre os usuários que podem fazer login com o OpenID Connect. Essas restrições atualmente impedem que você conclua essa tentativa de login.';
$string['errorucpinvalidaction'] = 'Ação inválida recebida.';
$string['event_debug'] = 'Mensagem de depuração';
$string['eventuserauthed'] = 'Usuário autorizado com o OpenID Connect';
$string['eventuserconnected'] = 'Usuário conectado com o OpenID Connect';
$string['eventusercreated'] = 'Usuário criado com o OpenID Connect';
$string['eventuserdisconnected'] = 'Usuário desconectado do OpenID Connect';
$string['eventuserloggedin'] = 'Usuário conectado com o OpenID Connect';
$string['oidc:manageconnection'] = 'Permitir conecxão e desconexão OpenID';
$string['oidc:manageconnectionconnect'] = 'Permitir conexão OpenID';
$string['oidc:manageconnectiondisconnect'] = 'Permitir desconexão OpenID';
$string['pluginname'] = 'OpenID Connect';
$string['privacy:metadata:auth_oidc'] = 'Autenticação do OpenID Connect';
$string['privacy:metadata:auth_oidc_prevlogin:method'] = 'Método de login anterior';
$string['privacy:metadata:auth_oidc_prevlogin:password'] = 'O campo de senha de usuário anterior (criptografado).';
$string['privacy:metadata:auth_oidc_prevlogin:userid'] = 'ID do usuário do Moodle';
$string['privacy:metadata:auth_oidc_token'] = 'Tokens OpenID Connect';
$string['privacy:metadata:auth_oidc_token:authcode'] = 'O código de autenticação para o token';
$string['privacy:metadata:auth_oidc_token:expiry'] = 'O token está expirado';
$string['privacy:metadata:auth_oidc_token:oidcuniqid'] = 'O identificador de usuário exclusivo do OIDC.';
$string['privacy:metadata:auth_oidc_token:oidcusername'] = 'O nome de usuário do usuário OIDC';
$string['privacy:metadata:auth_oidc_token:scope'] = 'O escopo do token';
$string['privacy:metadata:auth_oidc_token:token'] = 'O token';
$string['privacy:metadata:auth_oidc_token:userid'] = 'O ID do usuário do Moodle';
$string['privacy:metadata:auth_oidc_token:username'] = 'O nome de usuário do usuário no Moodle';
$string['ucp_disconnect_details'] = 'Isso desconectará sua conta do Moodle de {$a}. Você precisará criar um nome de usuário e senha para fazer login no Moodle.';
$string['ucp_disconnect_title'] = '{$a} Desconectado';
$string['ucp_general_intro'] = 'Aqui você pode gerenciar sua conexão com {$a}. Se habilitado, você poderá usar sua conta {$a} para fazer login no Moodle em vez de um nome de usuário e senha separados. Uma vez conectado, você não precisará mais se lembrar de um nome de usuário e senha para o Moodle, todos os logins serão manipulados por {$a}.';
$string['ucp_login_start'] = 'Comece a usar {$a} para fazer login no Moodle';
$string['ucp_login_start_desc'] = 'Isso mudará sua conta para usar {$a} para fazer login no Moodle. Uma vez habilitado, você fará login usando suas credenciais {$a} - seu nome de usuário e senha atuais do Moodle não funcionarão. Você pode desconectar sua conta a qualquer momento e voltar a fazer login normalmente.';
$string['ucp_login_status'] = '{$a} login é:';
$string['ucp_login_stop'] = 'Pare de usar {$a} para fazer login no Moodle';
$string['ucp_login_stop_desc'] = 'No momento, você está usando {$a} para fazer login no Moodle. Clicar em "Parar de usar {$a} login" desconectará sua conta do Moodle de {$a}. Você não poderá mais fazer login no Moodle com sua conta {$a}. Você será solicitado a criar um nome de usuário e senha e, a partir de então, poderá fazer login no Moodle diretamente.';
$string['ucp_status_disabled'] = 'Desabilitado';
$string['ucp_status_enabled'] = 'Habilitado';
$string['ucp_title'] = '{$a} Gestão';
