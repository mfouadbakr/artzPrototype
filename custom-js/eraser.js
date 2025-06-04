$('body').on('click', '#btnDeleteFile', function() {
    var link = $('#btnDeleteFile').val();
    //alert("value = "+$('#btnDeleteFile').val());
    $.ajax({
        url: 'controllers/storyController.php',
        data: {function2call: 'deleteFile' , filePath: link},
        type: 'post',
        dataType: "text",
        success: function (data) {
            // action to be done
            
            alert(data);
            // empty area
            $('#main3').html("");
            viewFiles();
            document.getElementById("btnModalClose").click();
            //location.reload();
            },
            error: function(response){
                alert("failed to delete file" + response);
            }
            });
  });