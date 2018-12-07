/**
 * Author:  Robert
 * Created: Dec 6, 2018
 */

USE cybersec_2;

-- Resets the question and answer tables.
TRUNCATE TABLE answers;
TRUNCATE TABLE questions;


-- Adds the questions
-- Module 1: Phishing
-- 1
INSERT INTO questions VALUES (null, "Ninety-two percent of malicious software is delivered by:");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "external devices.", @q, FALSE);
INSERT INTO answers VALUES (null, "an unsecure wi-fi hotspot.", @q, FALSE);
INSERT INTO answers VALUES (null, "email.", @q, TRUE);
INSERT INTO answers VALUES (null, "hackers cracking your password.", @q, FALSE);
-- 2
INSERT INTO questions VALUES (null, "If you receive a credible-looking email from your bank requesting information with a link to their website, you should: ");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "click on the link and provide the necessary information immediately.", @q, FALSE);
INSERT INTO answers VALUES (null, "report the email to authorities.", @q, FALSE);
INSERT INTO answers VALUES (null, "avoid clicking the link and navigate to the bank’s website independently.", @q, TRUE);
INSERT INTO answers VALUES (null, "reply to the email to verify the sender is legitimate.", @q, FALSE);
-- 3
INSERT INTO questions VALUES (null, "It is perfectly safe to click on a link or open an attachment if it was sent by someone you know well.");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "True.", @q, FALSE);
INSERT INTO answers VALUES (null, "False.", @q, TRUE);
-- 4
INSERT INTO questions VALUES (null, "What is the purpose of malware?");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "To gain control of your system.", @q, FALSE);
INSERT INTO answers VALUES (null, "To collect your personal, sensitive information.", @q, FALSE);
INSERT INTO answers VALUES (null, "Marketing.", @q, FALSE);
INSERT INTO answers VALUES (null, "All of the above.", @q, TRUE);
-- 5
INSERT INTO questions VALUES (null, "A good way to avoid falling victim to a phishing scam is to only access your email from your iPhone.");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "True.", @q, FALSE);
INSERT INTO answers VALUES (null, "False.", @q, TRUE);


-- Module 2: Password Strength
-- 6
INSERT INTO questions VALUES (null, "One thing that is NOT important when it comes to passwords is:");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "encryption.", @q, FALSE);
INSERT INTO answers VALUES (null, "ease.", @q, TRUE);
INSERT INTO answers VALUES (null, "length.", @q, FALSE);
INSERT INTO answers VALUES (null, "entropy.", @q, FALSE);
-- 7
INSERT INTO questions VALUES (null, "Of the passwords below, which is the best example of a strong password:");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "H%c!az>.+40rst~=LNE", @q, TRUE);
INSERT INTO answers VALUES (null, "ILoveMyCatSooooooMuch", @q, FALSE);
INSERT INTO answers VALUES (null, "R3m3mb3rM3!!!!", @q, FALSE);
INSERT INTO answers VALUES (null, "8675309jennysnumber", @q, FALSE);
-- 8
INSERT INTO questions VALUES (null, "The best way to remember your passwords is to:");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "write them down on paper and keep them near your computer.", @q, FALSE);
INSERT INTO answers VALUES (null, "use software specifically designed to store and protect your passwords.", @q, TRUE);
INSERT INTO answers VALUES (null, "keep them in a file on your computer’s desktop.", @q, FALSE);
INSERT INTO answers VALUES (null, "use the same passwords for all your accounts so they’re easy to memorize.", @q, FALSE);
-- 9
INSERT INTO questions VALUES (null, "Of the options below, the best way to create a strong password is to:");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "use an online password generator.", @q, TRUE);
INSERT INTO answers VALUES (null, "make it the same as your email address.", @q, FALSE);
INSERT INTO answers VALUES (null, "use a combination of your loved ones’ names and birthdays.", @q, FALSE);
INSERT INTO answers VALUES (null, "repeat the same 4 characters 10 times to make it really long.", @q, FALSE);
-- 10
INSERT INTO questions VALUES (null, "You are the only one responsible for protecting your password.");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "True.", @q, FALSE);
INSERT INTO answers VALUES (null, "False.", @q, TRUE);


-- Module 3: Patches and Antivirus
-- 11
INSERT INTO questions VALUES (null, "You should install software updates as soon as they’re available.");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "True.", @q, TRUE);
INSERT INTO answers VALUES (null, "False.", @q, FALSE);
-- 12
INSERT INTO questions VALUES (null, "If you always install your patches, then you don’t need antivirus software.");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "True.", @q, FALSE);
INSERT INTO answers VALUES (null, "False.", @q, TRUE);
-- 13
INSERT INTO questions VALUES (null, "Which of the following is NOT a type of antivirus scan?");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "Quick.", @q, FALSE);
INSERT INTO answers VALUES (null, "On-access.", @q, FALSE);
INSERT INTO answers VALUES (null, "Full system.", @q, FALSE);
INSERT INTO answers VALUES (null, "Emergency.", @q, TRUE);
-- 14
INSERT INTO questions VALUES (null, "What are the two main methods used by antivirus software to detect malware?");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "Heuristics and virus definition.", @q, TRUE);
INSERT INTO answers VALUES (null, "Virus definition and virus signature.", @q, FALSE);
INSERT INTO answers VALUES (null, "Both a and b.", @q, FALSE);
INSERT INTO answers VALUES (null, "Parsing and sweeping.", @q, FALSE);
-- 15
INSERT INTO questions VALUES (null, "If your patches are up to date and you have good antivirus software, then:");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "you can download anything safely.", @q, FALSE);
INSERT INTO answers VALUES (null, "there is no malware on your machine.", @q, FALSE);
INSERT INTO answers VALUES (null, "you are more protected but still vulnerable.", @q, TRUE);
INSERT INTO answers VALUES (null, "you shouldn’t have to install any more updates.", @q, FALSE);


-- Module 4: Public Wi-Fi Security
-- 16
INSERT INTO questions VALUES (null, "What should you do before logging on to a public wi-fi network?");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "Verify the name of the network with an employee.", @q, TRUE);
INSERT INTO answers VALUES (null, "Hide your screen from people nearby.", @q, FALSE);
INSERT INTO answers VALUES (null, "Disable your firewall.", @q, FALSE);
INSERT INTO answers VALUES (null, "Do a full-system scan.", @q, FALSE);
-- 17
INSERT INTO questions VALUES (null, "What is a VPN?");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "A Virtual Protected Network.", @q, FALSE);
INSERT INTO answers VALUES (null, "A Verified Private Number.", @q, FALSE);
INSERT INTO answers VALUES (null, "A Verified Protected Number.", @q, FALSE);
INSERT INTO answers VALUES (null, "A Virtual Private Network.", @q, TRUE);
-- 18
INSERT INTO questions VALUES (null, "HTTP is safer than HTTPS.");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "True.", @q, FALSE);
INSERT INTO answers VALUES (null, "False.", @q, TRUE);
-- 19
INSERT INTO questions VALUES (null, "Which of the following is NOT a public wi-fi safety tip?");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "Turn off sharing in your Network Settings in your Control Panel. You can save these settings for public networks.", @q, FALSE);
INSERT INTO answers VALUES (null, "Turn off wi-fi when you’re not using it and disable the “connect automatically” feature so you can control when you’re on a public network.", @q, FALSE);
INSERT INTO answers VALUES (null, "Cover your screen so nearby hackers can’t see what you’re doing.", @q, TRUE);
INSERT INTO answers VALUES (null, "Always log out of your accounts when you’re done using them.", @q, FALSE);
-- 20
INSERT INTO questions VALUES (null, "If the public wi-fi network you’re using is password protected, then it is secure.");
SET @q := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "True.", @q, FALSE);
INSERT INTO answers VALUES (null, "False.", @q, TRUE);