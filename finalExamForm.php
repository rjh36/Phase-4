<!DOCTYPE html>
<!--
This form holds the final exam.
-->
<form action="gradeFinal.php" method="post" id="final">
    <ol>
        <li><!-- Question 1. -->
            <h4>Sample question 1.</h4>

            <div>
                <!-- name = Q1A: Question 1 answers (group of answers) -->
                <!-- name = Q1A-A: Question 1 answers (answer A) -->
                <input type="radio" name="Q1A" id="Q1A-A" value="A"/>
                <label for="Q1A-A">A) The correct answer.</label>
            </div>

            <div>
                <input type="radio" name="Q1A" id="Q1A-B" value="B"/>
                <label for="Q1A-B">B) Wrong answer 1.</label>
            </div>

            <div>
                <input type="radio" name="Q1A" id="Q1A-C" value="C"/>
                <label for="Q1A-C">C) Wrong answer 2.</label>
            </div>

            <div>
                <input type="radio" name="Q1A" id="Q1A-D" value="D"/>
                <label for="Q1A-D">D) Wrong answer 3.</label>
            </div>
        </li>
    </ol>
    
    <input type="submit" value="Submit Final Exam"/>
</form>
