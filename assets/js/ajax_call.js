
window.AjaxCall=function(url,postdata,returnid,type,callback,returnType){
    //dalert(url+postdata+returnid+type+callback+returnType);  
  
    $.ajax
    ({
        type: "POST",
        url: url,
        beforeSend: function()
        {    
            if((type=="class")&&(!empty(returnid))){                    
                 $("."+returnid).html("<img  height='25%' src='"+base_url+"assets/img/loading.gif'>");
            }else if(!empty(returnid)){
               $("#"+returnid).html("<img height='25%' src='"+base_url+"assets/img/loading.gif'>");      
            }
        },
        data:postdata,
        cache: false,
        success: function(html)
        {
            if(empty(returnType)){
                if((type=="class")&&(!empty(returnid))){
                    $("."+returnid).html("");
                    $("."+returnid).html(html);
                }else if(!empty(returnid)){
                    $("#"+returnid).html("");
                    $("#"+returnid).html(html);
                }
                $(document).ready(function(){                      
                    if(!empty(callback)){
                        $("#callback").html("<script>"+callback+"</script>");
                    }
                });
            }else{
                 
                //alert(html);
                if(returnType=="alert"){
                   //$.jGrowl(html, { header: 'Info' });  
                   alert(html);
                }else if(returnType=="alert"){
                    alert(html);
                }else if(html.search("<script>")>=0){
                    $("#callback").html(html);
                }else if(returnType=="returnType"){
                     $("#returnType").html(html);
                }else{
                    $("#"+returnType).html(html);
                }
                $(document).ready(function(){                      
                    if(!empty(callback)){
                        $("#callback").html("<script>"+callback+"</script>");
                    }
                });
            }
        },
        error:function (e, XHR, options){
            if(e.status==0){
                alert('You are offline!!\n Please Check Your Network.');
            }else if(e.status==404){
                alert('Requested URL not found.');
            }else if(e.status==500){
                alert('Internel Server Error.');
            }else if(e.status=='parsererror'){
                alert('Error.\nParsing JSON Request failed.');
            }else if(e.status=='timeout'){
                alert('Request Time out.');
            }else if(e.status==789){
                alert('Authentication failed or Permission denied.');
            }else {
                alert("Server is not responding. Data is not saved.Please re-login.");
            }
        }
    });
};