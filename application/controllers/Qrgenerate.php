<?php
/**
 * 
 */
class Qrgenerate extends CI_Controller
{
	
	public function qrconvert()
	{
		// echo $this->input->get('my_id');
	$URL = base_url().'convertqr'; //http://myhost/main
	$params   = $_SERVER['QUERY_STRING']; //my_id=1,3
	$qrdata = $URL . '?' . $params;
	// load the qr library
	$this->load->library('phpqrcode/ciqrcode');
		// generate qr code 
			// save PNG qr codes to server
	$tempDir =  'upload/';
	$codeContents = $qrdata;
	// we need to generate filename somehow, 
	// with md5 or with database ID used to obtains $codeContents...
	$fileName = 'qrvms'.md5($qrdata).'.png';

	$pngAbsoluteFilePath = $tempDir.$fileName;

		$data['urlRelativeFilePath'] = base_url().'upload/'.$fileName;
		// generating qr code
		QRcode::png($qrdata, $pngAbsoluteFilePath);

		$this->load->view('welcome_message', $data);

	}


	public function qrdata(){


		$data['qrdata'] = array(
						'name' => $this->input->get('name'), 
						'email' => $this->input->get('email'),
						'mobile' => $this->input->get('mobile')
					);  
         $this->load->view('qrdata', $data);	
     }

    public function qrscan(){

    	$data = array();

         $this->load->view('qrscan', $data);	
    }
}