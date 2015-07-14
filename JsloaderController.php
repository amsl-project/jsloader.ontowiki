<?php

/**
 * This file is part of the {@link http://amsl.technology amsl} project.
 *
 * @author Sebastian Nuck
 * @copyright Copyright (c) 2015, {@link http://ub.uni-leipzig.de Leipzig University Library}
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License (GPL)
 */

require_once realpath(dirname(__FILE__)) . '/classes/ElasticsearchHelper.php';
require_once realpath(dirname(__FILE__)) . '/classes/ElasticsearchUtils.php';
require_once realpath(dirname(__FILE__)) . '/classes/IndexServiceConnector.php';

class JsloaderController extends OntoWiki_Controller_Component
{
   /**
     * Nothing to view.
     */
    public function viewAction()
    }
    {

}
