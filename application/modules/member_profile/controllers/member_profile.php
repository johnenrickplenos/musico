<?php

/* Created by John Enrick Pleños */
class Member_profile extends FE_Controller{
    public function index(){
        if(!$this->input->post("load_module")){
            $this->loadPage("member_profile");
        }else{
            $this->loadModule("member_profile", "member_profile_script");
        }
    }
    
    public function homeTab(){
        $this->loadModule("home_tab", "home_tab_script");
    }
    public function aboutTab(){
        $this->loadModule("about_tab", "about_tab_script");
    }
    public function videoTab(){
        $this->loadModule("video_tab", "video_tab_script");
    }
}
