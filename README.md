# Login Form with jQuery Validation and Secure PHP Backend

## Overview

This project showcases a login form with client-side validation using the jQuery Validation Plugin and server-side processing with PHP. It demonstrates secure password handling with PHP’s `password_hash` and `password_verify` functions, and includes a responsive design using Bootstrap.

## Features

- **Client-Side Validation**: Utilizes the jQuery Validation Plugin for validating form inputs.
- **AJAX Submission**: Submits the form asynchronously to the server without refreshing the page.
- **Secure Password Management**: Uses `password_hash` and `password_verify` for encrypted password storage and verification.
- **Error Handling**: Provides user feedback through error messages and success notifications.
- **Bootstrap Styling**: Includes Bootstrap for a modern and responsive login form.
- **Favicon**: Adds a customizable favicon for a professional touch.

## Project Structure

- **`index.php`**: The main PHP file containing the login form.
- **`index.js`**: JavaScript file handling form validation and AJAX submission.
- **`login-process.php`**: PHP script for processing login requests.
- **`Users.php`**: PHP class for interacting with the database and managing user authentication.
- **`inc/adodb5/`**: Directory containing ADOdb library files.
- **`css/styles.css`**: Custom CSS file for additional styling.

## Setup Instructions

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/jayeshmotwani/JqueryValidationDemo.git
   cd JqueryValidationDemo
