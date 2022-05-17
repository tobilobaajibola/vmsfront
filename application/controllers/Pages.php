<?php
class Pages extends CI_Controller {

		  public function index($page = NULL)
        {
       
        $data= array(''); 
        $data['title'] = ucfirst($page); // Capitalize the first letter 
         $data['page_layout']='pages/index';    
         $this->load->view('page_layout', $data);
        }

        public function view($page = NULL)
        {
        $data= array(''); 
        $data['title'] = ucfirst($page); // Capitalize the first letter 
         $data['page_layout']='pages/'.$page;    
         $this->load->view('page_layout', $data);
        }

        public function pricing(){
            $data= array(''); 
            $data['title'] = ucfirst('Pricing'); // Capitalize the first letter 
            $data['list_subscription'] = $this->Subscription->list_subcription_category();
            $data['page_layout']='pages/pricing';    
            $this->load->view('page_layout', $data);
        }

        public function login($page = NULL)
        {
        $data= array(''); 
        $data['title'] = ucfirst($page); // Capitalize the first letter 
            
         $this->load->view('general/headtag');
         $this->load->view('pages/login');
         $this->load->view('general/foottag');
        }


        function contact($page = 'contact')
        {
            $data= array(''); 
        $data['title'] = ucfirst($page); // Capitalize the first letter 
         $data['page_layout']='pages/contact';    
         $this->load->view('page_layout', $data);

        }


         function contact_forms()
        {
            // ajax contact form submission
            $data= array(''); 
        if($_POST){
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');
        if ($this->form_validation->run() == FALSE) {
         $data['error']=validation_errors();    
            echo json_encode(['error'=>$data['error']]);
        }
        else{
            $this->email->from('info@vistacks.com', 'Vistacks Contact Form');
            $this->email->to('ajibolatobiloba@gmail.com');
            $this->email->subject($this->input->post('subject'));
            $this->email->message('<b>Name:</b>'.$_REQUEST['name'].'<b>Email:</b>'.$_REQUEST['email'].'<br/><b>Message:</b> '.$_REQUEST['message'].'<br/><br/><i>This mail was generated from contact form on the webpage</i>');
            // enable on live
            $this->email->send();
            
            $data['post_response'] = '<span class="alert alert-success">Contact successfuly established, we would get in touch soon</span>';
            echo json_encode(['success'=>$data['post_response']]);
        }

        }

        }




        function page_not_found(){
         $data['page_layout']='pages/404';    
         $this->load->view('page_layout', $data);

        }
      
    }
?>