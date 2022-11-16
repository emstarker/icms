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
        <div class="iu-form-container">
            <form action="#" method="post">
                <div class="cef-row">
                    <div class="cefr-e1">
                        <label class="cefr-l1" for="iu-case-ref">মামলার নম্বর:</label>
                    </div>
                    <div class="cefr-e2">
                        <input class="cefr-i2" type="text" id="iu-case-ref" name="iu-case-ref" placeholder="" required>
                    </div>                    
                </div>
                <div class="cef-row">
                    <div class="cefr-e1">
                        <label class="cefr-l1" for="iu-date-fix">ধার্য তারিখ:</label>
                    </div>
                    <div class="cefr-e2">
                        <input class="cefr-i2" type="date" id="iu-date-fix" name="iu-date-fix" required>
                    </div>
                    <div class="cefr-e3">
                        <label class="cefr-l3" for="iu-date-cause">ধার্যের কারণ:</label>
                    </div>
                    <div class="cefr-e4">
                        <input class="cefr-i4" type="text" id="iu-date-cause" name="iu-date-cause" placeholder="কারণ লিখুন" required>
                    </div>
                </div>
                <div class="cef-row">
                    <div class="cefr-e1">
                        <label class="cefr-l1" for="iu-action-taken">গৃহীত কার্যক্রম:</label>
                    </div>
                    <div class="cefr-e2">
                        <input class="cefr-i2" type="text" id="iu-action-taken" name="iu-action-taken" placeholder="বর্ণনা করুন" required>
                    </div>
                </div>
                <div class="cef-row">
                    <div class="cefr-e1">
                        <label class="cefr-l1" for="iu-ly-name">আইনজীবীর নাম:</label>
                    </div>
                    <div class="cefr-e2">
                        <input class="cefr-i2" type="text" id="iu-ly-name" name="iu-ly-name" placeholder="আইনজীবীর নাম লিখুন">
                    </div>
                    <div class="cefr-e3">
                        <label class="cefr-l3" for="iu-ly-contact">আইনজীবীর মোবাইল নম্বর:</label>
                    </div>
                    <div class="cefr-e4">
                        <input class="cefr-i4" type="number" id="iu-ly-contact" name="iu-ly-contact" placeholder="আবেদনকারীর মোবাইল নম্বর লিখুন" required>
                    </div>
                </div>     
                <div class="cef-row">
                    <div class="cefr-e1">
                        <label class="cefr-l1" for="iu-order">আদেশ:</label>
                    </div>
                    <div class="cefr-e2">
                        <input class="cefr-i2" type="text" id="iu-order" name="iu-order" placeholder="আদেশ লিখুন">
                    </div>
                    <div class="cefr-e3">
                        <label class="cefr-l3" for="iu-order-copy">আদেশের কপি:</label>
                    </div>
                    <div class="cefr-e4">
                        <input class="cefr-i4" type="file" id="iu-order-copy" name="iu-order-copy" placeholder="আদেশের কপি আপলোড করুন">
                    </div>
                </div>     
                <div class="cef-row">
                    <div class="cefr-e1">
                        <label class="cefr-l1" for="iu-implementation">বাস্তবায়ন:</label>
                    </div>
                    <div class="cefr-e2">
                        <input class="cefr-i2" type="text" id="iu-implementation" name="iu-implementation" placeholder="বর্ণনা লিখুন" required>
                    </div>
                    <div class="cefr-e3">
                        <label class="cefr-l3" for="iu-imp-comment">মন্তব্য (যদি থাকে):</label>
                    </div>
                    <div class="cefr-e4">
                        <input class="cefr-i4" type="text" id="iu-imp-comment" name="iu-imp-comment" placeholder="মন্তব্য লিখুন">
                    </div>
                </div>  
                <div class="cef-row">
                    <div class="cefr-e1">
                        <label class="cefr-l1" for="iu-appeal-date">আপিল দায়েরের সময়সীমা:</label>
                    </div>
                    <div class="cefr-e2">
                        <input class="cefr-i2" type="date" id="iu-appeal-date" name="iu-appeal-date" required>
                    </div>
                </div>
                <div class="cef-row">
                    <div class="cef-submit">
                        <button id="iu-submit-button" type="submit">হালনাগাদকৃত তথ্য সংরক্ষণ করুন</button>
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