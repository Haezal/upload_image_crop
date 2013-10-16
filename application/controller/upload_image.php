<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upload_image extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        $data['title']='Muat Naik Gambar Profil';
        $this->load->view('upload_images_view');
        
    }
    
    // upload function 
    public function upload($act){
        $this->load->helper('cropimage');
        
        $filePath = $this->config->item('imgthumb');
        
        if (!file_exists($filePath)) {
            mkdir($filePath, 0777, true);
        }
        
        if ($act == 'thumb') {
            $arr = array(
                'uploaddir' => $filePath,
                'tempdir' => $this->config->item('imgtemp'),
                'height' => $_POST['height'],
                'width' => $_POST['width'],
                'x' => $_POST['x'],
                'y' => $_POST['y'],
                'img_src' => $_POST['img_src'],
                'thumb' => true,
                'fileError' => $this->config->item('fileError'),
                'sizeError' => $this->config->item('sizeError'),
                'maxfilesize' => $this->config->item('maxuploadfilesize'),
                'canvasbg' => $this->config->item('canvasbg'),
            );
            resizeThumb($arr);            
            exit;
        } elseif ($act == 'upload') {

            $big_arr = array(
                'uploaddir' => $filePath,
                'tempdir' => $this->config->item('imgtemp'),
                'height' => $_POST['height'],
                'width' => $_POST['width'],
                'x' => 0,
                'y' => 0,
                'fileError' => $this->config->item('fileError'),
                'sizeError' => $this->config->item('sizeError'),
                'maxfilesize' => $this->config->item('maxuploadfilesize'),
                'canvasbg' => $this->config->item('canvasbg'),
            );

            resizeImg($big_arr);

        } else {
            //nothing to do here
        }
    }
}
?>
