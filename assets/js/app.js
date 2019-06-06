$(function() {

    // トップ画面で音楽再生
    $("#top").on("click", function() {
        $("#OP").get(0).play();
    });

    // 入力欄のチェック
    $("#check").on("click", function() {
        let name = $("#name").val();
        let gender = $("input[name='gender']:checked").val();

        if (name == "") {
            $("#ghost").fadeIn(2000, function() {
                alert("なまえがないよ");
                $("#ghost").fadeOut();
            });

        } else if (gender == undefined) {
            $("#gengar").fadeIn(2000, function() {
                alert("せいべつをえらんでね");
                $("#gengar").fadeOut();
            });
        } else {
            $("#submit").fadeIn();
            $(this).remove();
        };
    });

    //モンスターボールをクリックした時の処理
    $("#pokeball").on("click", function() {
        $(".message").fadeOut(1000);
        $("#pokeball").addClass("animated bounceOut");
        $("#pokemon").delay(500).addClass("animated zoomInDown").fadeIn(function() {
            $("#voice").get(0).play();
        });
    });
});