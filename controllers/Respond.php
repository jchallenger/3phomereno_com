<?php
class Respond extends My_controller{
    public function submit_message(){
        if(!$this->input->post('email') || !$this->input->post('message')){
            $this->output_json("Invalid Parameters", 500);
            return;
        }
        if($this->input->post('honey')){
            $this->output_json("Message was not sent");
            return;
        }

        $body = 
            "You received a new message!\n\n" .
            "------------------------------------------------------\n" .
            "From:   " . $this->input->post('name') . "\n" .
            "Email:  " . $this->input->post('email') . "\n" .
            "Number: " . $this->input->post('phone') . "\n\n" .
            "------------------------------------------------------\n" .
            $this->input->post('message') . 
            "\n\n" .
            "------------------------------------------------------\n\n" .
            "--------------------End of Message--------------------";
        

        $this->mail->Subject = "3P Home Reno - New Message!";
        $this->mail->setFrom("no-reply@3phomerenovations.com", "Auto Message Forwarder");
        $this->mail->addReplyTo($this->input->post('email'));
        $this->mail->addAddress("phil@3phomerenovations.com");
        $this->mail->addCC("info@justinchallenger.ca");
        $this->mail->Body = $body;

        $this->mail->send();
        
        $this->output_json("Success");
    }
}
