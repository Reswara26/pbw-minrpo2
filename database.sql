CREATE DATABASE IF NOT EXISTS portfolio_reswara;
USE portfolio_reswara;

CREATE TABLE IF NOT EXISTS skills (
  id      INT AUTO_INCREMENT PRIMARY KEY,
  nama    VARCHAR(100) NOT NULL,
  persen  INT          NOT NULL
);

INSERT INTO skills (nama, persen) VALUES
  ('MySQL & Database', 80),
  ('HTML & CSS',       75),
  ('Computer',         85),
  ('Teamwork',         90),
  ('Leadership',       70);
