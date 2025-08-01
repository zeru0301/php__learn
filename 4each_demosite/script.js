(() => {
    document.addEventListener('DOMContentLoaded', () => {
        

        // ハンバーガーアイコン
        (() => {
            const menubtn = document.querySelector(".menu-btn");
            const overlayBox = document.querySelector(".overlay-nav");
            const menuLine = document.querySelector(".menu-line");




            menubtn.addEventListener("click", () => {
                overlayBox.classList.toggle("show");
                menuLine.classList.toggle("active");

            });

        })();
        (() => {



            // ページトップボタン
            const topButton = document.querySelector(".toTop");
            const headerLogo = document.querySelector(".headImg");




            // スクロールしたときの処理
            window.addEventListener("scroll", () => {
                // 垂直方向のスクロール量
                const topDistance = window.scrollY;
                // console.log(topDistance);
                if (topDistance >= 1900) {
                    // スクロール量が1000以上のときクラス「show」を追加
                    topButton.classList.add("show");
                } else {
                    // それ以外のときクラス「show」を削除
                    topButton.classList.remove("show");
                }
            });


            // 上に戻るボタンをクリックしたときの処理
            // ウィンドウを指定した座標までスムースにスクロールする
            function doTop() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                });

            };
            headerLogo.addEventListener('click', doTop);
            topButton.addEventListener('click', doTop);
        })();


        // カルーセル
        (() => {
            const carousel = document.querySelector('.carousel');
            const imageContainer = carousel.querySelector('.image-container');
            const images = Array.from(imageContainer.querySelectorAll('img'));
            const prevButton = carousel.querySelector('.prev');
            const nextButton = carousel.querySelector('.next');
            const indicator = carousel.querySelector('.indicator');
            const indicatorItems = [];

            if (window.innerWidth <= 760) {
                let current = 0;

            function prev() {
                let target = current - 1;
                if (target < 0) {
                    target = images.length - 1;
                }
                to(target);
            }

            function next() {
                let target = current + 1;
                if (target >= images.length) {
                    target = 0;
                }
                to(target);
            }

            function to(target) {
                imageContainer.style.transform = `translateX(${target * -100}%)`;
                current = target;

                indicatorItems.forEach((item, index) => {
                    if (index === target) {
                        item.classList.add('current');
                    } else {
                        item.classList.remove('current');
                    }
                })

                auto();
            }

            prevButton.addEventListener('click', prev);
            nextButton.addEventListener('click', next);

            images.forEach((image, index) => {
                const li = document.createElement('li');
                if (index === 0) {
                    li.classList.add('current');
                }
                indicator.appendChild(li);

                indicatorItems.push(li);

                li.addEventListener('click', () => {
                    to(index);
                })
            });

            let touchStart;
            let touchMove;
            imageContainer.addEventListener('touchstart', (event) => {
                touchStart = event.touches[0].clientX;
                touchMove = touchStart;
            });
            imageContainer.addEventListener('touchmove', (event) => {
                event.preventDefault();
                touchMove = event.touches[0].clientX;
            });
            imageContainer.addEventListener('touchend', (event) => {
                if (touchMove < touchStart - 20) {
                    next();
                } else if (touchMove > touchStart + 20) {
                    prev();
                }
            });

            let timer;
            function auto() {
                clearTimeout(timer);
                timer = setTimeout(() => {
                    next();
                }, 3000);
            }
            auto();
                
            }else{

            
        }
        })();
    });

})();