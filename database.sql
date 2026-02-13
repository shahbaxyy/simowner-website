-- SimOwner.com.pk Database Schema
-- Version: 1.0.0

-- Create database
CREATE DATABASE IF NOT EXISTS simowner_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE simowner_db;

-- Table: searches
CREATE TABLE IF NOT EXISTS searches (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    search_type ENUM('mobile', 'cnic') NOT NULL,
    search_value VARCHAR(20) NOT NULL,
    ip_address VARCHAR(45) NOT NULL,
    user_agent TEXT,
    network_detected VARCHAR(20) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_search_value (search_value),
    INDEX idx_created_at (created_at),
    INDEX idx_search_type (search_type)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table: contact_messages
CREATE TABLE IF NOT EXISTS contact_messages (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    ip_address VARCHAR(45) NOT NULL,
    is_read TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_is_read (is_read),
    INDEX idx_created_at (created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table: page_views
CREATE TABLE IF NOT EXISTS page_views (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    page_slug VARCHAR(100) NOT NULL,
    ip_address VARCHAR(45) NOT NULL,
    user_agent TEXT,
    referrer TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_page_slug (page_slug),
    INDEX idx_created_at (created_at),
    INDEX idx_page_date (page_slug, created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample data (optional for testing)
-- Note: In production, these tables will be populated through actual usage
