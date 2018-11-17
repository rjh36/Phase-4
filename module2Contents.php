<!DOCTYPE html>
<div class="pages">
    <div class="1">
        <h3>Introduction</h3>
        <p>
            &emsp;One of the most important concepts in cyber security as it relates to users is the idea of the password.  
        Pretty much any system with an account feature makes use of user-generated passwords.  
        While password are one of the most common and effective security measures out there, there are flaws.  
        Primarily, a flaw in passwords is that both users and administrators/developers are responsible for ensuring their effectiveness.  
        Administrators and developers are responsible for ensuring that their record of the password is kept safe using encryption and restricting access to that data.  
        Users, on the other hand, are responsible for ensuring that their password is not stolen, as well as ensuring that the password they create has proper “password strength.”
        </p>
        <p>
            &emsp;This module will contain a brief overview on password encryption.  
        After that the module will go into a more in-depth discussion on password strength.  
        Finally, there will be a short game to review and reinforce your knowledge!
        </p>
    </div>

    <div class="2">
        <h3>Encryption</h3>
        <p>
            &emsp;When making an account system, developers need to ensure that the passwords of their users are not exposed to anyone.  
        Say that your password is:  <b>JEokr34805uow/,.mkl;!@(*</b>.  
        If someone gets access to the document you wrote it down on (because a password like that basically has to be written down) they can enter your account quite easily.  
        However, if the system you are trying to access transmits the password as it is, 
        as “plain text,” then anyone who listens for that kind of information shall receive your password.  
        Also, if someone manages to get access to the database, 
        they would simply have every password for every user.
        </p>
        <p>
            &emsp;As a result of all of this, the data has to be encrypted for transmission and storage.  
        For transmission encryption, the best bet is to encrypt according to a pre-existing algorithm and to not use an original one.  
        Therefore, your password will most likely be encrypted for transmission according to something like: 
        RSA, Blowfish, Twofish, or Advanced Encryption Standard (AES).
        </p>
        <p>
            &emsp;For storage encryption, the best bet is to use a hashing algorithm.  
        If you don’t already know, a hashing algorithm is considered one-way encryption.  
        Say that your password is: <b>Billy</b> (easy to remember, but also very easy to guess).  
        If a hashing algorithm of some kind was run on Billy, you would get something like <b>rejowgh4wi0i3q4!#^&)*</b> which is pretty much random.  
        What is important about a hash is that is irreversible, 
        so that even if someone gets access to the password when it is stored in the database, 
        they would have <b>rejowgh4wi0i3q4!#^&)*</b> and therefore, 
        no way to change it back to <b>Billy</b> in order to illicitly access that user’s account.
        </p>
        <p>
            &emsp;There are good and bad hashing algorithms. Some good ones are:
        </p>
        <ul>
            <li>
                SHA256
            </li>
            <li>
                SHA512
            </li>
            <li>
                SHA-3
            </li>
            <li>
                BLAKE2s
            </li>
            <li>
                BLAKE2b
            </li>
        </ul>
        <p>
            &emsp;On other hand, “bad” hashing algorithms are bad because they have been broken, 
        meaning that it is rather easy for an attacker to reverse the hash and get the password from the hash.  
        The two main broken hash functions are:
        </p>
        <ul>
            <li>
                MD5
            </li>
            <li>
                SHA-1
            </li>
        </ul>
    </div>

    <div class="3">
        <h3>Password Strength</h3>
        <p>
            &emsp;You may have been wondering why explanations of encryption have been so focused on.  
        It has to do with how a hacker would try to get access to get your password.  
        If they cannot break the encryptions then they have two main paths to get it.  
        One path is through getting you to give them your password somehow; 
        for example, through setting up a keylogger or social engineering method.  
        The other path is why password strength is important.
        </p>
        <p>
            &emsp;The reason why password strength is important is that if some hacker gets access to your hashed password and can’t break the encryption, 
        then they would have to - essentially - guess. 
        Remember, the good hashing algorithms are one-way, 
        so if they cannot reverse the process then they would have to guess at what password produced that hashed string based on the algorithm.
        </p>
        <p>
            &emsp;Returning to the previous example, Password: <b>Billy</b> and Hash: <b>rejowgh4wi0i3q4!#^&)*</b>.  
        An assailant would have to run a bunch of passwords through the hashing algorithm and compare the resulting hash to <b>rejowgh4wi0i3q4!#^&)*</b>.  
        Good password strength exponentially decreases the success rate of this kind of guessing.
        </p>
    </div>
    
    <div class="4">
        <h4>Length</h4>
        <p>
            &emsp;One of the most important concepts in password strength is the character length of the password itself.  
        Longer passwords mean it would take longer to figure out.  
        Say the system you are trying to access only allows lowercase alphabetical characters and the minimum sized password was five characters (which is a very bad practice, by the way). 
        Then an assailant could just run all possible answers for a string of a-z characters.  
        They could have the password in:
        <b>26 X 26 X 26 X 26 X 26 = 11,881,376</b> attempts if they know the hashing algorithm used, 
        which is not that much for a computer.
        </p>
        <p>
            &emsp;Another thing of note is that the most common passwords are of a certain length.  According to this diagram:
        </p>
        <img src="Images/top-million-common-passwords-by-length.png" alt="Most common passwords" style="width:1000px; height:600px;">
        <p>
        The vast majority of common passwords are ones that probably fulfill the bare minimum requirements of most password systems.  
        A hacker can get very far with a list of the most common password.
        </p>
    </div>
    <div class="5">
        <h4>Characters Allowed</h4>
        <p>
            &emsp;As mentioned before, limiting the number of characters allowed in your password is a bad idea.  
        <a href="https://en.wikipedia.org/wiki/Unicode">Unicode</a> has about 137,439 characters, 
        allowing almost all of them in a password would be much better than limiting your passwords to a-z, A-Z, and 0-9 values.  
        Using the full range of Unicode would greatly complicate a hacker’s life when they try to guess your password using a program.
        </p>
    </div>
    <div class="6">
        <h4>Entropy and Special Cases</h4>
        <p>
            &emsp;The concept of entropy in a password is also important, 
        a 15 character password is a decent length, 
        but <b>aaaaaaaaaaaaaaa</b> is still an absolutely terrible password.  
        Having entropy in a password means that it has variety in the characters used within it.
        </p>
        <p>
            &emsp;Special case passwords are the ones that are incredibly easy to guess.  
        Some examples of special case passwords are:
        </p>
        <ul>
            <li>
                The username
            </li>
            <li>
                The email address
            </li>
            <li>
                The URL/domain of the website
            </li>
            <li>
                The app name
            </li>
            <li>
                <b>Password</b>
            </li>
        </ul>
        <p>
            &emsp;Don’t use horribly obvious passwords in general and you should be okay.  
        Maybe check lists of most common passwords and ensure you aren’t using any!
        </p>
    </div>
    <div class="7">
        <h3>Conclusion</h3>
        <p>
            &emsp;And that's about it! If you need help generating or managing your passwords, 
        there are plenty of safe, 
        secure tools that are just a quick, 
        online search away.
        </p>
    </div>
    <div class="8">
        <h3>Game?</h3>
        <!-- Game stuff here? -->
    </div>
</div>