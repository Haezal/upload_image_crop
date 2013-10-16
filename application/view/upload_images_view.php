<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable=no>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload Image And Crop</title>
    <script>
        var base_url = '<?php echo base_url()?>';
    </script>
    
    <!-- style for images uploading and crop -->
    <link href="<?php echo base_url()?>assets/css/imgareaselect-animated.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/imgareaselect-default.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/imgareaselect-deprecated.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet">
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.8.2.min.js"></script>

    
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.imgareaselect.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/effects.js"></script>
  
  </head>
<!-- NAVBAR
================================================== -->
  <body>


<div class="panel panel-primary">
    <div class="panel-body">
        <!-- first step upload image begin -->
        <h4>Langkah 1 : Pilih Gambar</h4>
        <div id="big_uploader">
            <form name="upload_big" id="upload_big" class="uploaderForm" method="post" enctype="multipart/form-data" action="<?php echo site_url('user/upload/upload');?>" target="upload_target">
                
                <div class="fileWrapper">
                    <a class="btn btn-primary">Klik Disini Untuk Pilih Gambar</a>
                    <input name="photo" id="file" class="fileInput" size="27" type="file" />	
                </div>
                <input type="hidden" name="width" value="<?php echo $this->config->item('canvasWidth');?>" />
                <input type="hidden" name="height" value="<?php echo $this->config->item('canvasHeight');?>" />              
                <input type="submit" name="action" value="Upload Image now" class="inputSubmit" />
            </form>
            <div id="notice" class="notice">Sedang Memuat Naik...</div>
        </div>
        <!-- first step upload image end -->
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
                <h4>Langkah 2 : Potong Gambar Mengikut Kesesuaian</h4>
                <div id="div_upload_big" style="width:<?php echo $this->config->item('bigWidthPrev');?>px;height:<?php echo $this->config->item('bigHeightPrev');?>px;"></div>
                <div class="uploadThumbWrapper">
                    
                    <form name="upload_thumb" id="upload_thumb" class="uploaderForm" method="post" action="<?php echo site_url('user/upload/thumb');?>" target="upload_target">
                        <input type="hidden" name="img_src" id="img_src" class="img_src" /> 
                        <input type="hidden" name="height" value="0" id="height" class="height" />
                        <input type="hidden" name="width" value="0" id="width" class="width" />
                        <input type="hidden" id="y1" class="y1" name="y" />
                        <input type="hidden" id="x1" class="x1" name="x" />
                        <input type="hidden" id="y2" class="y2" name="y1" />
                        <input type="hidden" id="x2" class="x2" name="x1" />                         
                        <input type="submit" value="Simpan" class="inputSubmit" />
                    </form>
                    <div id="notice2" class="notice">Gambar Profil Sedang Dimuat Naik. Sila Tunggu...... </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4>Lihat Potongan Gambar</h4>
                <div id="preview"></div>
            </div>
        </div>
                
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-body">
        <h4>Gambar Profil</h4>
        <div id="div_upload_thumb"></div>
    </div>
</div>        
    <!--<div class="content">-->
        <!-- third step generated thumb begin -->
        <!--<div id="thumbnail">-->
            <!--<div class="thumbWrapper" style="width:<?php echo $this->config->item('bigWidthPrev')?>px;height:<?php echo $this->config->item('bigHeightPrev');?>px;">-->
                
            <!--</div>-->
<!--            <div class="detailWrapper">
                <h3>Selection / thumbnail details</h3>
                <div id="details">
                    <table width="360" cellpadding="4" cellspacing="0">
                        <tr>
                            <td>Image source:</td>
                            <td><input type="text" name="img_src" class="img_src" size="40" value="" /></td>
                        </tr>
                        <tr>
                            <td>Width:</td>
                            <td><input type="text" name="width" class="width" size="5" value="" /></td>
                        </tr>
                        <tr>
                            <td>Height:</td>
                            <td><input type="text" name="height" class="height" size="5" value="" /></td>
                        </tr>
                        <tr>
                            <td>X1:</td>
                            <td><input type="text" class="x1" size="5" value="" /></td>
                        </tr>
                        <tr>
                            <td>Y1:</td>
                            <td><input type="text" class="y1"  size="5" value="" /></td>
                        </tr>
                        <tr>
                            <td>X2:</td>
                            <td><input type="text" class="x2" size="5" value="" /></td>
                        </tr>
                        <tr>
                            <td>Y2:</td>
                            <td><input type="text" class="y2" size="5" value="" /></td>
                        </tr>
                    </table>
                </div>
            </div>-->
        <!--</div>-->
        <!-- third step generated thumb end -->

    <!--</div>-->
    <p>
        <a href="<?php echo site_url('user')?>" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
    </p>
    
    <!-- hidden iframe begin -->
    <iframe id="upload_target" name="upload_target" src=""></iframe>
    <!-- hidden iframe end -->

</body>
</html>
