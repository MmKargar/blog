let btndelete = document.querySelectorAll('.btn-delete');
let confirm_form = document.getElementById('confirm-form'); 

/* disable all btn delete */
fn = function(e) { e.preventDefault() };
for ( var i = btndelete.length; i--; ) {
  btndelete[i].addEventListener('click', fn, false);
  btndelete[i].setAttribute('data-bs-toggle' , 'modal'); 
}

function deletefunc(id) {
    let action = `/posts/${id}/delete` ; /* set an action for new form*/
     confirm_form.setAttribute('action' , action) ;
} 

