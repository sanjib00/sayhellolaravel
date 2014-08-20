<?php

    class StudentController extends BaseController{

        public function sayhello(){
            return View::make('student/sayhello');
        }
    }

?>