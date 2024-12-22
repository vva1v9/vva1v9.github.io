<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>Header</title>
    <style>
        .navbar {
            position: fixed;
            right: 10px;
            top: 72px;
            width: 200px;
            background-color: #333;
            overflow-x: hidden;
            transition: height 0.5s;
            height: 0;
            z-index: 10; /* 確保選單在標題之上 */
        }
        .navbar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #f2f2f2;
            display: block;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            text-align: left;
        }
        .navbar a:nth-child(1) { transition-delay: 0.1s; }
        .navbar a:nth-child(2) { transition-delay: 0.2s; }
        .navbar a:nth-child(3) { transition-delay: 0.3s; }
        .navbar a:nth-child(4) { transition-delay: 0.4s; }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .menu-btn {
            position: fixed;
            right: 10px;
            top: 18px;
            font-size: 36px;
            color: #333;
            cursor: pointer;
            z-index: 15; /* 確保選單按鈕在標題之上 */
        }
        .navbar-show {
            height: auto;
        }
        .navbar-show a {
            opacity: 1;
        }
        .fixed-header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #bbbbbb; /* 底色 */
            color: #333;
            text-align: center;
            padding: 1px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 5; /* 確保標題在最底層 */
        }
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            text-align: center;
            margin-top: 60px; /* 增加上邊距，避免被固定標題遮擋 */
        }
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
    </style>
    <script>
        function openNav() {
            var navbar = document.getElementById("navbar");
            navbar.classList.add("navbar-show");
        }

        function closeNav() {
            var navbar = document.getElementById("navbar");
            navbar.classList.remove("navbar-show");
        }
    </script>
</head>
<body>

    <div class="fixed-header">
        <h1>重修鳳山縣志之舊城導覽</h1>
    </div>
    <span class="menu-btn" onmouseover="openNav()">☰</span>
    <div id="navbar" class="navbar" onmouseover="openNav()" onmouseleave="closeNav()">
        <a href="index.php">首頁</a>
        <a href="map.php">舊城地圖</a>
        <a href="routes.php">Google地圖</a>
        <a href="info.php">其他資訊</a>
    </div>
</body>
</html>