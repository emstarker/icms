<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>তথ্য হালনাগাদকরণ । মামলার তথ্য ব্যবস্থাপনা সিস্টেম</title>
    <link href="stylesheet.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <link rel="icon" type="image/png" href="govlogo.png">	
</head>  
<body>
	<div class="header-region">
	   <div class="header-left-region">
            <img id="header-logo-left" src="govlogo.png" alt="গণপ্রজাতন্ত্রী বাংলাদেশ সরকার">
	   </div>
	   <div class="header-mid-region">
            <h1 id="header-name">অভ্যন্তরীণ সম্পদ বিভাগ, অর্থ মন্ত্রণালয়</h1>
            <p id="soft-name">মামলার তথ্য ব্যবস্থাপনা সিস্টেম</p>
	   </div>
	   <div class="header-right-region">
            <img id="header-logo-right" src="softlogo.png" alt="মামলার তথ্য ব্যবস্থাপনা সিস্টেম">
	   </div>
	</div>
	<div class="navigation-bar">
        <ul>
            <li><a href="homepage.php"><i class="fa fa-house-chimney"></i><br>হোমপেজ</a></li>
            <li><a href="new-case-entry.php"><i class="fa fa-file-circle-plus"></i><br>নতুন তথ্য সংযোজন</a></li>
            <li class="active-menu"><a href="info-update.php"><i class="fa fa-square-pen"></i><br>তথ্য হালনাগাদকরণ</a></li>            
            <li><a href="reports.php"><i class="fa fa-book"></i><br>প্রতিবেদন</a></li>
			<li><a href="adv-info.php"><i class="fa fa-users"></i><br>আইনজীবীর তথ্য</a></li>
            <li><a href="info-correction.php"><i class="fa fa-user-pen"></i><br>তথ্য সংশোধন</a></li>
            <li><a href="index.php"><i class="fa fa-right-from-bracket"></i><br>লগআউট</a></li>
            <li><a href="settings.php"><i class="fa fa-bars"></i><br>সেটিংস</a></li>
        </ul>
    </div>
	<div class="home-content">
        <div class="info-update">
            <h4 class="iu-text">মামলা তথ্য হালনাগাদকরণ</h3>
        </div>
        <hr>
        <div class="iu-search">
            <div class="iu-search-label">
                <label class="iu-l1" for="iu-search-box">মামলার নম্বর দিয়ে সার্চ করুন:</label>
            </div>
            <div class="iu-search-box">
                <input class="iu-i2" type="text" id="iu-search-box" name="iu-search-box" placeholder="মামলা নম্বর লিখুন" required>
            </div>
            <div class="iu-button">
                <button class="iu-submit-button"><a href="info-update-form.php">সার্চ করুন</a></button>
            </div>       
        </div>
	</div>
	<div class="footer">
		<p id="assist">কারিগরি সহায়তায়ঃ আইসিটি সেল, অভ্যন্তরীণ সম্পদ বিভাগ</p>
		<p id="contact">যোগাযোগঃ <a href="mailto:info@ird.gov.bd">info@ird.gov.bd</a>, <a href="https://www.ird.gov.bd" target="_blank">ird.gov.bd</a></p>
	</div>
</body>
</html>