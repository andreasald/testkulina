<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Owl extends REST_Controller {

  function __construct()
  {
    // Construct the parent class
    parent::__construct();
		$this->load->model('Lelang_model');
  }





  public function getAllRev_get()
  {

		$kontenData = $this->UserRev_model->GetAllDataUserRev();

  		if($kontenData != NULL)
      {
  			$message = [
  				'status' => 200,
  				'message' => 'All Konten Data Received',
          'kontenData' => $kontenData,
  			];
  		}

      else
      {
  			$message = [
  				'status' => 101,
  				'message' => 'Konten Data Retrieve Failed',
    			'kontenData' => 'Konten not Found',
  			];
  		}

		$this->set_response($message, REST_Controller::HTTP_CREATED);
	}





	public function registerreview_post(){
    $id=$this->post('id');
    $order_id=$this->post('order_id');
    $product_id=$this->post('product_id');
    $user_id=$this->post('user_id');
    $rating=$this->post('rating');
    $review=$this->post('review');
    $created_at=$this->post('created_at');
    $updated_at=$this->post('updated_at');



    $this->User_model->registerrev($id,$order_id,$product_id,$user_id,$rating,$review,$created_at,$updated_at);

    if($this->User_model->validatetarget($user_id)==1)
    {
        $message = [
		    'status'=>1,
		    'message'=>'Added Success',
		];
    }

    else
    {
        $message = [
		    'status'=>0,
		    'message'=>'Added fail',
		];
    }


    $this->set_response($message, REST_Controller::HTTP_CREATED);
	}


  public function deleteRev_delete(){
    $apikey=$this->delete('api_key');
    $id=$this->delete('id');

    if($this->UserRev_model->Authenticate($apikey)){
      $message = [
        'status'=>1,
        'message'=>'Deleted Konten',
      ];

      $this->Konten_model->DeleteKonten($id);
    }else{
      $message = [
        'status' => 101,
        'message' => 'Gagal',
      ];
    }

    $this->set_response($message, REST_Controller::HTTP_CREATED);
  }
}
