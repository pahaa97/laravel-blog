$('form#send-message').submit(function(){
    let url = window.location.href;

    $.ajax({
       type: "POST",
       url: url,
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
       dataType: 'json',
       data: {
            message: $(this).find('input[type="text"]').val()
       },
       success: function(data) {
           console.log(data);
       }
   });
});
