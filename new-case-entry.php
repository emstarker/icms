<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>নতুন তথ্য সংযোজন । মামলার তথ্য ব্যবস্থাপনা সিস্টেম</title>
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
            <li class="active-menu"><a href="new-case-entry.php"><i class="fa fa-file-circle-plus"></i><br>নতুন তথ্য সংযোজন</a></li>
            <li><a href="info-update.php"><i class="fa fa-square-pen"></i><br>তথ্য হালনাগাদকরণ</a></li>            
            <li><a href="reports.php"><i class="fa fa-book"></i><br>প্রতিবেদন</a></li>
			<li><a href="adv-info.php"><i class="fa fa-users"></i><br>আইনজীবীর তথ্য</a></li>
            <li><a href="info-correction.php"><i class="fa fa-user-pen"></i><br>তথ্য সংশোধন</a></li>
            <li><a href="index.php"><i class="fa fa-right-from-bracket"></i><br>লগআউট</a></li>
            <li><a href="settings.php"><i class="fa fa-bars"></i><br>সেটিংস</a></li>
        </ul>
    </div>
    <div class="home-content">
        <div class="cef-top">
            <h3 class="cef-top-text">মামলা সংক্রান্ত তথ্য নিম্নোক্ত ছক সংযোজন করুন</h3>
        </div>
        <hr>
        <div class="ce-form">
            <form action="#" method="post">
                <div class="cef-row">
                    <div class="cefr-e1">
                        <label class="cefr-l1" for="cefi-case-type">মামলার ধরণ:</label>
                    </div>
                    <div class="cefr-e2">
                        <select class="cefr-i2">
                            <option>মামলার ধরণ নির্বাচন করুন</option>
                            <option value="at-case">প্রশাসনিক ট্রাইব্যুনাল মামলা (এ.টি. মামলা)</option>
                            <option value="aat-case">প্রশাসনিক আপিল ট্রাইব্যুনাল মামলা (এ.এ.টি. মামলা)</option>
                            <option value="appeal-case">আপিল মামলা</option>
                            <option value="writ-petition">রিট পিটিশন</option>
                            <option value="leave-to-appeal">লিভ টু আপিল</option>
                            <option value="case-review">রিভিউ</option>
                            <option value="contempt-case">কন্টেম্প্ট মামলা</option>
                            <option value="other-case">অন্যান্য মামলা</option>
                        </select>
                    </div>
                    <div class="cefr-e3">
                        <label class="cefr-l3" for="cefi-court">আদালতের নাম:</label>
                    </div>
                    <div class="cefr-e4">
                        <select class="cefr-i4">
                            <option>আদালত নির্বাচন করুন</option>
                            <option value="admin-trib">প্রশাসনিক ট্রাইব্যুনাল</option>
                            <option value="appeal-trib">প্রশাসনিক আপিল ট্রাইব্যুনাল</option>
                            <option value="highcourt-div">হাইকোর্ট বিভাগ</option>
                            <option value="appeal-div">আপিল বিভাগ</option>
                            <option value="other-div">অন্যান্য</option>
                        </select>
                    </div>                    
                </div>
                <div class="cef-row">
                <div class="cefr-e1">
                        <label class="cefr-l1" for="cefi-case-no">মামলা নম্বর:</label>
                    </div>
                    <div class="cefr-e2">
                        <input class="cefr-i2" type="text" id="cefi-case-no" name="cefi-case-no" placeholder="মামলার নম্বর লিখুন" required>
                    </div>
                    <div class="cefr-e3">
                        <label class="cefr-l3" for="cefi-case-source">কোন মামলা হতে উদ্ভুত:</label>
                    </div>
                    <div class="cefr-e4">
                        <input class="cefr-i4" type="text" id="cefi-case-source" name="cefi-case-source" placeholder="মামলার নম্বর লিখুন">
                    </div>
                </div>
                <div class="cef-row">
                    <div class="cefr-e1">
                        <label class="cefr-l1" for="cefi-app-name">আবেদনকারীর নাম:</label>
                    </div>
                    <div class="cefr-e2">
                        <input class="cefr-i2" type="text" id="cefi-app-name" name="cefi-app-name" placeholder="আবেদনকারীর নাম লিখুন" required>
                    </div>
                    <div class="cefr-e3">
                        <label class="cefr-l3" for="cefi-app-desig">আবেদনকারীর পদবী:</label>
                    </div>
                    <div class="cefr-e4">
                        <input class="cefr-i4" type="text" id="cefi-app-desig" name="cefi-app-desig" placeholder="আবেদনকারীর পদবী লিখুন" required>
                    </div> 
                </div>                    
                <div class="cef-row">
                    <div class="cefr-e1">
                        <label class="cefr-l1" for="cefi-app-office">আবেদনকারীর কর্মস্থল:</label>
                    </div>
                    <div class="cefr-e2">
                        <input class="cefr-i2" type="text" id="cefi-app-office" name="cefi-app-office" placeholder="আবেদনকারীর কর্মস্থল লিখুন" required>
                    </div>
                    <div class="cefr-e3">
                        <label class="cefr-l3" for="cefi-app-addr">আবেদনকারীর ঠিকানা:</label>
                    </div>
                    <div class="cefr-e4">
                        <textarea class="cefr-i4" id="cefi-app-addr" name="cefi-app-addr" placeholder="আবেদনকারীর ঠিকানা লিখুন" required></textarea>
                    </div>
                </div>
                <div class="cef-row">
                    <div class="cefr-e1">
                        <label class="cefr-l1" for="cefi-def-name1">প্রতিপক্ষ:</label>
                    </div>
                    <div class="cefr-e2">
                        <input class="cefr-i2" type="text" id="cefi-def-name1" name="cefi-def-name1" value="সচিব, অভ্যন্তরীণ সম্পদ বিভাগ" readonly>
                        <select class="cefr-i2">
                            <option value="">নির্বাচন করুন</option>
                            <option value="def-nbr">চেয়ারম্যান, জাতীয় রাজস্ব বোর্ড</option>
                            <option value="def-nsd">মহাপরিচালক, জাতীয় সঞ্চয় অধিদপ্তর</option>
                            <option value="def-tat">প্রেসিডেন্ট, ট্যাকসেস আপীলাত ট্রাইব্যুনাল</option>
                            <option value="def-cevt">প্রেসিডেন্ট, কাস্টমস, এক্সাইজ ও ভ্যাট আপিলাত ট্রাইব্যুনাল</option>
                        </select>
                    </div>
                    <div class="cefr-e3">
                        <label class="cefr-l3" for="cefi-def-others">অন্যান্য প্রতিপক্ষ:</label>
                    </div>
                    <div class="cefr-e4">
                        <textarea class="cefr-i4" id="cefi-def-others" name="cefi-def-others" placeholder="অন্যান্য প্রতিপক্ষের নাম লিখুন"></textarea>
                    </div>
                </div>
                <div class="cef-row">
                    <div class="cefr-e1">
                        <label class="cefr-l1" for="cefi-def-office">মামলা সংশ্লিষ্ট অফিসের নাম:</label>
                    </div>
                    <div class="cefr-e2">
                        <input class="cefr-i2" type="text" id="cefi-def-office" name="cefi-def-office" placeholder="অফিসের নাম লিখুন" required>
                    </div>
                    <div class="cefr-e3">
                        <label class="cefr-l3" for="cefi-case-sub">মামলার বিষয়বস্তু:</label>
                    </div>
                    <div class="cefr-e4">
                        <textarea class="cefr-i4" id="cefi-case-sub" name="cefi-case-sub" placeholder="সংক্ষেপে বর্ণনা লিখুন" required></textarea>
                    </div>
                </div>
                <div class="cef-row">
                    <div class="cefr-e1">
                        <label class="cefr-l1" for="cefi-notice-rcv">নোটিশপ্রাপ্তির তারিখ:</label>
                    </div>
                    <div class="cefr-e2">
                        <input class="cefr-i2" type="date" id="cefi-notice-rcv" name="cefi-notice-rcv" required>
                    </div>
                    <div class="cefr-e3">
                        <label class="cefr-l3" for="cefi-written-send">লিখিত জবাব প্রেরণের শেষ তারিখ:</label>
                    </div>
                    <div class="cefr-e4">
                        <input class="cefr-i4" type="date" id="cefi-written-send" name="cefi-written-send" required>                        
                    </div>
                </div>               
                <div class="cef-row">
                    <div class="cef-submit">
                        <button id="cef-submit-button" type="submit">সংরক্ষণ করুন</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
    <div class="footer">
		<p id="assist">কারিগরি সহায়তায়ঃ আইসিটি সেল, অভ্যন্তরীণ সম্পদ বিভাগ</p>
		<p id="contact">যোগাযোগঃ <a href="mailto:info@ird.gov.bd">info@ird.gov.bd</a>, <a href="https://www.ird.gov.bd" target="_blank">ird.gov.bd</a></p>
	</div>
</body>
</html>