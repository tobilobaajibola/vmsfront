<?php
/**
 * 
 */
class Boxes extends CI_controller
{
	
	 function visitortags($checkin_id)
	{
		$visitor_id = '';
		$data['visitor_tag_data'] = $this->Visitor->view_visitor_tag($checkin_id);
         $this->load->view('pages/visitor_tag', $data);
	}


	function qrcode_scan(){
	 if(isset($_SESSION['company_account'])){
		$company_code= $_SESSION['company_account']['company_code'];
		$data['company_data'] = $this->Account->login_company($company_code);

		$this->load->library('phpqrcode/ciqrcode');
		// generate qr code 
			// save PNG qr codes to server
		$tempDir =  'assets/images/qrcode/';
		// $codeContents = $ticket_num;
		$qrcode= random_string('alnum', 9);
		$codeContents = base_url().'qrvalidate/'.$qrcode;
	    // we need to generate filename somehow, 
		// with md5 or with database ID used to obtains $codeContents...
		$fileName = 'qrvms'.md5($codeContents).'.png';

		$pngAbsoluteFilePath = $tempDir.$fileName;

		$data['urlRelativeFilePath'] = base_url().'assets/images/qrcode/'.$fileName;
		// generating qr code
		QRcode::png($codeContents, $pngAbsoluteFilePath);

		// delete the current qr code
		if(!empty($data['company_data']['qrcode'])){
		unlink('assets/images/qrcode/'.$data['company_data']['qrcodefile']);
		}
		//update table a new qrode
		$company_data = array('qrcodefile' => $fileName,
							  'qrcode' =>  $qrcode,
							  'company_code' => $data['company_data']['company_code'] );
		$this->Account->update_company($company_data);
		echo '<img src="'.$data['urlRelativeFilePath'].'" style="width:100%; height:auto; border-radius:60px; padding:20px"/>';
		// echo $qrcode;
	}
}
}
?>