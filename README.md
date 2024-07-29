# CodeIgniter Google reCAPTCHA Helper

A simple helper for integrating Google reCAPTCHA with CodeIgniter. This helper makes it easy to add Google's reCAPTCHA to your CodeIgniter projects to enhance security.

## Features

- Easy integration of Google reCAPTCHA v2 and v3
- Customizable settings
- Simple validation process

## Requirements

- CodeIgniter 3.x
- PHP 7.0 or higher

## Installation

1. **Download the Helper:**

   Download the `google_recaptcha_helper` file and place it in the `application/helpers` directory of your CodeIgniter project.

2. **Load the Helper:**

   Load the helper in your controller where you want to use Google reCAPTCHA:

   ```php
   $this->load->helper('google_recaptcha_helper');
