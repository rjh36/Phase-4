/**
 * Author:  Robert
 * Created: Nov 23, 2018
 */

USE registration;

-- Drops tables if it exists
set @var=if((SELECT true FROM information_schema.TABLE_CONSTRAINTS WHERE
            CONSTRAINT_SCHEMA = DATABASE() AND
            TABLE_NAME        = 'questions' AND
            CONSTRAINT_NAME   = 'FK_CorrectAnswer' AND
            CONSTRAINT_TYPE   = 'FOREIGN KEY') = true,'ALTER TABLE questions
            drop foreign key FK_CorrectAnswer','select 1');

prepare stmt from @var;
execute stmt;
deallocate prepare stmt;

set @var=if((SELECT true FROM information_schema.TABLE_CONSTRAINTS WHERE
            CONSTRAINT_SCHEMA = DATABASE() AND
            TABLE_NAME        = 'answers' AND
            CONSTRAINT_NAME   = 'FK_AssocQuestion' AND
            CONSTRAINT_TYPE   = 'FOREIGN KEY') = true,'ALTER TABLE answers
            drop foreign key FK_AssocQuestion','select 1');

prepare stmt from @var;
execute stmt;
deallocate prepare stmt;


DROP TABLE IF EXISTS questions;
DROP TABLE IF EXISTS answers;

CREATE TABLE questions (
  question_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  question VARCHAR(200) UNIQUE NOT NULL,
  correct_answer_id INTEGER UNSIGNED,
  PRIMARY KEY (question_id)
);

CREATE TABLE answers (
  answer_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  answer VARCHAR(200) NOT NULL,
  q_id INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (answer_id),
  CONSTRAINT FK_AssocQuestion FOREIGN KEY (q_id)
    REFERENCES questions (question_id)
);

ALTER TABLE questions
    ADD CONSTRAINT FK_CorrectAnswer FOREIGN KEY (correct_answer_id)
    REFERENCES answers (answer_id);

-- Adds the questions

-- Question 1
INSERT INTO questions VALUES (null, "Sample question 1.", null);
SET @q := LAST_INSERT_ID();
-- Answers for question 1
INSERT INTO answers VALUES (null, "The correct answer.", @q);
SET @a := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "Wrong answer.", @q);
INSERT INTO answers VALUES (null, "Wrong answer.", @q);
INSERT INTO answers VALUES (null, "Wrong answer.", @q);
-- Adds the correct answer to question 1
UPDATE questions SET correct_answer_id = @a WHERE question_id = @q;


-- Question 2
INSERT INTO questions VALUES (null, "Sample question 2.", null);
SET @q := LAST_INSERT_ID();
-- Answers for question 2
INSERT INTO answers VALUES (null, "Wrong answer.", @q);
INSERT INTO answers VALUES (null, "The correct answer.", @q);
SET @a := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "Wrong answer.", @q);
INSERT INTO answers VALUES (null, "Wrong answer.", @q);
-- Adds the correct answer to question 2
UPDATE questions SET correct_answer_id = @a WHERE question_id = @q;

-- Question 3
INSERT INTO questions VALUES (null, "Sample question 3.", null);
SET @q := LAST_INSERT_ID();
-- Answers for question 3
INSERT INTO answers VALUES (null, "Wrong answer.", @q);
INSERT INTO answers VALUES (null, "Wrong answer.", @q);
INSERT INTO answers VALUES (null, "The correct answer.", @q);
SET @a := LAST_INSERT_ID();
INSERT INTO answers VALUES (null, "Wrong answer.", @q);
-- Adds the correct answer to question 3
UPDATE questions SET correct_answer_id = @a WHERE question_id = @q;

-- Question 4
INSERT INTO questions VALUES (null, "Sample question 4.", null);
SET @q := LAST_INSERT_ID();
-- Answers for question 4
INSERT INTO answers VALUES (null, "Wrong answer.", @q);
INSERT INTO answers VALUES (null, "Wrong answer.", @q);
INSERT INTO answers VALUES (null, "Wrong answer.", @q);
INSERT INTO answers VALUES (null, "The correct answer.", @q);
SET @a := LAST_INSERT_ID();
-- Adds the correct answer to question 4
UPDATE questions SET correct_answer_id = @a WHERE question_id = @q;