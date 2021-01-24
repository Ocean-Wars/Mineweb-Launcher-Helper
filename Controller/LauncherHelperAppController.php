<?php

class LauncherHelperAppController extends AppController
{
    public function slider() {

        $this->loadModel('LauncherHelper.Info');

        $datas = $this->Info->find('all');

        $this->set(compact($datas));


        $this->set('title_for_layout', 'Launcher Slider');
    }
}