<template>
    <div class="urgences">
        <h1>Nos Messages Urgences</h1>

        <div class="contain">
            <div class="bloc">
                <div class="img-box">
                    <img src="assets/images/urgence1.jpeg" alt="">
                </div>
                <div class="text">
                    <h3>Sonic Yamdjeu</h3>
                    <p>Bonjous a tous, j ai fait un accident de moto aucour duquel j ai pedu enormement du sang.
                        Donc il me faut 2 trouces de sang . Que celui 
                    </p>
                    <div class="div">
                        <button class="btn">Faire un don</button>
                    </div>
                </div>
            </div>
            <div class="bloc">
                <div class="img-box">
                    <img src="assets/images/urgence5.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Louis fonsi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, veritatis.
                        Minus labore ducimus quod voluptas rem eum assumenda sunt alias.
                        Omnis dolor sed rerum aperiam perspiciatis, nesciunt ad quaerat optio?
                    </p>
                    <div class="">
                        <button class="btn">Faire un don</button>
                    </div>
                </div>
            </div>
            <div class="bloc">
                <div class="img-box">
                    <img src="assets/images/OIP.jpeg" alt="">
                </div>
                <div class="text">
                    <h3>Chantal biya</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, veritatis.
                        Minus labore ducimus quod voluptas rem eum assumenda sunt alias.
                        Omnis dolor sed rerum aperiam perspiciatis, nesciunt ad quaerat optio?
                    </p>
                    <div>
                        <button class="btn">Faire un don</button>
                    </div>
                </div>
            </div>
            <div class="bloc">
                <div class="img-box">
                    <img src="assets/images/OIP.jpeg" alt="">
                </div>
                <div class="text">
                    <h3>Chantal biya</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, veritatis.
                        Minus labore ducimus quod voluptas rem eum assumenda sunt alias.
                        Omnis dolor sed rerum aperiam perspiciatis, nesciunt ad quaerat optio?
                    </p>
                    <div>
                        <button class="btn">Faire un don</button>
                    </div>
                </div>
            </div>
            <div class="bloc">
                <div class="img-box">
                    <img src="assets/images/OIP.jpeg" alt="">
                </div>
                <div class="text">
                    <h3>Chantal biya</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, veritatis.
                        Minus labore ducimus quod voluptas rem eum assumenda sunt alias.
                        Omnis dolor sed rerum aperiam perspiciatis, nesciunt ad quaerat optio?
                    </p>
                    <div>
                        <button class="btn">Faire un don</button>
                    </div>
                </div>
            </div>
            <div class="bloc">
                <div class="img-box">
                    <img src="assets/images/OIP.jpeg" alt="">
                </div>
                <div class="text">
                    <h3>Chantal biya</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, veritatis.
                        Minus labore ducimus quod voluptas rem eum assumenda sunt alias.
                        Omnis dolor sed rerum aperiam perspiciatis, nesciunt ad quaerat optio?
                    </p>
                    <div>
                        <button class="btn">Faire un don</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </template>
    <style>
    
.urgences h1 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: red;
}

.urgences p {
  font-size: 1rem;
  line-height: 25px;
}

.urgences {
    padding: 4rem 5%;
}

.contain {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    column-gap: 40px;
    row-gap: 40px;
}

.contain .bloc {
    background-color: #e0e0ee;
    overflow: hidden;
    border-radius: 10px;
}

.contain .bloc:hover {
    transform: scale(1.09);
    transition: transform 0.4s ease-in-out;
}

.contain .bloc .text {
    padding: 10px;
}

.text div {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 0;
}

.img-box img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    object-position: center;
    /* border-radius: 10px; */
}

.btn {
    background-color: red;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
}

@media (max-width: 761px){
    .contain {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 519px){
    .contain {
        grid-template-columns: repeat(1, 1fr);
    }
}

</style>
<script>
</script>