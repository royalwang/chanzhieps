<?php
/**
 * The control file of admin module of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     LGPL
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     admin
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
class admin extends control
{
    /**
     * The index page of admin panel, print the sites.
     * 
     * @access public
     * @return void
     */
    public function index()
    {
        $this->display();
    }

    /**
     * ignore admin tip
     *
     * @access public
     * return void
     **/
    public function ignoreTips()
    {
        $result = $this->loadModel('setting')->setItems('system.common.global', array('ignoreTips' => true));
        if($result) $this->send(array('result' => 'success', 'locate' => inlink('index')));
        $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
    }
}
