# Property Search Backend

A RESTful API for searching properties, built with Laravel.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [API Documentation](#api-documentation)
- [Contributing](#contributing)
- [License](#license)

## Introduction

The Property Search Backend is a Laravel-based web service designed for searching properties based on various criteria such as name, bedrooms, bathrooms, and more. It provides a simple and efficient way to query property data.

## Features

- Search properties by name, bedrooms, bathrooms, etc.
- RESTful API endpoints for property search.
- JSON responses for easy integration with client applications.

## Getting Started

### Prerequisites

Before you begin, ensure you have the following tools installed:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/)

### Installation

Follow these steps to get the Property Search API up and running:

```bash
# Clone the repository
git clone https://github.com/your-username/property-search-backend.git

# Navigate to the project directory
cd property-search-backend

# Install dependencies
composer install

# Copy the environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Set up your database configuration in the .env file

# Run migrations
php artisan migrate

# Run seeder
php artisan db:seed

# Start the development server
php artisan serve
