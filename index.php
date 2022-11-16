<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>মামলার তথ্য ব্যবস্থাপনা সিস্টেম । অভ্যন্তরীণ সম্পদ বিভাগ</title>
    <link href="stylesheet.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="govlogo.png">
</head>
<body>
    <div class="full-loginpage">
        <div class="gov-logo">
            <img class="gov-logo-image" src="govlogo.png" alt="গণপ্রজাতন্ত্রী বাংলাদেশ সরকার">
        </div>
        <div class="info">
            <h1 id="ird-login">অভ্যন্তরীণ সম্পদ বিভাগ</h1>
            <p class="address-login">অর্থ মন্ত্রণালয়</p>
            <p class="address-login">বাংলাদেশ সচিবালয়, ঢাকা ১০০০</p>
        </div>       
        <div class="welcome">
            <p class="welcome-text">অভ্যন্তরীণ সম্পদ বিভাগের মামলার তথ্য ব্যবস্থাপনা সিস্টেমে আপনাকে স্বাগতম</p>
        </div>        
        <div class="main-content">
            <div class="left-region">
                <img class="login-image" src="loginpage.png" alt="মামলার তথ্য">
            </div>
            <div class="right-region">
                <div class="login-box">
                    <form action="homepage.php" method="post">                    
                        <lebel for="login-username">ইউজার নেম</lebel>
                        <input class="login-input" type="text" id="login-username" placeholder="ইউজার নেম দিন" name="username" required>
                        <lebel for="-login-password">পাসওয়ার্ড</lebel>
                        <input class="login-input" type="password" id="login-password" placeholder="পাসওয়ার্ড দিন" name="password" required>
                        <button class="login-button" type="submit">প্রবেশ করুন</button>
                    </form>
                </div>                
            </div>
        </div>        
        <div class="footer">
            <p id="assist">কারিগরি সহায়তায়ঃ আইসিটি সেল, অভ্যন্তরীণ সম্পদ বিভাগ</p>
            <p id="contact">যোগাযোগঃ <a href="mailto:info@ird.gov.bd">info@ird.gov.bd</a>, <a href="https://www.ird.gov.bd" target="_blank">ird.gov.bd</a></p>
        </div>
    </div>
</body>
</html>