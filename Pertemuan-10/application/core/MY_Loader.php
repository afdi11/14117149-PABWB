<?php
class MY_Loader extends CI_Loader {
    public function template($template_name)
    {
        $this->view('common/header');
        $this->view($template_name);
        $this->view('common/footer');
    }
}
?>