<?php

/**
 * This file is part of the {@link http://ontowiki.net OntoWiki} project.
 *
 * @copyright Copyright (c) 2013, {@link http://aksw.org AKSW}
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License (GPL)
 */

require_once realpath(dirname(__FILE__)) . '/classes/ElasticsearchHelper.php';
require_once realpath(dirname(__FILE__)) . '/classes/ElasticsearchUtils.php';
require_once realpath(dirname(__FILE__)) . '/classes/IndexServiceConnector.php';

/**
 * Fulltextsearch component controller.
 *
 * @category   OntoWiki
 * @package    Extensions_Fulltextsearch
 * @author     Sebastian Nuck
 * @copyright  Copyright (c) 2014, {@link http://aksw.org AKSW}
 * @license    http://opensource.org/licenses/gpl-license.php GNU General Public License (GPL)
 */
class JsloaderController extends OntoWiki_Controller_Component
{


    /**
     * Displays an information page.
     * @return [type]
     */
    public function viewAction()
    {
    }

}
