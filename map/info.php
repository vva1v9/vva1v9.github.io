<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>圖片範圍選取</title>
	  <?php include 'header.php'; ?>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        #image-container {
            position: relative;
            display: inline-block;
            border: 2px solid black;
            margin-top: 20px;
        }
        #selection-box {
            position: absolute;
            border: 2px dashed red;
            display: none;
        }
        #output {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
    <script>
        let startX, startY, endX, endY;
        let selecting = false;

        function handleImageUpload(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '100%';
                img.style.height = 'auto';
                img.id = 'uploaded-image';

                const container = document.getElementById('image-container');
                container.innerHTML = '';
                container.appendChild(img);

                const selectionBox = document.createElement('div');
                selectionBox.id = 'selection-box';
                container.appendChild(selectionBox);

                img.addEventListener('mousedown', (e) => startSelection(e, img));
                window.addEventListener('mousemove', (e) => updateSelection(e, img));
                window.addEventListener('mouseup', (e) => endSelection(e, img));
            };

            reader.readAsDataURL(file);
        }

        function startSelection(event, img) {
            selecting = true;
            const rect = img.getBoundingClientRect();
            startX = (event.clientX - rect.left) / rect.width * 100;
            startY = (event.clientY - rect.top) / rect.height * 100;
            const selectionBox = document.getElementById('selection-box');
            selectionBox.style.left = `${startX}%`;
            selectionBox.style.top = `${startY}%`;
            selectionBox.style.width = 0;
            selectionBox.style.height = 0;
            selectionBox.style.display = 'block';
        }

        function updateSelection(event, img) {
            if (!selecting) return;
            const rect = img.getBoundingClientRect();
            endX = (event.clientX - rect.left) / rect.width * 100;
            endY = (event.clientY - rect.top) / rect.height * 100;
            const selectionBox = document.getElementById('selection-box');
            selectionBox.style.width = `${Math.abs(endX - startX)}%`;
            selectionBox.style.height = `${Math.abs(endY - startY)}%`;
            selectionBox.style.left = `${Math.min(startX, endX)}%`;
            selectionBox.style.top = `${Math.min(startY, endY)}%`;
        }

        function endSelection(event, img) {
            if (!selecting) return;
            selecting = false;
            const rect = img.getBoundingClientRect();
            const width = Math.abs(endX - startX);
            const height = Math.abs(endY - startY);
            const output = document.getElementById('output');
            output.textContent = `top: ${Math.min(startY, endY).toFixed(2)}%; left: ${Math.min(startX, endX).toFixed(2)}%; width: ${width.toFixed(2)}%; height: ${height.toFixed(2)}%`;
        }
    </script>
</head>
<body>
    <h1>上傳圖片並框選範圍</h1>
    <input type="file" accept="image/*" onchange="handleImageUpload(event)">
    <div id="image-container"></div>
    <div id="output"></div>

</body>
</html>