-- ====================================================================
-- Base de données : Pizzeria Bella Italia
-- Version pour deploiement InfinityFree (sans CREATE DATABASE)
-- A importer directement dans la BDD if0_XXXXXXXX_restaurant
-- ====================================================================

-- --------------------------------------------------------
-- Table : messages_contact
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
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS utilisateurs (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    nom_utilisateur VARCHAR(50)  NOT NULL UNIQUE,
    mot_de_passe    VARCHAR(255) NOT NULL,
    role            ENUM('admin') DEFAULT 'admin',
    date_creation   DATETIME     DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Compte admin par defaut (admin / admin123)
-- A changer en production !
-- --------------------------------------------------------
INSERT INTO utilisateurs (nom_utilisateur, mot_de_passe, role) VALUES
('admin', '$2y$10$zAGJ/3mrcCXvs110I./axe3.f3NShW721q7elQXkLrw6h7uGTPIl6', 'admin');
