<?php
class Pages extends CI_Controller {

		  public function index($page = NULL)
        {
        if(isset($_SESSION['company_account'])){
        $data= array(''); 
        $data['title'] = ucfirst($page); // Capitalize the first letter 
        $data['company_id'] = $_SESSION['company_account']['company_id'];
        $data['company_ads'] = $this->Usecase->company_ad($data['company_id'] );
         $data['app_page_layout']='app/app_page/index';    
         $this->load->view('app/app_page_layout', $data);
        }
          else{
                redirect(base_url().'app/login', 'refresh'); 
        }
        }

        public function view($page = NULL)
        {
            if(isset($_SESSION['company_account'])){
                $data= array(''); 

                $data['title'] = ucfirst($page); // Capitalize the first letter 
                $data['company_id'] = $_SESSION['company_account']['company_id'];

                 // get reason for visit in text dictionary  
                 $data['reason_for_visits']=$this->Usecase->get_text_dico_entry($data['company_id'], 1);

                 $data['page_layout']='pages/'.$page;    
                 $this->load->view('page_layout', $data);
              }
              else{
                    redirect(base_url().'login', 'refresh'); 
            }
        }


      
         public function component($page = NULL)
        {
        $data= array(''); 
        $data['title'] = ucfirst($page); // Capitalize the first letter 
         // $data['page_layout']='pages/'.$page;    
         $this->load->view('general/headtag', $data);
         $this->load->view('pages/'.$page, $data);
         $this->load->view('general/foottag', $data);
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
            $this->email->from($_REQUEST['email'], 'Sidenergy Contact Form');
            $this->email->to('o.abdulkadir@sidenergy.com');
            $this->email->subject('Contact'.$_REQUEST['subject']);
            $this->email->message('<b>Name:</b>'.$_REQUEST['name'].'<b>Email:</b>'.$_REQUEST['email'].'<br/><b>Message:</b> '.$_REQUEST['message'].'<br/><br/><i>This mail was generated from contact form on the webpage</i>');
            // enable on live
            $this->email->send();
            
            $data['post_response'] = '<span class="alert alert-success">Contact successfuly established, we would get in touch soon</span>';
            echo json_encode(['success'=>$data['post_response']]);
        }

        }

        }


        function staffmail(){
            redirect('https://sso.secureserver.net/login?app=email&realm=pass', 'refresh');
        }


        function page_not_found(){
         $data['page_layout']='pages/404';    
         $this->load->view('page_layout', $data);

        }
      
    }
?>