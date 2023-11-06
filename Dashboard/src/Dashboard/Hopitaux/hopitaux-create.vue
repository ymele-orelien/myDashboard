<template>
        <!-- <div class="containe">
        <div class="main-video">
            <div class="video ">
                <img src="../../assets/img/not-found.svg">

                <div class="title">
                hospital genrale de douala
                </div>
            </div>
        </div>
        <div class="video-list">
            <div class="vid active"><img src="../../assets/img/not-found.svg" alt="">
                <div class="title">
                    hospital regional de douala
                </div>
            </div>
            <div class="vid">
            <img src="../../assets/img/news-1.jpg" alt="">

                <div class="title">
                    hospital millitaire
                </div>
            </div>
            <div class="vid">
                <img src="../../assets/img/news-2.jpg" alt="">

                <div class="title">
                    hospital genrale de douala
                </div>
            </div>
            <div class="vid">
                <img src="../../assets/img/news-3.jpg" alt="">

                <div class="title">
                    hospital genrale de douala
                </div>
            </div>
            <div class="vid">
                <img src="../../assets/img/news-4.jpg" alt="">

                <div class="title">
                    hospital genrale de douala
                </div>
            </div>
            <div class="vid">
                <img src="../../assets/img/news-5.jpg" alt="">

                <div class="title">
                    hospital genrale de douala
                </div>
            </div>
            <div class="vid">
                <img src="../../assets/img/news-6.jpg" alt="">

                <div class=" ">
                    hospital genrale de douala
                </div>
            </div>
            <div class="vid">
                <img src="../../assets/img/news-7.jpg" alt="">

                <div class="title">
                    hospital genrale de douala
                </div>
            </div>
        </div>
    </div> -->
</template>
<style>
.containe {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 25px;
width: 1000px !important;
margin: 0 !important;



}

.containe .main-video {
    background: #fff;
    border-radius: 10px;
    padding: 10px;
    width: 800px;
 
}

.containe .main-video img {
    width: 100%;
    border-radius: 5px;
}

.containe .main-video .title {
    color: #333;
    font-size: 23px;
    padding-top: 23px;
    padding-bottom: 15px;
}

.containe .video-list {
    background: #fff;
    border-radius: 5px;
    height: auto;
    overflow-y: scroll;
    width: 670px;
}

.containe .video-list::-webkit-scrollbar {
    width: 7px;
}

.containe .video-list::-webkit-scrollbar-track {
    background: #666;
    border-radius: 50px;
}


.containe .video-list .vid img {
    width: 100px;
    border-radius: 5px;
}

.containe .video-list .vid {
    display: flex;
    align-items: center;
    gap: 15px;
    background: #f7f7f7;
    margin: 10px;
    padding: 10px;
    border: 1px solid rgba(0, 0, 0, .1);
    cursor: pointer;

}

.containe .video-list .vid hover {
    background: #eee;
}

.containe .video-list .vid.active {
    background: #2980b9;
}

.containe .video-list .vid.active .title {
    color: #fff;
}

.containe .video-list .vid {
    color: #333;
    font-size: 17px;
}

@media(max-width:991px) {
    .containe {
        grid-template-columns: 1.5fr 1fr;
        padding: 10px;

    }
}

@media(max-width:991px) {
    .containe {
        grid-template-columns: 1.5fr;
        padding: 10px;

    }
}</style>