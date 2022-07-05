let btndelete = document.querySelectorAll('.btn-delete');
let confirm_form = document.getElementById('confirm-form'); 


fn = function(e) { e.preventDefault() };
for ( var i = btndelete.length; i--; ) {
  /* disable  btns delete */
  btndelete[i].addEventListener('click', fn, false);
  
  /* show a modal when click the btns delete */
  btndelete[i].setAttribute('data-bs-toggle' , 'modal'); 
}

function deletefunc(id) {

  /* set an action for new form*/
    let action = `/posts/${id}/delete` ; 
     confirm_form.setAttribute('action' , action) ;
} 

