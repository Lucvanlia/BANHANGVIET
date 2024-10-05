
<?php 
ob_start();
require_once "admin_test/ketnoi/conndb.php";

if (isset($_SESSION['message'])) {
    echo '<script type="text/javascript">',
         'document.addEventListener("DOMContentLoaded", function() {',
         'document.getElementById("myModal").style.display = "block";',
         '});',
         '</script>';

    // Xóa thông báo sau khi hiển thị
    unset($_SESSION['message']);
}
?>
<?php
// Nếu người dùng đã đăng nhập bằng Facebook, yêu cầu họ nhập số điện thoại
if (isset($_SESSION['login-facebook'])) {
    // Hiển thị form nhập số điện thoại
    echo '<form action="save_phone.php" method="POST">
            <label for="phone">Số điện thoại:</label>
            <input type="text" id="phone" name="phone" required>
            <input type="submit" value="Lưu số điện thoại">
          </form>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Google -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body>

    <?php 
       include"config.php";
       require_once"page/Header.php";    
       require_once"page/main.php";
       require_once"page/footer.php";
    
    ?>

    <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Đăng ký thành công!</p>
    </div>
</div>

<script>
    // Lấy phần tử modal
    var modal = document.getElementById("myModal");

    // Lấy phần tử nút đóng
    var span = document.getElementsByClassName("close")[0];

    // Khi người dùng nhấn vào nút X (close), đóng modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Khi người dùng nhấn ra ngoài modal, đóng modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
 <!-- Js Plugins -->

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
            window.gtranslateSettings = window.gtranslateSettings || {};
            window.gtranslateSettings["43217984"] = {
                default_language: "en", // Set Default Language
                languages: [
                    "af",
                    "sq",
                    "am",
                    "en",
                    "fa",
                    "ar",
                    "ps",
                    "ja",
                    "zh-CN",
                    "hy",
                    "az",
                    "eu",
                    "be",
                    "bn",
                    "bs",
                    "bg",
                    "ca",
                    "ceb",
                    "ny",
                    "zh-TW",
                    "co",
                    "hr",
                    "cs",
                    "da",
                    "nl",
                    "eo",
                    "et",
                    "tl",
                    "fi",
                    "fr",
                    "fy",
                    "gl",
                    "ka",
                    "de",
                    "el",
                    "gu",
                    "ht",
                    "ha",
                    "haw",
                    "iw",
                    "hi",
                    "hmn",
                    "hu",
                    "is",
                    "ig",
                    "id",
                    "ga",
                    "it",
                    "jw",
                    "kn",
                    "kk",
                    "km",
                    "ko",
                    "ku",
                    "ky",
                    "lo",
                    "la",
                    "lv",
                    "lt",
                    "lb",
                    "mk",
                    "mg",
                    "ms",
                    "ml",
                    "mt",
                    "mi",
                    "mr",
                    "mn",
                    "my",
                    "ne",
                    "no",
                    "pl",
                    "pt",
                    "pa",
                    "ro",
                    "ru",
                    "sm",
                    "gd",
                    "sr",
                    "st",
                    "sn",
                    "sd",
                    "si",
                    "sk",
                    "sl",
                    "so",
                    "es",
                    "su",
                    "sw",
                    "sv",
                    "tg",
                    "ta",
                    "te",
                    "th",
                    "tr",
                    "uk",
                    "ur",
                    "uz",
                    "vi",
                    "cy",
                    "xh",
                    "yi",
                    "yo",
                    "zu",
                ], // Languages Selected
                wrapper_selector: "#gt-mordadam-43217984", // Element Selected
                native_language_names: 0, // Set All Languages ​​Should Be Native Language From The Beginning
                flag_style: "2d", // Flag Style
                flag_size: 24, // Flag Size
                horizontal_position: "inline", // Set Horizontal Position
                flags_location: "flags\/", // Set Flags Location
            };
        </script>
        <script src="js/gt.min.js" data-gt-widget-id="43217984"></script>

</body>

</html>
<?php

ob_end_flush();

?>