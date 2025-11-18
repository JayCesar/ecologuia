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
 * Strings for component 'block_cohortspecifichtml', language 'pt_br', version '3.6'.
 *
 * @package     block_cohortspecifichtml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortselection'] = 'Mostrar para as coortes';
$string['cohortselection_help'] = 'O bloco será exibido apenas para os membros de pelo menos um coorte selecionado. Isso significa que, se você selecionou, por exemplo, dois coortes e um usuário é membro de apenas um deles, o bloco será exibido para ele, pois ele faz parte de pelo menos um coorte selecionado. Isso é equivalente a uma conexão OR.';
$string['invertcohortselection'] = 'Inverter a seleção (ocultar para os coortes selecionados)';
$string['invertcohortselection_help'] = 'Com essa configuração você pode inverter sua seleção. Isso significa que o bloco não será exibido para os membros do coorte selecionado, mas para todos os outros.<br/> Exemplos: <ul> <li>Se um usuário corresponde a pelo menos um dos coortes selecionados, o bloco não será exibido para ele, mesmo que ele também seja membro de um coorte que não foi selecionado.</li> <li>Se você não selecionou nenhum coorte e inverter essa seleção, o bloco será visível para <strong>todos</strong> os usuários.</li></ul>';
$string['nocohorts'] = 'Nenhum coorte ainda foi definido. Sem nenhum coorte<strong>o bloco não será visível</strong> para ninguém, mesmo que você tenha inserido conteúdo acima. <br/> Os coortes podem ser gerenciados na <a href="{$a->url}">administração do site</a>.';
$string['notvisibletocohorts'] = '<br/><strong>Não</strong> visível para os coortes:';
$string['resetcohortselection_help'] = 'Se você ativar e salvar esta configuração, a seleção que você fez será redefinida. Isso significa que nenhum coorte será selecionado. Infelizmente, essa solução é necessária, pois desmarcar todos os coortes não resultaria em nenhuma alteração, já que um resultado vazio é enviado ao servidor. <br/> Se você abrir a configuração do bloco novamente, essa configuração será redefinida e não será exibida, pois não há mais nada que possa ser redefinido.';
$string['visibletocohorts'] = '<br/><strong>Apenas</strong> visível para coortes:';
