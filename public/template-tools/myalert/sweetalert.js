// Sweet alert and Confirm



function deactive_tool(execute){
    Swal.fire({
        title: 'Are you sure?',
        text: "Some pages may affected!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, deactive it!'
      }).then((result) => {
        if (result.value) {
          load(execute, false);
          Swal.fire(
            'Deleted',
            'Your file has been deleted.'
          )      
          redirect('/setting');
        }

        
      });

}

function confirm_me(execute,message_confirm, message_ui){
    Swal.fire({
        title: 'Are you sure?',
        text: message_ui,
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, ' + message_confirm
      }).then((result) => {
        if (result.value) {
          redirect(execute); 
        }
        
        

        
      });
    }

  function infoerror(title){
    Swal.fire({
      type: 'error',
      title: 'Oops...',
      text: title,
      // footer: '<a href>Why do I have this issue?</a>'
    })
  }
  function infosuccess(title){
    Swal.fire({
      type: 'success',
      title: 'Success',
      text: title,
      // footer: '<a href>Why do I have this issue?</a>'
    })
  }











function deleting(link){
    Swal.fire({
      title: 'Are you sure?',
      text: "You can't undo this action",
      type: 'warning',
      showCancelButton: true, 
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Delete it!'
    }).then((result) => {
      if (result.value) {
        Swal.fire(
          'Deleted',
          'Your file has been deleted.'
        )
        
        redirect(link);
        
      }
    });
}



function prevent(about){
  Swal.fire({
    type: 'error',
    title: 'Oops...',
    text: about + ' Access is not given yet',
  })
}




// Converting phone number
function phone(a,b){
  var phone = $(a).attr('phone');
  var phone_id = '';
  for(var i=0; i<phone.length; i++){
      if(i==0){
        if(phone[i]=='0' && phone[i+1]=='8'){
          phone_id = '+62 ';
        }
      }else{
        phone_id += phone[i];
      }
  }
  $(a).append(phone_id);
}

