<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// factor for the real size of the uploaded image
$config['sizefactor'] = 3;

// size of the big, preview and thumb container
$config['bigWidthPrev'] = 400;
$config['bigHeightPrev'] = 200;

// canvas size for the upload image
$config['canvasWidth'] = $config['bigWidthPrev']*$config['sizefactor'];
$config['canvasHeight'] = $config['bigHeightPrev']*$config['sizefactor'];

// file type error
$config['fileError']='Filetype not allowed. Please upload again. Only GIF, JPG and PNG files are allowed.';
$config['sizeError']='File is too big. Please upload again. Maximum filesize is 1.3MB.';

// image upload folders
$config['imgthumb']='uploads/'; // folder for the uploads after cropping
$config['imgtemp']='uploads/temp/'; // temp-folder before cropping
$config['imgbig']='uploads/big/'; // folder with big uploaded images

// max file-size for upload in bytes, default: 3mb
$config['maxuploadfilesize']=3200000;

// background color of the canvas as rgb, default:white
$config['canvasbg']=array('r'=>255,'g'=>255,'b'=>255);

?>
