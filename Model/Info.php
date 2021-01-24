<?php
class Info extends LauncherHelperAppModel
{
    public function get() {
        return $this->find('all');
    }
}