<?php


class LauncherHelper extends LauncherHelperAppController
{
    public function slider()
    {
        if ($this->isConnected and $this->User->isAdmin()) {
            $this->loadModel('LauncherHelper.Info');
            $datas = $this->Info->get();
            $this->set(compact($datas));
            $this->set('title_for_layout', 'Launcher Slider');
        } else {
            $this->redirect('/');
        }
    }

    public function delete() {
        if ($this->isConnected and $this->User->isAdmin()) {
            $this->autoRender = null;

            $this->loadModel('Tutorial.Info');

            //J'utilise _delete() car delete() existe déjà avec cakephp
            $this->Info->_delete($id);

            //Redirection vers notre page
            $this->redirect('/admin/tutorial');
        } else {
            $this->redirect('/');
        }
    }
}