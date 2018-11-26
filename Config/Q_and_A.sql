/**
 * Author:  Robert
 * Created: Nov 23, 2018
 */

USE registration;

-- Resets the tables
DROP TABLE IF EXISTS answers;
DROP TABLE IF EXISTS questions;

-- Creates the tables
CREATE TABLE questions (
  question_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  question VARCHAR(200) UNIQUE NOT NULL,
  PRIMARY KEY (question_id)
);

CREATE TABLE answers (
  answer_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  answer VARCHAR(200) NOT NULL,
  q_id INTEGER UNSIGNED NOT NULL,
  correct BOOLEAN NOT NULL,
  PRIMARY KEY (answer_id),
  CONSTRAINT FK_AssocQuestion FOREIGN KEY (q_id)
    REFERENCES questions (question_id)
);

-- Adds the questions

-- Question 1
INSERT INTO questions VALUES (null, "Sample question 1.");
SET @q := LAST_INSERT_ID();
-- Answers for question 1
INSERT INTO answers VALUES (null, "The correct answer.", @q, TRUE);
INSERT INTO answers VALUES (null, "Wrong answer.", @q, FALSE);
INSERT INTO answers VALUES (null, "Wrong answer.", @q, FALSE);
INSERT INTO answers VALUES (null, "Wrong answer.", @q, FALSE);


-- Question 2
INSERT INTO questions VALUES (null, "Sample question 2.");
SET @q := LAST_INSERT_ID();
-- Answers for question 2
INSERT INTO answers VALUES (null, "Wrong answer.", @q, FALSE);
INSERT INTO answers VALUES (null, "The correct answer.", @q, TRUE);
INSERT INTO answers VALUES (null, "Wrong answer.", @q, FALSE);
INSERT INTO answers VALUES (null, "Wrong answer.", @q, FALSE);

-- Question 3
INSERT INTO questions VALUES (null, "Sample question 3.");
SET @q := LAST_INSERT_ID();
-- Answers for question 3
INSERT INTO answers VALUES (null, "Wrong answer.", @q, FALSE);
INSERT INTO answers VALUES (null, "Wrong answer.", @q, FALSE);
INSERT INTO answers VALUES (null, "The correct answer.", @q, TRUE);
INSERT INTO answers VALUES (null, "Wrong answer.", @q, FALSE);

-- Question 4
INSERT INTO questions VALUES (null, "Sample question 4.");
SET @q := LAST_INSERT_ID();
-- Answers for question 4
INSERT INTO answers VALUES (null, "Wrong answer.", @q, FALSE);
INSERT INTO answers VALUES (null, "Wrong answer.", @q, FALSE);
INSERT INTO answers VALUES (null, "Wrong answer.", @q, FALSE);
INSERT INTO answers VALUES (null, "The correct answer.", @q, TRUE);