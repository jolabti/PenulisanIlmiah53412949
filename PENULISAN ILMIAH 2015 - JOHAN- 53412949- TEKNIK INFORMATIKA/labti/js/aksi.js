$(document).ready(function() { 
    $('.uploadForm').submit(function(e) {	
        if($('.userfile').val()) {
            e.preventDefault();
           
            $(this).ajaxSubmit({ 
                target:   '#targetLayer', 
                beforeSubmit: function() {
                    $(".progress-bar").width('0%');
                },
                uploadProgress: function (event, position, total, percentComplete){	
                    $(".progress-bar").width(percentComplete + '%');
                    $(".progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>')
                },
                success:function (){
                    alert("UPLOAD BERHASIL");
                },
                resetForm: true 
            }); 
            return false; 
        }
    });
});