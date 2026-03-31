-- =============================================
--  DATABASE: portfolio_reswara
--  Cara pakai:
--  1. Buka phpMyAdmin di browser (http://localhost/phpmyadmin)
--  2. Klik tab "SQL"
--  3. Paste seluruh isi file ini
--  4. Klik tombol "Go"
-- =============================================

CREATE DATABASE IF NOT EXISTS portfolio_reswara;
USE portfolio_reswara;

-- Tabel skills
CREATE TABLE IF NOT EXISTS skills (
  id      INT AUTO_INCREMENT PRIMARY KEY,
  nama    VARCHAR(100) NOT NULL,
  persen  INT          NOT NULL
);

-- Isi data skills
INSERT INTO skills (nama, persen) VALUES
  ('MySQL & Database', 80),
  ('HTML & CSS',       75),
  ('Computer',         85),
  ('Teamwork',         90),
  ('Leadership',       70);
