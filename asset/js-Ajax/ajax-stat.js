rechercheResult();

function rechercheResult () {
    let form = document.getElementById("formRecherche");
    form.addEventListener('submit',(e)=>{
        e.preventDefault();
        formData = new FormData(form);
        sendXHRRequest("page_mouvement_client/recherche-result.php","POST",formData).then(
            (response)=>{
                try {
                    let stat = JSON.parse(response); 
                    document.getElementById("totalCueillette").textContent = stat["somme"];
                    document.getElementById("reste").textContent = stat["reste"];
                    document.getElementById("cout_revient").textContent = stat["cout_revient"];
                    document.getElementById("montant_vente").textContent = stat["montant_vente"];
                    document.getElementById("montant_depense").textContent = stat["montant_depense"];
                    document.getElementById("benefice").textContent = stat["benefice"];
                } catch (error) {
                    
                    document.getElementById("totalCueillette").textContent = stat["somme"];
                    document.getElementById("reste").textContent = stat["reste"];
                    document.getElementById("cout_revient").textContent = stat["cout_revient"];
                    document.getElementById("montant_vente").textContent = stat["montant_vente"];
                    document.getElementById("montant_depense").textContent = stat["montant_depense"];
                    document.getElementById("benefice").textContent = stat["benefice"];
                }
            }
        )
    });
}