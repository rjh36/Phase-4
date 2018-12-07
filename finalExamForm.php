<!DOCTYPE html>
<!--
This form composes the final exam.
-->
<form action="gradeFinal.php" method="post" id="final">
    <ol>
        <?php 
        // For loop increments over the questions.
        
        // Sets up the queries for the database.
        $Q_stmt = $db->prepare("SELECT question FROM questions WHERE question_id = ?");
        $Q_stmt->bind_param("i", $i);
        
        $A_stmt = $db->prepare("SELECT * FROM answers WHERE q_id = ?");
        $A_stmt->bind_param("i", $i);
        
        for($i = 1; $i <= NUM_FINAL_QUESTIONS; $i++) {
        // Get all questions.
        $Q_stmt->execute();
        $Q_results = $Q_stmt->get_result();
        
        while ($q_row = mysqli_fetch_array($Q_results)) {
        ?>
        
        <li>
            <h4><?php echo $q_row['question']; ?></h4>
        
            <?php 
            // Get all answers for the current question.
            $A_stmt->execute();
            $A_results = $A_stmt->get_result();

            while ($a_row = mysqli_fetch_array($A_results)) {
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
