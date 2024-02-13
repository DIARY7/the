insertCeuillette();

function insertCeuillette () {
    let form = document.getElementById("formCueillette");
    form.addEventListener('submit',(e)=>{
        e.preventDefault();
        formData = new FormData(form);
        sendXHRRequest("page_mouvement_client/insertion-cueillette.php","POST",formData).then(
            (response)=>{
                
                if (!response.toString().includes("nety")) {
                    Swal.fire({
                        icon:"error",
                        title: 'Oups!😥',
                        text: 'Le kilos restant dans cette percelle restant est de '+ response +"Kg",
                        icon: 'error',
                        confirmButtonText: 'Ressayer'
                    
                    });
                    document.querySelector(".erreur").textContent = "Le kilos restant dans cette percelle restant est de "+ response +"Kg";
                }
                else{
                    Swal.fire({
                        
                        icon: "success",
                        title: "Insertion reussi",
                        showConfirmButton: false,
                        timer: 1500
                      });
                    
                    document.querySelector(".erreur").innerHTML ="";
                }
                
            }
        )
    });
}


