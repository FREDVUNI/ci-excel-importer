<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Welcome_model');
	}
	public function index()
	{
		$data['item'] = $this->Welcome_model->items();
		$this->load->view('index',$data);
	}

	public function import()
	{
		if ($this->input->post('submit')) {
			$path = 'uploads/';
			require_once APPPATH . "/third_party/PHPExcel.php";
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'xlsx|xls|csv';
			$config['remove_spaces'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);            
			if (!$this->upload->do_upload('uploadFile')) {
			$error = array('error' => $this->upload->display_errors());
			} else {
			$data = array('upload_data' => $this->upload->data());
			}
			if(empty($error)){
			if (!empty($data['upload_data']['file_name'])) {
			$import_xls_file = $data['upload_data']['file_name'];
			} else {
			$import_xls_file = 0;
			}
			$inputFileName = $path . $import_xls_file;
			try {
			$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
			$objReader = PHPExcel_IOFactory::createReader($inputFileType);
			$objPHPExcel = $objReader->load($inputFileName);
			$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
			$flag = true;
			$i=0;
			foreach ($allDataInSheet as $value) {
			if($flag){
			$flag =false;
			continue;
			}	
			$inserdata[$i]['item_code'] = $value['A'];
			$i++;
			}               
			$result = $this->import->insert($inserdata);   
			if($result){
			echo "Imported successfully";
			}else{
			echo "ERROR !";
			}             
			} catch (Exception $e) {
			die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
			. '": ' .$e->getMessage());
			}
			}else{
			echo $error['error'];
			}
			}
			redirect(base_url()."/");
			}
			public function imports()
			{
				error_reporting(E_ALL & ~E_NOTICE);

				if (isset($_FILES["file"]["name"])) {
					$path = $_FILES["file"]["tmp_name"];
					PHPExcel_Settings::setZipClass(PHPExcel_Settings::PCLZIP);
		
					$object = PHPExcel_IOFactory::load($path);
					foreach ($object->getWorksheetIterator() as $worksheet) {
						$highestRow = $worksheet->getHighestRow();
						$highestColumn = $worksheet->getHighestColumn();
						for ($row = 2; $row <= $highestRow; $row ++) {
							$item_code = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
							$item_name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
							$sku = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
							$purchase = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
							$profit_margin = $worksheet->getCellByColumnAndRow(2, $row)->getValue();

		
							$params = array(
								'item_code' => $item_code,
								'item_name' => $item_name,
								'sku' => $sku,
								'purchase_price' => $purchase,
								'profit_margin' => $profit_margin,
							);
							$this->Welcome_model->save($params);
						}
					}
				}
				redirect('/');
			}	

}
