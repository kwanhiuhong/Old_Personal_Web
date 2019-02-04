
<?php
    session_start();
    if(isset($_SESSION['password'])){
        print "
        <label class='switch' id='switch_0'>
            <input id='switch_button' type='checkbox' onchange='verify();' disabled='' checked>
            <span class='slider round'></span>
        </label>
        <font color='black' size='1'>Status:</font><font color='black' size='1' id='Status' style='font-weight:bold;' id='Status'> Unlocked</font>
        <span id='TorF' style='display:none;'>True</span>
        <ul>
            <li><font color='red'>My CV</font> - <a href='KHH CV_latest.pdf'><font color='blue'>Terry Kwan Hiu Hong</font></a></li>
            <li><font color='red'>My Linkedin Profile</font> - <a href='https://www.linkedin.com/in/terry-kwan-0303a4135/' ><font color='blue'>Terry Kwan</font></a></li>
            <li><font color='red'>Certificate of programming in C by Zhejiang University</font> - <a href='Programming_with_C_CAP203353000390.png' ><font color='blue'>MOOC about programming language C (In Mandarin)</font></a></li>
            <li><a href='Personal_info.html'><font color='blue'>Personal Information</font></a></li>
            <li><a href='Exam_Slips.html'><font color='blue'>Exam Slips</font></a></li>
            <li><a href='Empl_Proof.html'><font color='blue'>Employment Proof for Past Interships/Work Experiences</font></a></li>
            <li><a href='Extra_Cur_and_Certs.html'><font color='blue'>Extra-curricular Actitivities and Certificates</font></a></li>
        </li></ul>
        ";
    }else{
        print "
        <font color='black' size='1'>Items with ** require password for unlocking the access, which shall be included in the application email/cover letter.</font>
        <br/>
        <font color='black' size='1'>Please switch on the button below and input the password to unlock the links below.</font>
        <br/>
        <label class='switch' id='switch_0'>
            <input id='switch_button' type='checkbox' onchange='verify();'>
            <span class='slider round'></span>
        </label>
        <font color='black' size='1'>Status:</font><font color='black' size='1' id='Status' style='font-weight:bold;' id='Status'> Locked</font>
        <span id='TorF' style='display:none;'>False</span>
        <ul>
            <li><font color='red'>My CV</font> - <a onclick=\"verify();\"><font color='blue'>Terry Kwan Hiu Hong **</font></a></li>
            <li><font color='red'>My Linkedin Profile</font> - <a href='https://www.linkedin.com/in/terry-kwan-0303a4135/' ><font color='blue'>Terry Kwan</font></a></li>
            <li><font color='red'>Certificate of programming in C by Zhejiang University</font> - <a href='Programming_with_C_CAP203353000390.png' ><font color='blue'>MOOC about programming language C (In Mandarin)</font></a></li>
            <li><a onclick=\"verify();\"><font color='blue'>Personal Information **</font></a></li>
            <li><a onclick=\"verify();\"><font color='blue'>Exam Slips **</font></a></li>
            <li><a onclick=\"verify();\"><font color='blue'>Employment Proof for Past Interships/Work Experiences **</font></a></li>
            <li><a onclick=\"verify();\"><font color='blue'>Extra-curricular Actitivities and Certificates **</font></a></li>
        </li></ul>
        ";
    }

    // 600 seconds
    // $inactive = 600; 
    // $session_life = time() - $_session['timeout'];
    // if($session_life > $inactive){  
    //     session_destroy(); 
    // }
    // $_session['timeout'] = time();

?>