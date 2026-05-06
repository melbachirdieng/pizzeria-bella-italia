-- ====================================================================
-- Base de données : pizzeria_bella_italia
-- Site vitrine — Stage Mambo Inchaud (BTS SIO SLAM 2e année)
-- ====================================================================

CREATE DATABASE IF NOT EXISTS pizzeria_bella_italia
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE pizzeria_bella_italia;

-- --------------------------------------------------------
-- Table : messages_contact
-- Stocke les messages reçus via le formulaire de contact
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS messages_contact (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    nom         VARCHAR(100) NOT NULL,
    email       VARCHAR(150) NOT NULL,
    telephone   VARCHAR(20)  DEFAULT NULL,
    sujet       VARCHAR(200) NOT NULL,
    message     TEXT         NOT NULL,
    date_envoi  DATETIME     DEFAULT CURRENT_TIMESTAMP,
    lu          TINYINT(1)   DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Table : utilisateurs
-- Comptes admin (back-office pour consulter les messages)
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS utilisateurs (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    nom_utilisateur VARCHAR(50)  NOT NULL UNIQUE,
    mot_de_passe    VARCHAR(255) NOT NULL,
    role            ENUM('admin') DEFAULT 'admin',
    date_creation   DATETIME     DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Compte admin par défaut
-- Login : admin
-- Mot de passe : admin123
-- (le hash ci-dessous correspond bien à 'admin123' via password_hash)
-- À CHANGER en production !
-- --------------------------------------------------------
INSERT INTO utilisateurs (nom_utilisateur, mot_de_passe, role) VALUES
('admin', '$2y$10$XxQRhGwfOksbY8sGdU0Lyu1xnGZxVQ7xX3wWPQqK0d4NmDIkJ4xb6', 'admin');
