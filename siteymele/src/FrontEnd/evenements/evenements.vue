<template>
    
    <section class="events">
        
        <div class="events-titre">
            <div style="color: red; font-weight: 600;">Actualites <br> par les evenements</div>

            <div ><h1 style="color: #fff;">Participes aux evenemnts et soutenez nous</h1></div>
            <div style="color: gray;">des conferences ,de campagnes sont orgonise par nos partenaires</div>
        </div>
        <div class="container">
            <div class="slide">
                <div class="item" style="background-image: url(../../../src/assets/images/medecin-aide-humanitaire-afrique-prenant-soin-patient_23-2149117859.avif);">

                    <div class="content">
                        <div class="name">Hospital General de douala</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>Details</button>
                    </div>
                </div>

                <div class="item" style="background-image: url(../../../src/assets/images/enf-hospitalise.jpg);">

                    <div class="content">
                        <div class="name">HOispital regional de limbe</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>Details</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(../../../src//assets/images/slideA.jpg);">

                    <div class="content">
                        <div class="name">Hospital laquitinie</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>Details</button>
                    </div>
                </div>

                <div class="item" style="background-image: url(../../../src/assets/images/slideC.webp);">

                    <div class="content">
                        <div class="name">Clinique la patience</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>Details</button>
                    </div>
                </div>

                <div class="item" style="background-image: url(../../../src/assets//images/slideB.jpg);">
                    <div class="content">
                        <div class="name">Centre Catholique de yaounde</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>Details</button>
                    </div>
                </div>
                <!-- Ajoutez d'autres éléments .item ici -->
            </div>

            <div class="butto">
                <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
</template>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let slideContainer = document.querySelector('.slide');

        function moveNext() {
            let items = slideContainer.querySelectorAll('.item');
            if (items.length > 0) {
                slideContainer.appendChild(items[0].cloneNode(true));
                slideContainer.removeChild(items[0]);
            }
        }

        function movePrev() {
            let items = slideContainer.querySelectorAll('.item');
            if (items.length > 0) {
                slideContainer.prepend(items[items.length - 1].cloneNode(true));
                slideContainer.removeChild(items[items.length - 1]);
            }
        }

        let next = document.querySelector('.next');
        let prev = document.querySelector('.prev');

        next.addEventListener('click', moveNext);
        prev.addEventListener('click', movePrev);

        // Défilement automatique toutes les 3 secondes
        let intervalId = setInterval(moveNext, 3000);

        // Arrête le défilement automatique lorsqu'une interaction de l'utilisateur est détectée
        slideContainer.addEventListener('mouseover', function() {
            clearInterval(intervalId);
        });

        // Redémarre le défilement automatique lorsque l'interaction de l'utilisateur est terminée
        slideContainer.addEventListener('mouseleave', function() {
            intervalId = setInterval(moveNext, 3000);
        });
    });
</script>


<style scoped> 
.containe
{
    width: 100%;
    height: auto;
    left: 0;
    right: 0;
    background: #2c275417;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;}
.events {
    top: -20%;
    padding: 1rem;
    background: #00002c;
    padding-bottom: 9rem;
}

.container {
    position: relative;

    width: 1000px;
    border-radius: 8px;
    height: 70vh;
}

.container .slide .item {
    width: 200px;
    height: 300px;
    position: absolute;
    top: 50%;
    transform: translate(0, -50%);
    border-radius: 20px;
    background-position: 50% 50%;
    background-size: cover;
    display: inline-block;
    transition: 0.5s;
}

.slide .item:nth-child(1),
.slide .item:nth-child(2) {
    top: 0;
    left: 0;
    transform: translate(0, 0);
    border-radius: 0;
    width: 100%;
    height: 100%;
}


.slide .item:nth-child(3) {
    left: 50%;
}

.slide .item:nth-child(4) {
    left: calc(50% + 220px);
}

.slide .item:nth-child(5) {
    left: calc(50% + 440px);
}

/* here n = 0, 1, 2, 3,... */
.slide .item:nth-child(n + 6) {
    left: calc(50% + 660px);
    opacity: 0;
}



.item .content {
    position: absolute;
    top: 50%;
    left: 100px;
    width: 300px;
    text-align: left;
    color: #eee;
    transform: translate(0, -50%);
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', 
    Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serifi;
    display: none;
}


.slide .item:nth-child(2) .content {
    display: block;
}


.content .name {
    font-size: 40px;
    text-transform: uppercase;
    font-weight: bold;
    opacity: 0;
    max-height: 100px;
    animation: animate 1s ease-in-out 1 forwards;
}

.content .des {
    margin-top: 10px;
    margin-bottom: 20px;
    opacity: 0;
    animation: animate 1s ease-in-out 0.3s 1 forwards;
}

.content button {
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    opacity: 0;
    color: #fff;
    background: red;
    animation: animate 1s ease-in-out 0.6s 1 forwards;
}



@keyframes animate {
    from {
        opacity: 0;
        transform: translate(0, 100px);
        filter: blur(33px);
    }

    to {
        opacity: 1;
        transform: translate(0);
        filter: blur(0);
    }
}



.butto {
    width: 100%;
    text-align: center;
    position: absolute;
    bottom: 20px;
}

.butto button {
    width: 40px;
    height: 35px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    margin: 0 5px;
    border: 1px solid #000;
    transition: 0.3s;
}

.button button:hover {
    background: #ababab;
    color: #fff;
}
.events-titre{
    display: flex;
    justify-content: space-between;
    margin: 5rem;
    color: #fff;
}
</style>