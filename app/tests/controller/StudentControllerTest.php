<?php

    class StudentControllerTest extends TestCase{

        function testLoadingSayhello(){

        $this->call('GET','student/sayhello');
        $this->assertResponseOk();
    }
    }

?>