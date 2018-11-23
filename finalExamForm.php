<!DOCTYPE html>
<!--
This form composes the final exam.
-->
<form action="gradeFinal.php" method="post" id="final">
    <ol>
        <?php 
        // For loop increments over the questions.
        
        for($i = 1; $i < 5; $i++) {
        // Get all questions and answers.
        $get_Q_sql = "SELECT question FROM questions WHERE question_id = '$i'";
        $q_results = mysqli_query($db, $get_Q_sql);
        
        while ($q_row = mysqli_fetch_array($q_results)) {
        ?>
        
        <li>
            <h4><?php echo $q_row['question']; ?></h4>
        
        
            <?php 
            // Get all answers for the current question.
            $get_A_sql = "SELECT * FROM answers WHERE q_id = '$i'";
            $a_results = mysqli_query($db, $get_A_sql);

            while ($a_row = mysqli_fetch_array($a_results)) {
            ?>
        
            <div>
                <input type="radio" name="answers[<?php echo $a_row['q_id']; ?>]" value="<?php echo $a_row['answer_id']; ?>"/>
                <label for="answers[<?php echo $a_row['q_id']; ?>]"><?php echo $a_row['answer']; ?></label>
            </div>
            <?php 
            }
        echo "</li>";
          }
        }
        ?>
    </ol>
    
    <input type="submit" name="submit" value="Submit Final Exam"/>
</form>
