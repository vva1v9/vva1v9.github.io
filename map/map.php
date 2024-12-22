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
            color: #cccccc;
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
        img {
            display: block;
            margin: 0 auto;
            pointer-events: none; /* 禁用所有的圖片操作，如點擊 */
            user-select: none; /* 禁用圖片的選取 */
            border: 2px solid black; /* 加上黑色邊框 */
        }
        .clickable-area {
            position: absolute;
            cursor: pointer;
        }
        #info-display {
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
            color: #333;
            max-width: 100%; /* 限制最大寬度 */
            word-wrap: break-word; /* 自動換行 */
        }
        #continue-btn {
            display: none;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #cccccc;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        #continue-btn:hover {
            background-color: #bbbbbb;
		}
		
		#info-display p {
            max-width: 50ch; /* 限制最大寬度 */
            white-space: normal;
			word-wrap: break-word;
        }
    </style>
    <script>
        let lockedMessage = '';

        function showInfo(message) {
            if (!lockedMessage) {
                document.getElementById('info-display').innerText = message;
            }
        }

        function lockInfo(name, description) {
            lockedMessage = `${name}\n${description}`;
            const infoDisplay = document.getElementById('info-display');
            infoDisplay.innerHTML = `<p>${name}</p><p>${description}</p>`;
            document.getElementById('continue-btn').style.display = 'block';
            window.scrollTo({top: document.body.scrollHeight, behavior: 'smooth'});
        }

        function resetInfo() {
            lockedMessage = '';
            document.getElementById('info-display').innerText = '';
            document.getElementById('continue-btn').style.display = 'none';
        }

        document.addEventListener('mousemove', function(event) {
            if (lockedMessage) return; // 如果已鎖定則不更新訊息
            const areas = document.getElementsByClassName('clickable-area');
            for (let area of areas) {
                const rect = area.getBoundingClientRect();
                if (event.clientX >= rect.left && event.clientX <= rect.right && event.clientY >= rect.top && event.clientY <= rect.bottom) {
                    showInfo(area.getAttribute('data-message'));
                    break;
                }
            }
        });
    </script>   
</head>
<body>
    <div class="center-content">
        <h1>舊城地圖</h1>
        
        <!-- 包含圖片和熱區 -->
        <div style="position: relative;">
            <img alt="地圖" src="../image/S__3047430.jpg" width="533" height="400">
            
            <!-- 熱區 -->
            <div class="clickable-area" style="top: 15.34%; left: 26.04%; width: 7.22%; height: 10.68%;" data-message="西門（Se-mn̂g）" onclick="lockInfo('西門（Se-mn̂g）')"></div>
            <div class="clickable-area" style="top: 29.88%; left: 5.75%; width: 22.89%; height: 8.77%;" data-message="蛇山（Tsuâ-suann）" onclick="lockInfo('蛇山（Tsuâ-suann）', '在縣治右「府志」稱打鼓山勢若長蛇，故又名蛇山；誤。山勢尾蟠城內，與鼓山分脊聯岡，首趨外海。草木蓊薈，樵採資焉。')"></div>
            <div class="clickable-area" style="top: 40.02%; left: 4.71%; width: 15.67%; height: 9.04%;" data-message="打鼓山(Tá-kóo-suann/Tánn-káu-suann)" onclick="lockInfo('打鼓山(Tá-kóo-suann/Tánn-káu-suann)', '在興隆莊，縣西七里。俗呼打狗山。高峰插漢，高百餘丈，袤二十餘里。背障大海，樵採所資。舊時，水師營壘在焉。')"></div>
            <div class="clickable-area" style="top: 58.37%; left: 2.45%; width: 5.15%; height: 5.21%;" data-message="元興寺(Uân-hing-sī)" onclick="lockInfo('元興寺(Uân-hing-sī)', '在縣城南鼓山麓。乾隆八年，住僧經元募建。寺背山面海，門前有小港環之；園林茂密，竹木、花果之屬甚盛。循曲徑而上，仰凌絕頂、俯瞰大海，為近邑勝概。有寺田數甲。（鼓山元亨寺）')"></div>
            <div class="clickable-area" style="top: 54.27%; left: 8.43%; width: 3.92%; height: 9.04%;" data-message="龍目井(Liông-ba̍k-tsénn)" onclick="lockInfo('龍目井(Liông-ba̍k-tsénn)', '一在竹仔寮，為小竹橋、觀音山二莊交界：兩井相連，狀若龍目，故名。其泉清洌，相傳飲之可以愈痾。一在打鼓山麓：泉出石罅，夏秋雨潤，泉湧如噴雪翻花，潺湲遠聞；冬春稍細。然築為陂圳，可灌田百餘甲；汲以煮茗，清甘異常。極旱不竭；凡有亢旱，官民禱雨於此。（高雄大樹龍目井、鼓山區龍井里）')"></div>
            <div class="clickable-area" style="top: 56.18%; left: 14.20%; width: 9.48%; height: 6.58%;" data-message="南門(Lâm-mn̂g)" onclick="lockInfo('南門(Lâm-mn̂g)')"></div>
            <div class="clickable-area" style="top: 43.58%; left: 21.42%; width: 7.01%; height: 6.03%;" data-message="王爺宮(Ông-iâ-kiong)" onclick="lockInfo('王爺宮(Ông-iâ-kiong)')"></div>
            <div class="clickable-area" style="top: 38.65%; left: 42.65%; width: 7.22%; height: 7.67%;" data-message="參將署(Tsham-tsiong-sú)" onclick="lockInfo('參將署(Tsham-tsiong-sú)', '南路營參將署：在縣城南。康熙二十三年發帑建，歷任武職捐俸重修。')"></div>
            <div class="clickable-area" style="top: 46.32%; left: 38.53%; width: 26.39%; height: 3.84%;" data-message="軍裝房(Kun-tsong-pâng)" onclick="lockInfo('軍裝房(Kun-tsong-pâng)')"></div>
            <div class="clickable-area" style="top: 57.28%; left: 29.04%; width: 8.04%; height: 7.67%;" data-message="泗洲佛寺" onclick="lockInfo('泗洲佛寺', '在縣城西。創建莫考。寺前有潭一口為放生池，大旱方涸。（今廢）')"></div>
            <div class="clickable-area" style="top: 56.46%; left: 37.70%; width: 17.94%; height: 19.18%;" data-message="縣前街(Kuān-tsîng-ke)" onclick="lockInfo('縣前街(Kuān-tsîng-ke)')"></div>
            <div class="clickable-area" style="top: 52.62%; left: 56.88%; width: 7.84%; height: 5.21%;" data-message="典史署(Tián-sú-sú)" onclick="lockInfo('典史署(Tián-sú-sú)')"></div>
            <div class="clickable-area" style="top: 59.74%; left: 56.67%; width: 5.98%; height: 5.48%;" data-message="慈濟宮(Tsû-tsè-kiong)" onclick="lockInfo('慈濟宮(Tsû-tsè-kiong)', '或稱吳真人廟、或稱開山宮、或稱保生大帝廟、或稱大道公廟，皆斯神也：在興隆莊萬丹港口（內惟青雲宮）。創建舊，尋圮；乾隆二十八年重修。相傳海岸上漂流神像於此，鄉民立廟祀之又在一縣署前大街（左營慈濟宮）、一在興隆莊新岐鳳、一在鳳山上莊、一在半屏山後勁（後勁聖雲宮）、一在維新裏竹仔港（左營維新慈濟宮）、一在觀音山大社（大社保元宮），並康熙年間鄉人募建。按真君宋時人，吳姓，名本；同安白礁人。母夢吞白龜而生。長而學道，以治疾多效；及卒，人肖像祠之，有禱輒應。景佑間，敕廟額為「慈濟」。慶元間，敕為「忠顯」。開禧間封英惠侯，人群稱之為大道公焉。')"></div>
            <div class="clickable-area" style="top: 48.51%; left: 65.95%; width: 4.33%; height: 3.29%;" data-message="節孝祠" onclick="lockInfo('節孝祠')"></div>
            <div class="clickable-area" style="top: 48.51%; left: 71.11%; width: 3.09%; height: 3.29%;" data-message="國王廟(Kok-ông-biō)" onclick="lockInfo('國王廟(Kok-ông-biō)')"></div>
            <div class="clickable-area" style="top: 56.73%; left: 67.60%; width: 4.12%; height: 3.84%;" data-message="觀音亭(Kuan-im-tîng)" onclick="lockInfo('觀音亭(Kuan-im-tîng)')"></div>
            <div class="clickable-area" style="top: 54.81%; left: 72.76%; width: 6.39%; height: 5.48%;" data-message="龜山(Ku-suann)" onclick="lockInfo('龜山(Ku-suann)', '在縣治左，近接半屏山。形如龜，半蟠城內。繁陰密蔭，中多喬木，居民環聚其下；為邑勝概（有天后廟、觀音堂諸勝，別見「寺觀」部。')"></div>
            <div class="clickable-area" style="top: 63.58%; left: 63.06%; width: 6.19%; height: 4.93%;" data-message="義學(Gī-ha̍k)" onclick="lockInfo('義學(Gī-ha̍k)', '書院即義學。義學原在縣北文廟左，康熙四十九年知縣宋永清建；今廢。雍正四年，知縣蕭震移建城東廂內；講堂二間，左右齋舍。乾隆十一年，知縣呂鍾琇增建後堂。十六年，署縣吳開福增砌圍牆。二十二年知縣丁居信、二十七年知縣王瑛會相繼修按舊有社學在土墼埕保，康熙二十八年知府蔣毓英置；今移歸台灣管轄。')"></div>
            <div class="clickable-area" style="top: 69.61%; left: 59.77%; width: 6.60%; height: 5.21%;" data-message="關武廟(Kuan-bú-biō)" onclick="lockInfo('關武廟(Kuan-bú-biō)', '在縣治東門內。')"></div>
            <div class="clickable-area" style="top: 73.17%; left: 57.70%; width: 3.92%; height: 4.93%;" data-message="土地廟(Thóo-tē-biō)" onclick="lockInfo('土地廟(Thóo-tē-biō)')"></div>
            <div class="clickable-area" style="top: 80.57%; left: 55.23%; width: 6.80%; height: 10.96%;" data-message="東門(Tang-mn̂g)" onclick="lockInfo('東門(Tang-mn̂g)')"></div>
            <div class="clickable-area" style="top: 76.18%; left: 70.49%; width: 6.39%; height: 9.86%;" data-message="先農塔(Sian-lông-thah)" onclick="lockInfo('先農塔(Sian-lông-thah)')"></div>
            <div class="clickable-area" style="top: 40.02%; left: 72.34%; width: 11.13%; height: 6.03%;" data-message="北門(Pak-mn̂g)" onclick="lockInfo('北門(Pak-mn̂g)')"></div>
            <div class="clickable-area" style="top: 48.79%; left: 78.12%; width: 5.15%; height: 6.58%;" data-message="明倫堂(Bîng-lûn-tn̂g)" onclick="lockInfo('明倫堂(Bîng-lûn-tn̂g)')"></div>
            <div class="clickable-area" style="top: 33.99%; left: 83.68%; width: 6.39%; height: 6.03%;" data-message="城隍廟(Sîng-hông-biō)" onclick="lockInfo('城隍廟(Sîng-hông-biō)', '在縣治北門外文廟右。康熙五十七年，知縣李丕煜建祭儀，與風雲雷雨、山川壇並祀。')"></div>
            <div class="clickable-area" style="top: 41.66%; left: 83.68%; width: 6.19%; height: 3.84%;" data-message="忠義廟(Tiong-gī-biō)" onclick="lockInfo('忠義廟(Tiong-gī-biō)')"></div>
            <div class="clickable-area" style="top: 47.14%; left: 83.27%; width: 6.80%; height: 7.40%;" data-message="大廟(Tuā-biō)" onclick="lockInfo('大廟(Tuā-biō)')"></div>
            <div class="clickable-area" style="top: 57.55%; left: 79.77%; width: 8.25%; height: 7.12%;" data-message="蓮池潭(Lian-tî-thâm)" onclick="lockInfo('蓮池潭(Lian-tî-thâm)', '在縣治興隆莊北門外。潭修且廣，荷花滿沼，香聞數里。今為文廟泮池。（左營蓮池潭）')"></div>
            <div class="clickable-area" style="top: 36.46%; left: 90.69%; width: 5.98%; height: 6.58%;" data-message="濟武亭(Tsè-bú-tîng)" onclick="lockInfo('濟武亭(Tsè-bú-tîng)')"></div>
            <div class="clickable-area" style="top: 52.90%; left: 92.76%; width: 5.77%; height: 5.48%;" data-message="半屏山庄(Puàn-pîng-san-tsng)" onclick="lockInfo('半屏山庄(Puàn-pîng-san-tsng)', '在縣治東北。')"></div>
            <div class="clickable-area" style="top: 60.29%; left: 89.46%; width: 8.25%; height: 12.60%;" data-message="半屏山(Puàn-pîng-suann)" onclick="lockInfo('半屏山(Puàn-pîng-suann)', '在縣東北七里。形如列嶂如畫屏，故名；為文廟左翼。蓮花潭直逼山下，又如展旗，故亦名旗山。')"></div>
            <div class="clickable-area" style="top: 34.27%; left: 32.34%; width: 4.95%; height: 14.52%;" data-message="營房(Iânn-pâng)" onclick="lockInfo('營房(Iânn-pâng)')"></div>
            <div class="clickable-area" style="top: 29.06%; left: 37.50%; width: 19.59%; height: 5.21%;" data-message="營房(Iânn-pâng)" onclick="lockInfo('營房(Iânn-pâng)')"></div>
            <div class="clickable-area" style="top: 30.43%; left: 58.12%; width: 9.48%; height: 14.79%;" data-message="營房(Iânn-pâng)" onclick="lockInfo('營房(Iânn-pâng)')"></div>
        </div>

        <!-- 顯示資訊的區域 -->
        <div id="info-display"></div>
        <button id="continue-btn" onclick="resetInfo()">查看其他地點</button>
    </div>
</body>
</html>