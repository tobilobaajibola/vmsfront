<?php
/**
 * 
 */
class Faqs extends CI_Controller
{
	
	function get_faqs()
	{
		$data=array('');
        $data['page_description']="";
        $data['page_keywords']="";
        $data['title']="Frequently Asked Questions";
		$data['list_faq']=$this->Faq->get_faq();
		$data['list_faq_category']=$this->Faq->get_faq_category();
		$data['page_layout']='pages/faq';
        $this->load->view('page_layout', $data);

	}
}
?>