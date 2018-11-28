<?php
    //session_start();
    include('sidebar.inc.php');
    include('header.inc.php');
    include('pagination.inc.php'); ?>
<!DOCTYPE html>

<html>
    <head>
        <title>Module 1 - Phishing</title>
    </head>
    <body>
        <div class="header">
            <h2>Phishing and Social Engineering</h2>
        </div>
        <div class="content">
            <?php if (isset($_SESSION["username"])): ?>
                <div id="Page1">
                    <p>
                        <div class="definition">Phishing - a social engineering attack conducted by a singleton or organized group to retrieve confidential or sensitive credentials that could be used to gain access to authorized personnel areas, ranging from one's private information to high-security organization.</div><br /><br />

                        <div class="info">
                            Phishing attacks target victims by compromising passwords, credit card numbers, national identification numbers, and more sensitive information. However, these attacks aren't always obvious to those who have yet to encounter them. Ways of phishing include spoofed emails, fraudulent websites, and scanners where victims may not be as concerned to check it's legitimancy.<br /><br />

                            footer: Cite: Jakobsson, M., & Myers, S. (2007). Phishing and Countermeasures : Understanding the Increasing Problem of Electronic Identity Theft. Hoboken, N.J.: Wiley-Interscience. Retrieved from https://login.ezproxy.lib.uwf.edu/login?url=http://search.ebscohost.com/login.aspx?direct=true&db=e000xna&AN=172587&site=eds-live

                            According to CyberArk Global Advanced Threat Landscape Report 2018, 56 percent of IT security decision makers said that targeted phishing attacks were the <a href="https://www.cyberark.com/resource/cyberark-global-advanced-threat-landscape-report-2018/" target="_blank" style="color: #009CDE;text-decoration: none">top security threat</a> they've faced.<br /><br /><a href="https://www.verizonenterprise.com/resources/reports/rp_DBIR_2018_Report_en_xg.pdf" target="_blank" style="color: #009CDE;text-decoration: none">Verizon's 2018 Breach Investigations report</a>, 92 percent of malware is still delivered by email.<br /><br />


                            So what exactly is phishing? According to Merriam-Webster, phishing is a scam by which an Internet user is duped (as by a deceptive e-mail message) into revealing personal or confidential information which the scammer can use illicitly. <br /><br /><br />
                        </div>

                    </p>
                        <div class="pagination">
                            <button id="Left" style="bottom: 25px; right: 470px;" class="disPagination">&lt;</button>
                            <button id="1" style="bottom: 25px; right: 420px;" class="disPagination">1</button>
                            <button id="2" style="bottom: 25px; right: 370px;" onclick="return show('Page2', 'Page1');">2</button>
                            <button id="3"style="bottom: 25px; right: 320px;" onclick="return show('Page3', 'Page1');">3</button>
                            <button id="4"style="bottom: 25px; right: 270px;" onclick="return show('Page4', 'Page1');">4</button>
                            <button id="Right"style="bottom: 25px; right: 220px;" onclick="return show('Page2', 'Page1');">&gt;</button>
                        </div>

                </div>
                <div id="Page2" style="display:none">
                    <p>
                        Test Page 2<br /><br /><br />

                        <div class="pagination">
                            <button id="Left" style="bottom: 25px; right: 470px;" onclick="return show('Page1', 'Page2');">&lt;</button>
                            <button id="1" style="bottom: 25px; right: 420px;" onclick="return show('Page1', 'Page2');">1</button>
                            <button id="2" style="bottom: 25px; right: 370px;" class="disPagination">2</button>
                            <button id="3"style="bottom: 25px; right: 320px;" onclick="return show('Page3', 'Page2');">3</button>
                            <button id="4"style="bottom: 25px; right: 270px;" onclick="return show('Page4', 'Page2');">4</button>
                            <button id="Right"style="bottom: 25px; right: 220px;" onclick="return show('Page3', 'Page2');">&gt;</button>
                        </div>
                    </p>
                </div>
                <div id="Page3" style="display:none">
                    <p>
                        Test Page 3<br /><br /><br />

                        <div class="pagination">
                            <button id="Left" style="bottom: 25px; right: 470px;" onclick="return show('Page2', 'Page3');">&lt;</button>
                            <button id="1" style="bottom: 25px; right: 420px;" onclick="return show('Page1', 'Page3');">1</button>
                            <button id="2" style="bottom: 25px; right: 370px;" onclick="return show('Page2', 'Page3');">2</button>
                            <button id="3"style="bottom: 25px; right: 320px;" class="disPagination">3</button>
                            <button id="4"style="bottom: 25px; right: 270px;" onclick="return show('Page4', 'Page3');">4</button>
                            <button id="Right"style="bottom: 25px; right: 220px;" onclick="return show('Page4', 'Page3');">&gt;</button>
                        </div>
                    </p>
                </div>
                <div id="Page4" style="display:none">
                    <p>
                        Test Page 4<br /><br /><br />

                        <div class="pagination">
                            <button id="Left" style="bottom: 25px; right: 470px;" onclick="return show('Page3', 'Page4');">&lt;</button>
                            <button id="1" style="bottom: 25px; right: 420px;" onclick="return show('Page1', 'Page4');">1</button>
                            <button id="2" style="bottom: 25px; right: 370px;" onclick="return show('Page2', 'Page4');">2</button>
                            <button id="3"style="bottom: 25px; right: 320px;" onclick="return show('Page3', 'Page4');">3</button>
                            <button id="4"style="bottom: 25px; right: 270px;" class="disPagination">4</button>
                            <button id="Right"style="bottom: 25px; right: 220px;" class="disPagination">&gt;</button>
                        </div>
                    </p>
                    <div class="CompleteCourse">
                        <form action="updateProgress.php" method="post" id="completeModule">
                            <input type="submit" name="update" value="module1"/>
                        </form>
                    </div>
                </div>
            <?php else: ?>
                <p>
                    Error to login. Please retry login.
                </p>
            <?php endif ?>
        </div>
    </body>

    <script>
function show(shown, hidden) {
  document.getElementById(shown).style.display='block';
  document.getElementById(hidden).style.display='none';
  return false;
}
</script>

<style>
    .definition {
        background-color: #EEEEEE;
        color: black;
        width: 600px;
        border: 2px solid grey;
        padding: 10px;
        display: inline-block;
        position: fixed;
        left: 25%;
    }

    .info {
        position: fixed;
        top: 300px;
        margin-right: 250px;
    }
</style>
</html>