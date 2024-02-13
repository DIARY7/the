var form = document.getElementById("formGenerer");

form.addEventListener("submit",(e)=>{
    e.preventDefault();
    var dataForm = new FormData(form);
    sendXHRRequest("page_mouvement_admin/insert-generer.php","POST",dataForm,null).then()
    
});

