var cook; //cookieデータを格納する変数
var cStart, cEnd; //訪問回数部分を切取る為の位置を格納
var cnt; //訪問回数を格納

//cookieが使えるか確認
if (navigator.cookieEnabled) {
    cook = document.cookie + ";"; //変数cookにcookieデータを入れる

    //変数cStartにカウントデータの最初の位置を入れる
    cStart = cook.indexOf("counts=", 0);

    //データの有無で分岐
    if (cStart == -1) {
        //データの無い場合は最初の訪問ということ
        document.write("1回目の訪問です！");

        //cookieに訪問回数=1を書き込む
        document.cookie = "counts=1;";
    } else {
        //カウントデータの最後の部分「;」の位置を取得
        cEnd = cook.indexOf(";", cStart);

        //数値の部分だけを切り取る
        cnt = cook.substring(cStart + 7, cEnd);

        //数値に変換できない例外が出た時の処理
        try {
            //取得した回数に+1して表示する
            cnt = parseInt(cnt) + 1;
            document.write(cnt + "回目の訪問です！");

            //cookieに訪問回数を書き込む
            document.cookie = "counts=" + cnt + ";";
        } catch (e) {
            document.write("訪問回数の取得に失敗しました。");
        }
    }
} else {
    //cookieが使用できない時の処理
    document.write("cookieが使用できません。");
}






var modal = document.getElementById('myModal');

// Get pseudoelement to open Modal
var btn = document.getElementById("sized");

// Get the <span> element to close Modal
var span = document.getElementsByClassName("close")[0];

// When user clicks button, open Modal
btn.onclick = function () {
    modal.style.display = "block";
};

// When user clicks Close (x), close Modal
span.onclick = function () {
    modal.style.display = "none";
};

// When user clicks anywhere outside of the Modal, close Modal
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


time();

function time() {
    var now = new Date();
    document.getElementById("time").innerHTML = now.toLocaleTimeString();
}
setInterval('time()', 1000);


$("#title").hide();
$("#title").fadeIn(4000);
$("title").css("display:flex", "justify-content:centre");
$("p.titleName1").css("font-size", "50px").fadeIn;

$(document).ready(function () {
    $.fn.autoChanger = function () {
        var timeout = 3000;
        var speed = 1000;
        var element = $(this).children();
        var length = $(this).children().length;
        var current = 0;
        var next = 1;
        $(element).hide();
        $(element[0]).show();
        var change = function () {
            $(element[current]).fadeOut(speed);
            $(element[next]).fadeIn(speed);
            if ((next + 1) < element.length) {
                current = next;
                next++;
                timeout = 3000;
            } else {
                current = element.length - 1;
                next = 0;
                timeout = 10000;
            }
            timer = setTimeout(function () {
                change();
            }, timeout);
        };
        var timer = setTimeout(function () {
            change();
        }, timeout);
    }
    $(function () {
        $('#header-images').autoChanger();
    });
});

$(document).ready(function () {
    $.fn.autoChanger = function () {
        var timeout = 3000;
        var speed = 1000;
        var element = $(this).children();
        var length = $(this).children().length;
        var current = 0;
        var next = 1;
        $(element).hide();
        $(element[0]).show();
        var change = function () {
            $(element[current]).fadeOut(speed);
            $(element[next]).fadeIn(speed);
            if ((next + 1) < element.length) {
                current = next;
                next++;
                timeout = 3000;
            } else {
                current = element.length - 1;
                next = 0;
                timeout = 10000;
            }
            timer = setTimeout(function () {
                change();
            }, timeout);
        };
        var timer = setTimeout(function () {
            change();
        }, timeout);
    }
    $(function () {
        $('#header-images1').autoChanger();
    });
});

$(document).ready(function () {
    $.fn.autoChanger = function () {
        var timeout = 1000;
        var speed = 1000;
        var element = $(this).children();
        var length = $(this).children().length;
        var current = 0;
        var next = 1;
        $(element).hide();
        $(element[0]).show();
        var change = function () {
            $(element[current]).fadeOut(speed);
            $(element[next]).fadeIn(speed);
            if ((next + 1) < element.length) {
                current = next;
                next++;
                timeout = 3000;
            } else {
                current = element.length - 1;
                next = 0;
                timeout = 10000;
            }
            timer = setTimeout(function () {
                change();
            }, timeout);
        };
        var timer = setTimeout(function () {
            change();
        }, timeout);
    }
    $(function () {
        $('#header-images3').autoChanger();
    });
});