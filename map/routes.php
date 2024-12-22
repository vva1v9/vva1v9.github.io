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
    background-image: url('../image/back.jpg'); /* 替換背景圖片 */
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
        .nav-links {
            margin: 20px 0;
            list-style: none;
            padding: 0;
            display: flex;
            gap: 15px;
        }
        .nav-links li {
            display: inline;
        }
        .nav-links a {
            text-decoration: none;
            color: #007BFF;
            font-size: 18px;
        }
        .nav-links a:hover {
            text-decoration: underline;
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
	<div class="center-contect">
    <h1>Google地圖</h1>
	<iframe src="https://www.google.com/maps/d/embed?mid=1B9gOLZzyBmIL-Dvyd7ypseWBjsQvmPA&ehbc=2E312F" width="533" height="400"></iframe>
</body>
</html>