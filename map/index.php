<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>舊城導覽</title>
    <?php include 'header.php'; ?>
    <style>
        body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    text-align: center;
    font-family: 'Arial', sans-serif;
    background: linear-gradient(to bottom, #f7f7f7, #e1e1e1);
    background-image: url('../image/images.jpg'); /* 替換背景圖片 */ background-image: url('../image/back.jpg'); /* 替換背景圖片 */
    background-size: cover; /* 使圖片覆蓋整個背景 */
    background-position: center; /* 將背景圖片居中 */
    background-repeat: no-repeat; /* 防止背景圖片重複 */
}

        .center-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .button-container {
            margin: 20px 0;
            display: flex;
            gap: 15px;
        }
        .nav-button {
            padding: 10px 20px;
            font-size: 18px;
            color: white;
            background-color: #bbbbbb;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .nav-button:hover {
            background-color: #cccccc;
        }
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }
        h1 {
            font-family: 'Georgia', serif;
            font-size: 36px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="center-content">
        <h1>讚的啦</h1>
        <div class="button-container">
            <a class="nav-button" href="map.php">舊城地圖與簡介</a>
            <a class="nav-button" href="routes.php">Google地圖</a>
            <a class="nav-button" href="info.php">其他資訊</a>
        </div>
    </div>
</body>
</html>