window.addEventListener("load", () => {
    const checkLights = () => {
   
        fetch("ajax.php", {})
        .then(response => response.json())
        .then(data => {
            // document.querySelector("#contenantCourriels").innerHTML = data;
            console.log(data);
            
            data.forEach(light => {
                let selectedLight = light.id;
                if (light.status == 1) {
                    document.getElementById(selectedLight).src = "img/light-on.png";
                }
                
                else {
                    document.getElementById(selectedLight).src = "img/light-off.png";
                }
                
            });


            setTimeout(checkLights, 5000);
        })

        
    }	

    checkLights();
})