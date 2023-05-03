import './bootstrap';
import $ from 'jquery';
window.$ = $;

let position = $(window).scrollTop();

$(window).scroll(function () {
    setTimeout(() => {
        let bike = "🚲";
        let dash = "_";
        let title = $(document).attr('title');
        let NewTitle = "";

        let scroll = $(window).scrollTop();
        if (scroll > position) {
            let x = title.indexOf(bike);
            console.log(x);
            x = x - 1;

            if (x == 0) {
                NewTitle += bike;
                for (let i = 0; i < 27; i++) {
                    NewTitle += dash;
                }
            } else if (x < 0) {
                for (let i = 0; i < 27; i++) {
                    NewTitle += dash;
                }
                NewTitle += bike;
            } else if (x > 0) {
                for (let i = 0; i < x; i++) {
                    NewTitle += dash;
                }
                NewTitle += bike;
                let z = 27 - x;
                if (z > 0) {
                    for (let i = 0; i <= z; i++) {
                        NewTitle += dash;
                    }
                }
            }
            $(document).attr("title", NewTitle);
        }

        else if (scroll < position){
            let x = title.indexOf(bike);
            console.log(x);
            x = x + 1;

            if (x == 27 || x > 27) {
                NewTitle += bike;
                for (let i = 0; i < 27; i++) {
                    NewTitle += dash;
                }
            } else if (x < 27 && x > 0) {
                for (let i = 0; i < x; i++) {
                    NewTitle += dash;
                }
                NewTitle += bike;
                let z = 27 - x;
                if (z > 0) {
                    for (let i = 0; i <= z; i++) {
                        NewTitle += dash;
                    }
                }
            }
            $(document).attr("title", NewTitle);
        }
        position = scroll;
    }, "200");
    
});